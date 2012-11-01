<?php
class UseragentUtil
{
	
	public static function getAppplatform($agent)
	{
	   if(stripos($ag,'111work')==0)
		{
			
			$array=explode('/', $agent);
			return strtolower($array[2]);
		}else
		{
			return false;
		}
	}
	public static function getAppVersions($agent)
	{
		if(stripos($ag,'111work')==0)
		{
			$array=explode('/', $agent);
			return $array[1];
		}else
		{
			return false;
		}

	}
	public static function getSystemVersions($agent)
	{
		if(stripos($ag,'111work')==0)
		{
			$array=explode('/', $agent);
			return $array[3];
		}else
		{
			return false;
		}

	}
	public static function getPhoneModel($agent)
	{
		if(stripos($ag,'111work')==0)
		{
			$array=explode('/', $agent);
			return strtolower($array[4]);
		}else
		{
			return false;
		}

	}
	public static function getAppId($agent)
	{
	if(stripos($ag,'111work')==0)
		{
			$array=explode('/', $agent);
			return$array[5];
		}else
		{
			return false;
		}
	}
}