<?php
class FanModel extends Model
{
//				put("uid", uid);
//			put("relation", relation);0:显示自己的粉丝 1:显示自己的关注者
//			put("pageIndex", pageIndex);
//			put("pageSize", pageSize);

	public function getFans($uid,$relation,$pageIndex,$pageSize)
	{
		$fanlist=array();
		$r=array();
		$count=0;
		$page=0;
		if($relation==0)
		{
          $count=$this->orm->fan("follower",$uid)->count();
			$fan=$this->orm->fan("follower",$uid)->limit($pageSize,$pageIndex*$pageSize)->order('id desc');
			$i=0;
		    foreach ($fan as $f)
		    {
//		    			private int userid;
//		private String name;
//		private String face;
//		private String from;
//		private String gender;
                  $f=$f->getRow();
		    		$u=$this->orm->user[$f['fan']];
		    	$r[$i]['name']=$u['uname'];
		    	$r[$i]['face']=$u['portrait'];
		    	$r[$i]['from']=$u['school'].$u['college'].$u['grade'];
		    	$r[$i]['gender']=$u['gender'];
		    	$r[$i]['userid']=$u['id'];
		    	$r[$i]['time']=strtotime($f['adddate']);
		     if($this->orm->fan("fan",$uid)->where("follower",$r[$i]['userid'])->count()>0)
		    			    	 {
		    			    	 		$r[$i]['linker']=1;
		    			    	 }
		    	$i++;
		    }
		    $page=$i;
		    $fanlist['page']=$page;
		    $fanlist['count']=$count;
		    $fanlist['fs']=$r;
		    return $fanlist;
		}else
		{
			$count=$this->orm->fan("fan",$uid)->count();
			$fan=$this->orm->fan("fan",$uid)->limit($pageSize,$pageIndex*$pageSize)->order('id desc');
				$i=0;
		    foreach ($fan as $f)
		    {
//		    			private int userid;
//		private String name;
//		private String face;
//		private String from;
//		private String gender;
                  $f=$f->getRow();
		    		$u=$this->orm->user[$f['follower']];
		    	$r[$i]['name']=$u['uname'];
		    	$r[$i]['face']=$u['portrait'];
		    	$r[$i]['from']=$u['school'].$u['college'].$u['grade'];
		    	$r[$i]['gender']=$u['gender'];
		    	$r[$i]['userid']=$u['id'];
		    			    	$r[$i]['time']=strtotime($f['adddate']);
		    			    	 if($this->orm->fan("follower",$uid)->where("fan",$r[$i]['userid'])->count()>0)
		    			    	 {
		    			    	 		$r[$i]['linker']=1;
		    			    	 }
		    			    	
		    	$i++;
		    }
		    $page=$i;
		    $fanlist['page']=$page;
		    $fanlist['count']=$count;
		    $fanlist['fs']=$r;
		    return $fanlist;
		}
			
	}
}