<?php
class CollModel extends Model
{


	public function pub($uid,$title,$type,$objectid,$workid)
	{
		$workidutil=new WorkIdUtil();
		$result=null;
		if(!$workidutil->check($workid, $uid, $result))
		{
			return $result;
		}
		else
		{
			if($this->orm->coll(array('user_id'=>$uid,'type'=>$type,'object_id'=>$objectid))->count()>0)
			{
				return ResultUtil::getResult(1, "该收藏已经存在");
			}
			$coll=array();
			$coll['user_id']=$uid;
			$coll['title']=$title;
			$coll['type']=$type;
			$coll['object_id']=$objectid;
			if($this->orm->coll()->insert($coll)!=null)
			{
				return ResultUtil::getResult(1, "成功添加收藏");
			}
		}

	}
	public function delbytype($uid,$workid,$type,$objectid)
	{
		$workidutil=new WorkIdUtil();
		$result=null;
		if(!$workidutil->check($workid, $uid, $result)||$uid!=$workidutil->getUid($workid))
		{
			return $result;
		}
		else
		{
			if($this->orm->coll(array('user_id'=>$uid,'type'=>$type,'object_id'=>$objectid))->count()>0)
			{
				if($this->orm->coll(array("user_id"=>$uid,'type'=>$type,'object_id'=>$objectid))->delete()!=null)
				{
					return ResultUtil::getResult(1, "删除成功");
				}
			}else
			{
				return ResultUtil::getResult(1, "存在缓存其实已经删除");
			}
		}
	}
	public function delete($uid,$workid,$collid)
	{
		$workidutil=new WorkIdUtil();
		$result=null;
		if(!$workidutil->check($workid, $uid, $result)||$uid!=$workidutil->getUid($workid))
		{
			return $result;
		}
		else
		{
			if($this->orm->coll("id",$collid)->count()>0)
			{
				if($this->orm->coll("id",$collid)->delete()!=null)
				{
					return ResultUtil::getResult(1, "删除成功");
				}else
				{

				}
			}
			else
			{
				return ResultUtil::getResult(1, "存在缓存其实已经删除");
			}
		}
	}

	public function getColls($workid,$pageSize,$uid,$pageIndex)
	{
		$colllist=array();
		$r=array();
		$count=0;
		$page=0;

		$workidutil=new WorkIdUtil();
		$result=null;
		if($workidutil->check($workid,$uid,$result))
		{
			$count=$this->orm->coll('user_id',$uid)->count();
			$colls=$this->orm->coll('user_id',$uid)->limit($pageSize,$pageIndex*$pageSize)->order('id desc');

			$i=0;
			foreach ($colls as $t)
			{
				$r[$i]=$t->getRow();
				if($r[$i]['type']=='service')
				{
					if($this->orm->service[$r[$i]['object_id']]!=null)
					{
						$r[$i]['service']=$this->orm->service[$r[$i]['object_id']]->getRow();
					 if($uid!=null)
		    {
		    	if($this->orm->coll(array('user_id'=>$uid,'type'=>'service','object_id'=>$r[$i]['service']['id']))->count()>0)
		    	{
		    		$r[$i]['service']['coll']=1;
		    	}else
		    	{
		    		$r[$i]['service']['coll']=0;
		    	}
		    }else
		    {
		    	$r[$i]['service']['coll']=0;
		    }
						if($r[$i]['service']['flag']==1)
						{
							$r[$i]['service']['takeouts']=$this->orm->takeout("object_id",$r[$i]['service']['id'])->fetchAllData();
						}
					}else
					{
						$r[$i]['type']='empty';
					}

				}else if($r[$i]['type']=='two')
				{
					if($this->orm->two[$r[$i]['object_id']]!=null)
					{
						$r[$i]['two']=$this->orm->two[$r[$i]['object_id']]->getRow();
						 if($uid!=null)
		    {
		    	if($this->orm->coll(array('user_id'=>$uid,'type'=>'two','object_id'=>$r[$i]['two']['id']))->count()>0)
		    	{
		    		$r[$i]['two']['coll']=1;
		    	}else
		    	{
		    		$r[$i]['two']['coll']=0;
		    	}
		    }else
		    {
		    	$r[$i]['two']['coll']=0;
		    }
					}else
					{
						$r[$i]['type']='empty';
					}
				}
				$i++;
			}
			$page=$i;
		}
		else
		{
			$colllist['error']=$result;
			return $colllist;
		}
			

		if($pageSize>$count)
		{
			$pageSize=$count;
		}
		$workutil=new WorkIdUtil();
		$uid=$workutil->getUid($workid);
		if($uid!=null)
		{
			if($this->getModel("notice")->getNotice($uid)!=null)
			{
				$colllist['notice']=$this->getModel("notice")->getNotice($uid);
			}
		}
		$colllist['count']=$count;
		$colllist['index']=$pageIndex;
		//	$memlist['page']=intval($pageSize);
		$colllist['page']=$page;
		$colllist['colls']=$r;
		return $colllist;

	}
}