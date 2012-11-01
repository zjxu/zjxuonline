<?php
class MessageModel extends Model
{
	public function deletebyid($id,$uid)
	{
		$mess=$this->orm->message[$id];
		if($uid==$mess['user_id']||$uid==$mess['friend'])
		{
		if($mess->delete()!=null)
		{
			return 1;
		}	else 
		{
			return 0;
		}
		}
	}
	public function delete($uid,$workid,$friendid)
	{
		    $workidutil=new WorkIdUtil();
			$result=null;
			if(!$workidutil->check($workid, $uid, $result)||$uid!=$workidutil->getUid($workid))
		    {
			return $result;
		    }
		  else 
		   {
		   
			  if($this->orm->message(array("user_id"=>$uid,"friend"=>$friendid))->delete()!=null)
			  {
			  		return ResultUtil::getResult(1, "删除成功");
			  }
	    	}
	}
	public function  getMes($uid,$pageSize,$pageIndex)
	{

				$pageIndex=(int)$pageIndex;
		$pageSize=(int)$pageSize;
		$begin=$pageIndex*$pageSize;
		$meslist=array();
		$r=array();
		$sql="SELECT MAX(id) AS id, COUNT(id) AS msgcount FROM message
WHERE user_id = :uid  GROUP BY friend ORDER BY id DESC LIMIT $begin,  $pageSize";



		 $param=array("uid"=>$uid);
           $mes=$this->orm->JJDAO->preareAndFetch($sql,$param);
           


           $countmem=$this->orm->message('user_id',$uid)->group('friend')->count();

           $i=0;
           foreach ($mes as $m)
           {
          
           	$t=$this->orm->message[$m['id']]->getRow();
           	$friend=$this->orm->user[$t['friend']]->getRow();
           	$sender=$this->orm->user[$t['sender']]->getRow();
           	
         	$meslist[$i]['friendid']=$t['friend'];
      		$meslist[$i]['friendname']=$friend['uname'];
           	$meslist[$i]['portrait']=$friend['portrait'];
           	$meslist[$i]['id']=$t['id'];
           	
           	   	$meslist[$i]['sender']=$sender['uname'];
      		$meslist[$i]['senderid']=$t['sender'];
           	$meslist[$i]['content']=$t['content'];
           	 	$meslist[$i]['pubDate']=strtotime($t['pubdate']);
           	$meslist[$i]['messageCount']=$m['msgcount'];
           	$i++;
           }
         
       
		

           $r['messageCount']=$countmem;
             $r['pagesize']=$i;
             $r['messages']=$meslist;
		  return $r;
	}
	
	
	
	
	
	// * @param uid 登录用户uid
	 //* @param receiver 接受者的用户id
	 //* @param content 消息内容，注意不能超过250个字符
		//params.put("uid", uid);
	//	params.put("receiver", receiver);
		//params.put("content", content);
	public function  add($uid,$receiver,$content)
	{
	if(!isset($content)||$content=="")
	{
		return 0;
	}
		    if(!is_numeric($receiver))
		    {
		    	if($this->orm->user('uname',$receiver)->count()>0)
		    	{
		    		$receiver=$this->orm->user('uname',$receiver)->fetchOneData();
		    		$receiver=$receiver['id'];
		    	}else 
		    	{
		    		 return 2;
		    	}
		    }
		    if($uid==$receiver)
		    {
		    	 return -2;
		    }
		    
		    $message1=array();
		     $message1['user_id']=$uid;
		       $message1['friend']=$receiver;
		       $message1['sender']=$uid;
		      $message1['receiver']=$receiver;
		       $message1['content']=$content;
		       
		          $message2=array();
		     $message2['user_id']=$receiver;
		       $message2['friend']=$uid;
		       $message2['sender']=$uid;
		      $message2['receiver']=$receiver;
		       $message2['content']=$content;
		    $this->orm->message()->insert($message2);
		     $m=  $this->orm->message()->insert($message1);
		
		         if($m!=null)
		     {
		     	    $r=array();
		     
		     	  		
		     	    $m=$m->getRow();
			$r['uname']=$this->orm->user[$m['sender']]['uname'];
			$r['portrait']=$this->orm->user[$m['sender']]['portrait'];
		   $r['user_id']=$m['sender'];
		    $r['content']=$m['content'];
		       $r['appclient']="";
		         $r['id']=$m['id'];
		            $r['pubdate']=date("Y-m-d H:i:s");
		        
             $this->getModel("notice")->addNotice($receiver,1);
            
			  
		     	   return 1;
		     }  
		        return -1;
		   
	}
	
	
	
