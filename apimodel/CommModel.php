<?php
include_once(JJPATH.'/util/ConstantUtil.php');
include_once(JJPATH.'/util/WorkIdUtil.php');
class  CommModel extends Model
{
		//	/**
	// * 删除评论
	// * @param id 表示被评论对应的某条新闻,帖子,动弹的id 或者某条消息的 friendid
	// * @param catalog 表示该评论所属什么类型：1新闻  2帖子  3动弹  4动态&留言
//	// * @param replyid 表示被回复的单个评论id
	// * @param authorid 表示该评论的原始作者id
	// * @return

	//params.put("id", id);
	//	params.put("catalog", catalog);
	//	params.put("replyid", replyid);
	//	params.put("authorid", authorid);
	public function  delete($uid,$replyid,$catalog)
	{

		if($catalog==5)
		{
//				$m=$this->orm->message[$replyid];
//				if($workidutil->getUid($workid)==$authorid||$workidutil->getUid($workid)==$m['receiver'])
//				{
//					  if($m->delete()!=null)
//			  {
//			  		return ResultUtil::getResult(1, "删除成功");
//			  }
//			  		
//				}else 
//				{
//					  return ResultUtil::getResult(2, "删除失败");
//				}
		}
		$comm=$this->orm->comm[$replyid];
		$id=$comm['tweet_id'];
		if($comm['user_id']==$uid)
		{
			  if($comm->delete()!=null)
			  {
			  		
			  		if($catalog==3)
			  		{
			  			
			  			 $this->getModel("tweet")->delcomm($id);
			  		}
			  		return 'ok';
			  		
			  }
		}
	    return 2;
	}
	
		 //* @param id 表示被评论的某条新闻，帖子，动弹的id 或者某条消息的 friendid 
	 //* @param catalog 表示该评论所属什么类型：1新闻  2帖子  3动弹  4动态
	 //* @param replyid 表示被回复的单个评论id
	 //* @param authorid 表示该评论的原始作者id
	 //* @param uid 用户uid 一般都是当前登录用户uid
	 //* @param content 发表评论的内容
  public function  reply($workid,$id,$catalog,$replyid,$authorid,$uid,$content,$agent)
  {
         $pattern_src="/\[(\d{0,2})\]/i";
			 $pattern_src1 = "/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i";
        $replacement = "<img src='http://www.111work.com/api/web/static/images/emoticons/\\1.gif' alt='\\1' />";
		$rf=null;
		$workidutil=new WorkIdUtil();
		$result=null;
		if(!$workidutil->check($workid, $uid, $result))
		{
			return $result;
		}
 
		else
		{
			if($catalog==3)
			{
				$rf="tweet_id";
				$content="@".$this->orm->user[$authorid]['uname']."  ".$content;
			}else
			{
				$rf="tweet_id";
			}
			$comm=array();
			 $content=preg_replace($pattern_src,$replacement,$content);
		    $comm['user_id']=$uid;
		     $comm['content']=$content;
		      $comm['catalog']=$catalog;
		   $comm['comm_id']=$replyid;
		       $comm[$rf]=$id;
				if(UseragentUtil::getPhoneModel($agent))
		  {
		  	 $comm['appclient']=UseragentUtil::getPhoneModel($agent);
		  }
		       $commr=$this->orm->comm()->insert($comm)->getRow();

		     if($commr!=null)
		     {
		     	    $r=array();
		     	    $commid=$commr['id'];
		     	  
		            $r=$this->orm->comm[$commid]->getRow();
		            $user=$this->orm->user[$uid];
		            $r['content']=preg_replace($pattern_src1,"", $r['content']);
     	            $r['uname']=$user['uname'];
                      $r['portrait']=$user['portrait'];
                        if(    $r['content']==null||   $r['content']=="")   $r['content']="<无文本内容>";
			        if($catalog==3)
			        {
			        $this->getModel("tweet")->addcomm($id);
			        }
		     	   return ResultUtil::getResulthascomm(1, "回复成功",$r);
		     }  
		}
  } 

public	function pub($uid,$id,$catalog,$content)
	{
		$pattern_src="/\[(\d{0,2})\]/i";
	    $pattern_src1 = "/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i";
        $replacement = "<img src='http://www.111work.com/api/web/static/images/emoticons/\\1.gif' alt='\\1' />";
		$rf=null;
			if($catalog==3)
			{
				$rf="tweet_id";
			}else
			{
				$rf="tweet_id";
			}
			$comm=array();
			 $content=preg_replace($pattern_src,$replacement,$content);
		    $comm['user_id']=$uid;
		     $comm['content']=$content;
		      $comm['catalog']=$catalog;
	
		       $comm[$rf]=$id;
		       
		       $commr=$this->orm->comm()->insert($comm)->getRow();

		     if($commr!=null)
		     {
		     	   $this->getModel("tweet")->addcomm($id);
		          return 1;
		     }  
		}

 
	public function getComm($uid,$pageSize,$id,$catalog,$pageIndex)
	{
		$pattern_src1 = "/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i";
		$commlist=array();
		$rf=null;
		$count=0;
		$r=array();
	
		if($catalog==3)
		{
			$rf="tweet_id";
		}else if($catalog==5)
		{
			
		

			$mess=$this->orm->message("user_id",$uid)->where('friend',$id)->limit($pageSize,$pageIndex*$pageSize)->order('id desc');
			$count=$mess->count();
			$i=0;
		   foreach ($mess as $t)
	     	{
			$m=$t->getRow();
			$r[$i]['uname']=$this->orm->user[$m['sender']]['uname'];
			$r[$i]['portrait']=$this->orm->user[$m['sender']]['portrait'];
		    $r[$i]['user_id']=$m['sender'];
		    $r[$i]['content']=$m['content'];
		       $r[$i]['appclient']="";
		          $r[$i]['id']=$m['id'];
		             $r[$i]['pubdate']=strtotime($m['pubdate']);
		      
			$i++;
	    	}

	     $commlist['allcount']=$count;
		$commlist['pagesize']=$i;
		$commlist['comms']=$r;
		return $commlist;
		
		}
		$comm=$this->orm->comm($rf,$id)->limit($pageSize,$pageIndex*$pageSize)->order('id desc');
		$count=$comm->count();
		$i=0;
		foreach ($comm as $t)
		{
			$r[$i]=$t->getRow();
			$r[$i]['uname']=$t->user['uname'];
			$r[$i]['portrait']=$t->user['portrait'];
			  	$r[$i]['pubdate']=strtotime($r[$i]['pubdate']);
				   $qq=ConstantUtil::$qq;
		    	$replacementqq="\$qq[$1]";
		       
		        $pattern_srcqq = "#<img src='http://www.111work.com/api/web/static/images/emoticons/(\d{0,2}).gif' alt='(\d{0,2})' />#e";
  
		    	   $body=preg_replace($pattern_srcqq,$replacementqq, $r[$i]['content']);
			
			
			   $r[$i]['content']=preg_replace($pattern_src1,"", $body);
			     if(  $r[$i]['content']==null||  $r[$i]['content']=="")  $r[$i]['content']="<无文本内容>";
			$i++;
		}
		if($pageSize>$count)
		{
			$pageSize=$count;
		}
		
		$commlist['allcount']=$count;
		$commlist['pagesize']=intval($pageSize);
		$commlist['comms']=$r;
		return $commlist;
	}
}
