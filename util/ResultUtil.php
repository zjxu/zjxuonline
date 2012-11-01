<?php
class ResultUtil extends JJBase
{
	public static function getResulthascomm($errorCode,$errorMessage,$comm)
	{
	     $array=array();
	     $array['errorcode']=$errorCode;
	     $array['errormessage']=$errorMessage;
	     $array['comment']=$comm;
	     return $array;
	}
	public static function getResult($errorCode,$errorMessage)
	{
	     $array=array();
	     $array['errorcode']=$errorCode;
	     $array['errormessage']=$errorMessage;
	     return $array;
	}
	public static function getOKResult()
	{
	     $array=array();
	     $array['errorcode']=1;
	     $array['errormessage']="ok";
	     return $array;
	}
	public static function getNotLoginResult()
	{
	     $array=array();
	     $array['errorcode']=2;
	     $array['errormessage']="亲!你还没登录了";
	     return $array;
	}
	public static function getErrorResult()
	{
	     $array=array();
	     $array['errorcode']=2;
	     $array['errormessage']="error";
	     return $array;
	}
}