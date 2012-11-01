<?php

class waimai extends top
{
	
      public  function index()
      {
      	$takeout=$this->getNotORM()->webtakeout();
      	$r=array();
      	$i=0;
      	foreach ($takeout as $t)
      	{
      		$r[$i]=$t->getRow();
      		$r[$i]['dtitle']=$t->service['title'];
      		$r[$i]['time']=$t->service['outcantime'];
      				$r[$i]['sphone']=$t->service['sphone'];
      		     		    		$r[$i]['phone']=$t->service['phone'];
        if($r[$i]['sphone']!=null&&$r[$i]['sphone']!='null')
        {
        	$r[$i]['showphone']=$r[$i]['sphone'];
        }else 
        {
        	   	$r[$i]['showphone']=$r[$i]['phone'];
        }
      		     
      		$i++;
      	}
      	
      $re=	$this->getNotORM()->rewaimei[1];
      $sid=$re['service_id'];
    
      	$takeout=$this->getNotORM()->JJDAO->query("SELECT * FROM webtakeout where webtakeout.service_id=$sid ORDER BY RAND() LIMIT 5");


      $this->rewaimai=$this->getNotORM()->service[$sid]->getRow();
      	$this->waimai=$r;
$this->retakeout=$takeout;
      	$this->CurrentModule='waimai';
      		$this->display('waimai.html');
      } 
	


}