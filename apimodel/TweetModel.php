<?php
include_once(JJPATH.'/util/ConstantUtil.php');
include_once(JJPATH.'/util/WorkIdUtil.php');
class  TweetModel extends Model
{
	public function  getall()
	{
		return $this->orm->tweet()->fetchAllData();
	}
	public function addcomm($id)
	{
		$tweet=$this->orm->tweet[$id];
		$tweet['commentcount']=$tweet['commentcount']+1;
		$tweet->update();
	}
	public function delcomm($id)
	{
		$tweet=$this->orm->tweet[$id];
		$tweet['commentcount']=$tweet['commentcount']-1;
		$tweet->update();
	}
	public function delete($uid,$tweetid)
	{
		
		$tweet=$this->orm->tweet[$tweetid];
		if($tweet['user_id']==$uid)
		{
			if($tweet->delete()!=null)
			{
						exit('ok');
			}
		else{
			exit('删除失败,无权限或不存在该档案');
			}
	}
		else 
		{
					exit('删除失败,无权限或不存在该档案');
		}
		

	    	
	}
	public function pub($uid,$body,$workid,$hasimg,$agent)
	{

		$workidutil=new WorkIdUtil();
		$pattern_src="/\[(\d{0,2})\]/i";
        $replacement = "<img src='http://www.111work.com/api/web/static/images/emoticons/\\1.gif' alt='\\1' />";
        $path="./web/static/images/tweet/";
        $namefilepath="http://www.111work.com/api/web/static/images/tweet/";
		$result=null;
		if(!$workidutil->check($workid, $uid, $result))
		{
			return $result;
		}
		else 
		{
		    $tweet=array();
		    $body=preg_replace($pattern_src,$replacement,$body);
		    $tweet['user_id']=$uid;
		    $tweet['body']=$body;
		    
		  if(UseragentUtil::getPhoneModel($agent))
		  {
		  	 $tweet['appclient']=UseragentUtil::getPhoneModel($agent);
		  }
		    if($hasimg)
		    {
		    	$newname= date("YmdHis") . '_' . rand(10000, 99999)."_".$uid;
		    	 $upload=new JJUpload();
		    	 $up=$upload->upload("img", $newname, $path, array());
                  $tweet['bimg']=$namefilepath.$up['newName'];
		    	 $jjimge=new JJImage();
		    	 $type=$jjimge->make_thumb($path.$up['newName'], $path.$newname."_thumb");
		    	 $tweet['simg']=$namefilepath.$newname."_thumb.". $up['ext'];
		    }

		    if($this->orm->tweet()->insert($tweet)!=null)
		     {
		     	return ResultUtil::getResult(1, "你成功动弹了一次");
		     }   
		}
		
	}
	public function detail($id)
	{
		$r=array();
		$tweet=$this->orm->tweet('id',$id)->fetch();
        $r=$tweet->getRow();
        $r['uname']=$tweet->user['uname'];
		$r['portrait']=$tweet->user['portrait'];
		return $r;
	}
	public function getTweets($pageSize,$uid,$pageIndex)
	{
		 $pattern_src = "/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i";
		$tweetlist=array();
		$r=array();
		$count=0;
		if($uid==0)
		{
			$count=$this->orm->tweet()->count();
			$tweets=$this->orm->tweet()->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
			$i=0;
		    foreach ($tweets as $t)
		    {
		    	$r[$i]=$t->getRow();
		    //	$qq=ConstantUtil::$qq;
		    //	$replacementqq="\$qq[$1]";
		       
		 //       $pattern_srcqq = "#<img src='http://www.111work.com/api/web/static/images/emoticons/(\d{0,2}).gif' alt='(\d{0,2})' />#e";
  
		    //	   $body=preg_replace($pattern_srcqq,$replacementqq,$r[$i]['body']);
              //   $body=preg_replace($pattern_src,"",$body);
		    	//  $body=str_replace("</img>", "", $body);
		          
		    //	 $r[$i]['body']=$body;

               if( $r[$i]['body']==null|| $r[$i]['body']=="") $r[$i]['body']="<无文本内容>";
		    	$r[$i]['uname']=$t->user['uname'];
		    	$r[$i]['pubdate']=strtotime($r[$i]['pubdate']);
		    	if(islogin())
		    	{
		    		$myuid=$_SESSION['uid'];
		    		$hisuid=$t->user['id'];
		    		if($this->orm->fan(array('fan'=>$myuid,'follower'=>$hisuid))->count()>0)
		    		{
		    			$r[$i]['followid']=1;
		    		}
		    	}
		    	$i++;
		    }
		
		}else if($uid==-1)
		{
			date_default_timezone_set('PRC'); 
	         $time=date("Y-m-d H:i:s",time()-3600*24*10);
		  $count=$this->orm->tweet("pubdate > ? ",$time)->count();
			$tweets=$this->orm->tweet("pubdate > ? ",$time)->limit($pageSize,$pageIndex*$pageSize)->order('commentcount desc')->order('id desc');

			$i=0;
		    foreach ($tweets as $t)
		    {
		    	$r[$i]=$t->getRow();
		    	$r[$i]['uname']=$t->user['uname'];
		         $r[$i]['body']=preg_replace($pattern_src,"",$r[$i]['body']);
               if( $r[$i]['body']==null|| $r[$i]['body']=="") $r[$i]['body']="<无文本内容>";
		    	$r[$i]['portrait']=$t->user['portrait'];
		    	$i++;
		    }
		}else 
		{
			$count=$this->orm->tweet("user_id",$uid)->count();
			$tweets=$this->orm->tweet("user_id",$uid)->limit($pageSize,$pageIndex*$pageSize);
				$i=0;
		    foreach ($tweets as $t)
		    {
		    	$r[$i]=$t->getRow();
		    	$r[$i]['uname']=$t->user['uname'];
		    	$r[$i]['portrait']=$t->user['portrait'];
		        $r[$i]['body']=preg_replace($pattern_src,"",$r[$i]['body']);
               if( $r[$i]['body']==null|| $r[$i]['body']=="") $r[$i]['body']="<无文本内容>";
               	$r[$i]['pubdate']=strtotime($r[$i]['pubdate']);
		    	$i++;
		    }
		}
		if($pageSize>$count)
		{
			$pageSize=$count;
		}



		$tweetlist['tweetcount']=$count;
		$tweetlist['pagesize']=intval($pageSize);
		$tweetlist['tweets']=$r;
		return $tweetlist;
		
	}
}