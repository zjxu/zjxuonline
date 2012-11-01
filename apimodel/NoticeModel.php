<?php
class NoticeModel extends Model
{
	
	public function delNotice($uid,$type)
	{
	      if($type==1)
		{
			$notice=array();
			$notice['user_id']=$uid;
				$notice['type']=1;
				$this->orm->mynotice($notice)->delete();
		}
	}
	
	public function addNotice($uid,$type)
	{
		if($type==1)
		{
			$notice=array();
			$notice['user_id']=$uid;
				$notice['type']=1;
				$this->orm->mynotice()->insert($notice);
		}
	}
//			int atmeCount = intent.getIntExtra("atmeCount", 0);// @我 type 0
//			int msgCount = intent.getIntExtra("msgCount", 0);// 留言 type 1
//			int reviewCount = intent.getIntExtra("reviewCount", 0);// 评论 type 2
//			int newFansCount = intent.getIntExtra("newFansCount", 0);// 新粉丝 type 3
        public function getNotice($uid)
        {
        	
        	$atmeCount=0;
        	$msgCount=0;
        	$reviewCount=0;
        	$newFansCount=0;
        	$r=array();
        	 $this->getModel("user")->uplastogin($uid);
        	$notice=$this->orm->mynotice("user_id",$uid)->where("flag",1)->fetchAllData();
        	foreach($notice as $n )
        	{
        		switch ($n['type'])
        		{
        			case 0:  $atmeCount++; break;
        				case 1:   $msgCount++;break;
        					case 2:  $reviewCount++; break;
        						case 3:   $newFansCount++;break;
        		}
        	}
        	if($atmeCount>0||$msgCount>0||$reviewCount>0||$newFansCount>0)
        	{
        	$r['atmecount']=$atmeCount;
        		$r['msgcount']=$msgCount;
        			$r['reviewcount']=$reviewCount;
        				$r['newfanscount']=$newFansCount;
                return $r;
        	}
        	return null;
        	
        }
}