<?php
class TaskModel extends Model
{
	const  ONEPAGE=5;
	const   BIBPAGE=10;
	public function getBid($beginPage=0,$count=TaskModel::BIBPAGE,$task_id,$ttype_id)
	{
		$r=array();
		$begin=$beginPage*self::BIBPAGE;
		$bid=$this->orm->bid()->limit($count,$begin)->where('task_id',$task_id)->where('ttype_id',$ttype_id)->order('flag desc');
		foreach ($bid as $b) {
			$i=0;
			$temp=array();
			$temp=$b->getRow();
			$temp['team']=$b->team->getRow();
			$temp['area']=$b->team->user['area'];
			$r[]=$temp;
			$i++;
		}
		return $r;
	}
	 	public function getTypeName($ttype)
	 	{
	 		return $this->orm->ttype[$ttype]['name'];
	 	}
	public function getBidCount($task_id,$ttype_id)
	{
		$taskbid=$this->orm->bid()->where('task_id',$task_id)->where('ttype_id',$ttype_id);
		$count=$taskbid->count();
		return $count;
	}
	public function getBidPage($task_id,$ttype_id)
	{
		$taskbid=$this->orm->bid()->where('task_id',$task_id)->where('ttype_id',$ttype_id);
		$count=$taskbid->count();
		$page=ceil($count/self::BIBPAGE);
		return $page;
	}
	public function getDissById($id,$type)
	{
		$r=array();
		$diss=$this->orm->task[$id]->taskdis()->where('pid',0)->where('type',$type);
		$i=0;
		foreach ($diss as $d)
		{
			$r[$i]['diss']=$d->getRow();
			$r[$i]['diss']['uimg']=$d->user['photograph'];
			$r[$i]['diss']['username']=$d->user['username'];
		    $temp=array();
		    $j=0;
			foreach ($this->orm->taskdis()->where('pid',$r[$i]['diss']['id'])->where('type',$type) as $sd)
			{
				$temp[$j]['diss']=$sd->getRow();
				$temp[$j]['diss']['uimg']=$sd->user['photograph'];
			    $temp[$j]['diss']['username']=$sd->user['username'];
			    $j++;
			}
			$r[$i]['sdiss']=$temp;
			$i++;
		}
		return $r;
	}
	public function getAffixById($id)
	{
		$r=array();
		$affix=$this->orm->taskaffix('task_id',$id);
		$i=0;
	  foreach ($affix as $af)
	  {
	  	$r[$i]['affix']=$af->getRow();
	  	$temp=array();
	  	$temp=$af->images()->fetchAllData();
	  	$r[$i]['images']=$temp;
	  	$i++;
	  }
	 return $r; 
	}
	public function getDoc($id)
	{
		return $this->orm->doc('task_id',$id)->fetchAllData();
	}
   public function getBidTeamCount($taskid)
   {
   	  $r=array();
   	  for($i=1;$i<5;$i++)
   	  {
   	  	$r[$i]=$this->orm->bid('task_id',$taskid)->where('ttype_id',$i)->count();
   	  }
   	  return $r;
   }
	public function getTaskById($id)
	{
		$t=$this->orm->task[$id];
		$user=$t->user->getRow();
		$t=$t->getRow();
		$t['user']=$user;
		return $t;
	}
	public function getPage($area_id=0,$ptype_id=0)
	{
		$task=$this->orm->task()->where('flag>-1');
		if($area_id!=0)$task=$task->where('area_id',$area_id);
		if($ptype_id!=0)$task=$task->where('ptype_id',$ptype_id);
		$count=$task->count();
		$page=ceil($count/self::ONEPAGE);
		return $page;
	}
	public function getTask($beginPage=0,$count=self::ONEPAGE,$area_id=0,$ptype_id=0)
	{
		$product=$this->getModel("product");
		$r=array();
		$begin=$beginPage*self::ONEPAGE;
		$task=$this->orm->task()->limit($count,$begin)->where('flag>-1')->order('flag asc')->order('id desc');
		if($area_id!=0)$task=$task->where('area_id',$area_id);
		if($ptype_id!=0)$task=$task->where('ptype_id',$ptype_id);
		foreach ($task as $t) {
			$i=0;
			$temp=array();
			$temp=$t->getRow();
			$temp['typename']=explode('-',$product->getTypeName($temp['ptype_id']));
			//			$temp['dcount']=$new->newsdiscuss()->count();
			//			$temp['content']=utf8Substr($temp['content'], 0,200);
			//			$temp['title']=utf8Substr($temp['title'], 0,15);
			$r[]=$temp;
			$i++;
		}
		return $r;
	}
}