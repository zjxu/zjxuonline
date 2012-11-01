<?php
class TwoModel extends Model
{
	
	public function  getTwosById($uid,$pageSize,$pageIndex)
	{
			$twoslist=array();
		$r=array();
			$twos=$this->orm->two("user_id",$uid)->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
		$i=0;
		foreach ($twos as $t)
		{
			$r[$i]=$t->getRow();

		    if($uid!=0)
		    {
	
		    	if($this->orm->coll(array('user_id'=>$uid,'type'=>'two','object_id'=>$r[$i]['id']))->count()>0)
		    	{
                   $r[$i]['coll']=1;
		    	}else 
		    	{
		    		$r[$i]['coll']=0;
		    	}
		    }else 
		    {
		    	$r[$i]['coll']=2;
		    }
		    $r[$i]['pubdate']=strtotime($t['pubdate']);
			$r[$i]['images']=$this->orm->images(array('type'=>'two','object_id'=>$r[$i]['id']))->fetchAllData();
			$r[$i]['uname']=$t->user['uname'];
			$r[$i]['portrait']=$t->user['portrait'];
			$i++;
		}
		return $r;
	}
	public function  getTwosByType($uid,$type,$pageSize,$flag,$pageIndex)
	{
			$twoslist=array();
		$r=array();
			$twos=$this->orm->two("flag",$flag)->where('type',$type)->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
		$i=0;
		foreach ($twos as $t)
		{
			$r[$i]=$t->getRow();

		    if($uid!=0)
		    {
	
		    	if($this->orm->coll(array('user_id'=>$uid,'type'=>'two','object_id'=>$r[$i]['id']))->count()>0)
		    	{
                   $r[$i]['coll']=1;
		    	}else 
		    	{
		    		$r[$i]['coll']=0;
		    	}
		    }else 
		    {
		    	$r[$i]['coll']=2;
		    }
		    $r[$i]['pubdate']=strtotime($t['pubdate']);
			$r[$i]['images']=$this->orm->images(array('type'=>'two','object_id'=>$r[$i]['id']))->fetchAllData();
			$r[$i]['uname']=$t->user['uname'];
			$r[$i]['portrait']=$t->user['portrait'];
			$i++;
		}
		return $r;
	}
	public function getNew()
	{
		$r=array();
			$twos=$this->orm->two()->limit(6,0)->order('oid desc')->order('id desc');
			$i=0;
	        foreach ($twos as $t)
		{
			$r[$i]=$t->getRow();
		     $r[$i]['images']=$this->orm->images(array('type'=>'two','object_id'=>$r[$i]['id']))->fetchAllData();
			$r[$i]['uname']=$t->user['uname'];
			$i++;
		}
		return $r;
		
	}
	
