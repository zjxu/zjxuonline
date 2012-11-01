<?php
class WorkIdUtil extends  JJBase
{
public static	function is_email($email){
           return strlen($email) > 6 && preg_match("/^[\w\-\.]+@[\w\-]+(\.\w+)+$/", $email);
       }
	public function getUid($workid)
	{
			if($workid==""||!isset($workid)) return null;
		$temp = explode("-", $workid);
	
		return McryptUtil::_decrypt($temp[0]);
	}
	public  function getUser($workid)
	{
		if($workid==""||!isset($workid)) return null;
		$r=array();
		$temp = explode("-", $workid);
		$r['uid']=McryptUtil::_decrypt($temp[0]);
		$r['name']=McryptUtil::_decrypt($temp[1]);
		$r['pass']=McryptUtil::_decrypt($temp[2]);
		return $r;
	}
	public static function cname($workid,$newname)
	{
		if($workid==""||!isset($workid)) return null;
		$temp = explode("-", $workid);
		$uid=$temp[0];
		$name=$temp[1];
		if(!self::is_email($name))
		{
			$name=McryptUtil::_encrypt($newname);
		}
        $pass=$temp[2];
		return $value=$uid."-".$name."-".$pass;
	}
	public static function  cpass($workid,$newpass)
	{
		if($workid==""||!isset($workid)) return null;
		$temp = explode("-", $workid);
		$uid=$temp[0];
		$name=$temp[1];
         $pass=McryptUtil::_encrypt($newpass);
		return $value=$uid."-".$name."-".$pass;
	}
	public  function check($workid,$uid,&$result)
	{
		$result=ResultUtil::getNotLoginResult();

	    if($workid==""||!isset($workid)) return false;
		$user=$this->getUser($workid);
		if($user['uid']!=$uid) return false;
		$islogin=0;

		$result=$this->getModel("user")->login($user['name'],$user['pass'],0,$islogin);
		if($islogin>0)
		{
			$result=ResultUtil::getOKResult();
			return true;
		}
		return false;
	}
}