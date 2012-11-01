<?php
class MemModel extends Model
{
	
	
	public function pub($uid,$title,$body,$workid,$hasimg,$phone,$sphone)
	{

		$workidutil=new WorkIdUtil();
		$pattern_src="/\[(\d{0,2})\]/i";
        $path="./web/static/images/mem/";
        $namefilepath="http://www.111work.com/api/web/static/images/mem/";
		$result=null;
		if(!$workidutil->check($workid, $uid, $result))
		{
			return $result;
		}
		else 
		{
		    $mem=array();
		    $mem['user_id']=$uid;
		     $mem['title']=$title;
		    $mem['content']=$body;
		    $mem['phone']=$phone;
		    $mem['sphone']=$sphone;
		    if($hasimg)
		    {
		    	 $newname=time().$uid;
		    	 $upload=new JJUpload();
		    	 $up=$upload->upload("img", $newname, $path, array());
                  $mem['bimg']=$namefilepath.$up['newName'];
		    	 $jjimge=new JJImage();
		    	 $type=$jjimge->make_thumb($path.$up['newName'], $path.$newname."_thumb");
		    	 $mem['simg']=$namefilepath.$newname."_thumb.". $up['ext'];
		    }

		    if($this->orm->mem()->insert($mem)!=null)
		     {
		     	return ResultUtil::getResult(1, "你成功添加便笺");
		     }   
		}
		
	}
	
	public function delete($uid,$workid,$memid)
	{
			$workidutil=new WorkIdUtil();
			$result=null;
			if(!$workidutil->check($workid, $uid, $result)||$uid!=$workidutil->getUid($workid))
		    {
			return $result;
		    }
		  else 
		   {
		   
			  if($this->orm->mem("id",$memid)->delete()!=null)
			  {
			  		return ResultUtil::getResult(1, "删除成功");
			  }
	    	}
	}
	
     public function getMems($pageSize,$uid,$pageIndex)
	{
		$memlist=array();
		$r=array();
		$count=0;
		$page=0;
		if($uid==0)
		{
			$count=$this->orm->mem("user_id",0)->count();
			$mems=$this->orm->mem("user_id",0)->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
			$i=0;
		    foreach ($mems as $m)
		    {
		    		$r[$i]=$m->getRow();
		    	$r[$i]['uname']=$m->user['uname'];
		    	$r[$i]['portrait']=$m->user['portrait'];
		    	$i++;
		    }
		    $page=$i;
		}else 
		{


	    
	             	$count=$this->orm->mem("user_id",$uid)->count();
	             	$mems=$this->orm->mem("user_id",$uid)->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
			     
		      	$i=0;
		     foreach ($mems as $t)
		    {
		    	$r[$i]=$t->getRow();
		    	$r[$i]['uname']=$t->user['uname'];
		    	$r[$i]['portrait']=$t->user['portrait'];
		    	$i++;
		     }
		         $page=$i;
	     	
			
		}
		if($pageSize>$count)
		{
			$pageSize=$count;
		}

		$memlist['count']=$count;
		$memlist['index']=$pageIndex;
	//	$memlist['page']=intval($pageSize);
		$memlist['page']=$page;
		$memlist['mems']=$r;
		return $memlist;
		
	}
}