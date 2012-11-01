<?php
class TakeoutModel  extends Model
{
	public function rand()
	{
		$takeout=$this->orm->JJDAO->query("SELECT * FROM service where flag=1 ORDER BY RAND() LIMIT 1");
		$takeout=$takeout[0];
       $takeout['images']=$this->orm->images(array('type'=>'service','object_id'=>$takeout['id']))->fetchAllData();
        $takeout['takeouts']=$this->orm->takeout("object_id",$takeout['id'])->fetchAllData();
        	return $takeout;
	}

}