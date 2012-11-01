<?php
class PassUtil
{
    private  static $secret_key="9";
	public static function getRealPass($dbpass)
	{
		return McryptUtil::_decrypt($dbpass,self::$secret_key);
	}
	public static  function getDbPass($realpass)
	{
		return McryptUtil::_encrypt($realpass,self::$secret_key);
	}
}