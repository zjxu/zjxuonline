<?php
class ServiceModel extends Model
{
	public function dig($id,$gb)
	{
		$service=$this->orm->service[$id];
		$service['pubtime']=	$service['pubtime'];
		$service[$gb]=$service[$gb]+1;
		$service->update();
	}
	
	
	//flag 1 外卖 2 兼职 3 周边 4 资讯
	public function getServicesByColl($uid,$pageSize,$flag,$pageIndex)
	{
		$serviceslist=array();
		$r=array();
		$colls=$this->orm->coll('user_id',$uid)->where('type','service');
		$i=0;
		foreach ($colls as $c)
		{
		   $se=$this->orm->service[$c['object_id']];
		   if($se!=null)
		   {
		   	  if($se['flag']==$flag)
		   	  {
		   	  	$r[$i]=$se->getRow();
		   	    $r[$i]['pubdate']=strtotime($r[$i]['pubtime']);
		   	   $r[$i]['images']=$this->orm->images(array('type'=>'service','object_id'=>$r[$i]['id']))->fetchAllData();
		   	  	$i++;
		   	  }
		   }
		}
		return $r;
	}
	
	
	
	
	
	
	
	
	public function getServices($uid,$pageSize,$flag,$pageIndex)
	{
		$serviceslist=array();
		$r=array();
		$count=0;
		$count=$this->orm->service("flag",$flag)->where("end",0)->count();

		$services=$this->orm->service("flag",$flag)->where("end",0)->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
		$i=0;
		foreach ($services as $t)
		{
			$r[$i]=$t->getRow();
			$r[$i]['pubdate']=strtotime($r[$i]['pubtime']);
		    if($uid!=0)
		    {

		    	if($this->orm->coll(array('user_id'=>$uid,'type'=>'service','object_id'=>$r[$i]['id']))->count()>0)
		    	{
		    			$r[$i]['coll']=1;
		    	}else 
		    	{
		    		$r[$i]['coll']=0;
		    	}
		    }else 
		    {
		    	$r[$i]['coll']=-1;
		    }
			$r[$i]['images']=$this->orm->images(array('type'=>'service','object_id'=>$r[$i]['id']))->fetchAllData();
			if($flag==1)
			{
					$r[$i]['takeouts']=$this->orm->takeout("object_id",$r[$i]['id'])->order('oid desc')->order('id desc')->fetchAllData();
			}
			$i++;
		}
		if($pageSize>$count)
		{
			$pageSize=$count;
		}
		$serviceslist['count']=$count;
		$serviceslist['index']=$pageIndex;
		$serviceslist['pagecount']=ceil($count/$pageSize);
		//$twoslist['page']=intval($pageSize);
		$serviceslist['page']=$i;
		$serviceslist['services']=$r;
		return $serviceslist;

	}
	
}