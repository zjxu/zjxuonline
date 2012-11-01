<?php
class LostModel extends Model
{
	
	
public function  getlostById($uid,$pageSize,$flag,$pageIndex)
	{

      $losts=null;
		$r=array();
	
			$losts=$this->orm->lost("flag",$flag)->where('user_id',$uid)->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
		

		$i=0;
		foreach ($losts as $t)
		{
			$r[$i]=$t->getRow();
		
		    $r[$i]['pubtime']=strtotime($t['pubtime']);
			$r[$i]['images']=$this->orm->images(array('type'=>'lost','object_id'=>$r[$i]['id']))->fetchAllData();
			if($r[$i]['user_id']!=0)
			{
			$r[$i]['uname']=$t->user['uname'];
			$r[$i]['portrait']=$t->user['portrait'];
			}
			$i++;
		}
		return $r;
	}
	
	
	
	
	public function  getlostType($type,$pageSize,$flag,$pageIndex)
	{

      $losts=null;
		$r=array();
		if($type=='all')
		{
			$losts=$this->orm->lost("flag",$flag)->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
		}else 
		{
			$losts=$this->orm->lost("flag",$flag)->where('type',$type)->limit($pageSize,$pageIndex*$pageSize)->order('oid desc')->order('id desc');
		}

		$i=0;
		foreach ($losts as $t)
		{
			$r[$i]=$t->getRow();
		
		    $r[$i]['pubtime']=strtotime($t['pubtime']);
			$r[$i]['images']=$this->orm->images(array('type'=>'lost','object_id'=>$r[$i]['id']))->fetchAllData();
			if($r[$i]['user_id']!=0)
			{
			$r[$i]['uname']=$t->user['uname'];
			$r[$i]['portrait']=$t->user['portrait'];
			}
			$i++;
		}
		return $r;
	}
}