	public function getHot()
	{
		$r=array();
			$sql="SELECT COUNT(*) as n,type from two GROUP BY type
ORDER BY n DESC";
				$hottwos=$this->orm->JJDAO->preareAndFetch($sql);
					$count=count($hottwos);
		for($i=0;$i<$count;$i++)
		{
		$r[$i]['count']=$hottwos[$i]['n'];
		$r[$i]['type']=$hottwos[$i]['type'];
		$sql1="SELECT `user`.id as uid ,two.pubdate as pubdate,`user`.uname as uname from two,`user` where
two.user_id=`user`.id
and two.type=:type ORDER BY two.id DESC
LIMIT 1 ";
		$param=array("type"=>$r[$i]['type']);
		$temptwo=$this->orm->JJDAO->preareAndFetch($sql1,$param);

		$r[$i]['time']=strtotime($temptwo[0]['pubdate']);
		$r[$i]['userid']=$temptwo[0]['uid'];
		$r[$i]['uname']=$temptwo[0]['uname'];
		
		}
		return $r;
			
	}
	public function pub($uid,$workid,$hasimg,$phone,$sphone,$flag,$linkman,$declare,$new,$price,$type,$title,$img,$agent)
	{

		$workidutil=new WorkIdUtil();
		$path="./web/static/images/two/";
		$namefilepath="http://www.111work.com/api/web/static/images/two/";
		$result=null;
		if(!$workidutil->check($workid, $uid, $result))
		{
			return $result;
		}
		else
		{
			$two=array();
			$two['user_id']=$uid;
			$two['flag']=$flag;
			$two['linkman']=$linkman;
			$two['content']=$declare;
			$two['new']=$new;
			$two['price']=$price;
			$two['type']=$type;
			$two['title']=$title;
			$two['phone']=$phone;
			$two['sphone']=$sphone;
		if(UseragentUtil::getPhoneModel($agent))
		  {
		  	 $two['appclient']=UseragentUtil::getPhoneModel($agent);
		  }
			if(($temp=$this->orm->two()->insert($two))!=null)
			{
			
			if($hasimg)
			{
				for($i=0;$i<count($img);$i++)
				{
					$image=array();
			
				$newname=date("YmdHis") . '_' . rand(10000, 99999).'_'.$uid.'_'.$img[$i];
				$upload=new JJUpload();
				$up=$upload->upload($img[$i], $newname, $path, array());
				$image['burl']=$namefilepath.$up['newName'];
				$jjimge=new JJImage();
				$type=$jjimge->make_thumb($path.$up['newName'], $path.$newname."_thumb",75,50,true);
					$image['surl']=$namefilepath.$newname."_thumb.". 'jpg';
				$image['type']="two";
				$image["object_id"]=$temp['id'];
				$this->orm->images()->insert($image);
				}
			}
				
				return ResultUtil::getResult(1, "你成功添加2手信息");
			}else 
			{
					return ResultUtil::getResult(2, "添加失败前重试");
			}

	
		}

	}

	public function delete($uid,$workid,$twoid)
	{
		$two=$this->orm->two[$twoid];
		$workidutil=new WorkIdUtil();
		$result=null;
		if(!$workidutil->check($workid, $uid, $result)||$two['user_id']!=$workidutil->getUid($workid))
		{
			return $result;
		}
		else
		{

			if($this->orm->two("id",$twoid)->delete()!=null)
			{
				return ResultUtil::getResult(1, "删除成功");
			}
		}
	}

	public function getTwos($workid,$pageSize,$flag,$pageIndex)
	{
	   $workutil=new WorkIdUtil();

		$uid=$workutil->getUid($workid);
	
		$twoslist=array();
		$r=array();
		$count=0;
		$count=$this->orm->two("flag",$flag)->count();
		$twos=$this->orm->two("flag",$flag)->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
		$i=0;
		foreach ($twos as $t)
		{
			$r[$i]=$t->getRow();

		    if($uid!=null)
		    {
	
		    	if($this->orm->coll(array('user_id'=>$uid,'type'=>'two','object_id'=>$r[$i]['id']))->count()>0)
		    	{
		    	
		    			$r[$i]['coll']=1;
		    	}else 
		    	{
		    		$r[$i]['coll']=0;
		    	}
		    }else 
		    {
		    	$r[$i]['coll']=0;
		    }
			$r[$i]['images']=$this->orm->images(array('type'=>'two','object_id'=>$r[$i]['id']))->fetchAllData();
			$r[$i]['uname']=$t->user['uname'];
			$r[$i]['portrait']=$t->user['portrait'];
			$i++;
		}

		if($pageSize>$count)
		{
			$pageSize=$count;
		}
	
		if($uid!=null)
		{
			
			if($this->getModel("notice")->getNotice($uid)!=null)
			{
				$twoslist['notice']=$this->getModel("notice")->getNotice($uid);
			}
		}
		$twoslist['count']=$count;
		$twoslist['index']=$pageIndex;
		//$twoslist['page']=intval($pageSize);
		$twoslist['page']=$i;
		$twoslist['twos']=$r;
		return $twoslist;

	}
}