	public function pubone($uid,$receiver,$content)
	{
	date_default_timezone_set(PRC);

		    if(!is_numeric($receiver))
		    {
		    	if($this->orm->user('uname',$receiver)->count()>0)
		    	{
		    		$receiver=$this->orm->user('uname',$receiver)->fetchOneData();
		    		$receiver=$receiver['id'];
		    	}else 
		    	{
		    		 return ResultUtil::getResult(2, "用户不存在");
		    	}
		    }
		    if($uid==$receiver)
		    {
		    	 return ResultUtil::getResult(2, "自己不用给自己留言把");
		    }
		    
		    $message1=array();
		     $message1['user_id']=$receiver;
		       $message1['friend']=$uid;
		       $message1['sender']=$uid;
		      $message1['receiver']=$receiver;
		       $message1['content']=$content;
		       
	
		     $m=  $this->orm->message()->insert($message1);
		

		        
             $this->getModel("notice")->addNotice($receiver,1);
            
			  
		     	
		     
		
		   
	
	}
	
	
		// * @param uid 登录用户uid
	 //* @param receiver 接受者的用户id
	 //* @param content 消息内容，注意不能超过250个字符
		//params.put("uid", uid);
	//	params.put("receiver", receiver);
		//params.put("content", content);
	public function  pub($workid,$uid,$receiver,$content)
	{
		date_default_timezone_set(PRC);
	       $workidutil=new WorkIdUtil();
			$result=null;
			if(!$workidutil->check($workid, $uid, $result))
		    {
			return $result;
		    }
		    if(!is_numeric($receiver))
		    {
		    	if($this->orm->user('uname',$receiver)->count()>0)
		    	{
		    		$receiver=$this->orm->user('uname',$receiver)->fetchOneData();
		    		$receiver=$receiver['id'];
		    	}else 
		    	{
		    		 return ResultUtil::getResult(2, "用户不存在");
		    	}
		    }
		    if($uid==$receiver)
		    {
		    	 return ResultUtil::getResult(2, "自己不用给自己留言把");
		    }
		    
		    $message1=array();
		     $message1['user_id']=$uid;
		       $message1['friend']=$receiver;
		       $message1['sender']=$uid;
		      $message1['receiver']=$receiver;
		       $message1['content']=$content;
		       
		          $message2=array();
		     $message2['user_id']=$receiver;
		       $message2['friend']=$uid;
		       $message2['sender']=$uid;
		      $message2['receiver']=$receiver;
		       $message2['content']=$content;
		    $this->orm->message()->insert($message2);
		     $m=  $this->orm->message()->insert($message1);
		
		         if($m!=null)
		     {
		     	    $r=array();
		     
		     	  		
		     	    $m=$m->getRow();
			$r['uname']=$this->orm->user[$m['sender']]['uname'];
			$r['portrait']=$this->orm->user[$m['sender']]['portrait'];
		   $r['user_id']=$m['sender'];
		    $r['content']=$m['content'];
		       $r['appclient']="";
		         $r['id']=$m['id'];
		            $r['pubdate']=date("Y-m-d H:i:s");
		        
             $this->getModel("notice")->addNotice($receiver,1);
            
			  
		     	   return ResultUtil::getResulthascomm(1, "成功得留下了你的足迹",$r);
		     }  
		        return ResultUtil::getErrorResult();
		   
	}
}