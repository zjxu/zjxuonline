<?php
/////////////////////////////////////////////////////////////////
//云边开源轻博, Copyright (C)   2010 - 2011  qing.thinksaas.cn 
//EMAIL:nxfte@qq.com QQ:234027573                              
//$Id: db_blog.php 34 2011-10-28 16:56:54Z anythink $ 

class db_tweet extends spModel  
{  
	var $pk = "id"; //主键  
	var $table = "tweet"; // 数据表的名称 
	


	
	/*检查博客是不是我的*/
	function blogIsMe($id)
	{
		return $this->find(array('id'=>$id),'','user_id');	
	}
	
	/*后台用方法*/
	function lockUser($uid)
	{
		$rs = spClass('db_member')->find(array('uid'=>$uid));
		if($rs['admin'] != 1)
		{
			if($rs['open'] == 1){$open = 0;}else{$open = 1;}
			spClass('db_member')->update(array('uid'=>$uid),array('open'=>$open)); 
		}
	}
	
	/*重置密码*/
	function resetPwd($uid,$pwd)
	{
		$rs = spClass('db_member')->find(array('uid'=>$uid));
		if($rs['admin'] != 1)
		{
			$salt = randstr();
			$pwds = password_encode($pwd,$salt);
			$arr['password'] = $pwds;
			$arr['salt'] = $salt;
			if(spClass('db_member')->update(array('uid'=>$uid),$arr)){return true;}
		}
	}
	
	function showVersion()
	{
		return $this->getVersion();
	}
	
	function getSystable()
	{
		return $this->getSystemTable();
	}

}
?>