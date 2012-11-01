<?php
/**
 *JJPHP 全局函数 不建议使用
 * @package  coreutil
 * @author     zhuli <www.initphp.com>
 * @author     zhengyouxiangxiang <zhengyouxiang00@gmail.com>
 * @copyright   www.111work.com
 */

function utf8Substr($str, $from, $len)
{
	return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'.
                       '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s',
                       '$1',$str);
}

function task_out($type)
{
	if($type==0)
	{
		echo "竞标中";
	}
	else if($type==-1)
	{
		echo "已经完成";
	}
	else
	{
		echo "进行中";
	}
}
function task_time($begin,$end,$flag)
{
	if($flag!=0){echo "投标已经提前结束";
	return ;}
	//32个月21天23小时23分钟
	$time_difference=$end-$begin;
	echo((date("Y",$time_difference) - 1970)*12+date("m",$time_difference) - 1);
	echo ("个月");
	echo date("d",$time_difference) - 1;
	echo ("天");
	echo date("G",$time_difference) - 1;
	echo ("小时");
	echo date("i",$time_difference) - 1;
	echo ("分钟");
}
function task_function($function,$flag)
{
	if($flag==0)
	{
	if($function===0)
	{echo   "结束" ;}
	else
	{
		echo "进行中";
	}
	}else if($flag==1)
	{
		echo   "结束" ;
	}
}
function task_bid($task,$ttype)
{
	switch ($ttype)
	{
		case 1: echo $task['marketglod'] ;break;
		case 2: echo $task['projectglod'] ;break;
		case 3: echo $task['structureglod'] ;break;
		case 4: echo $task['mouldglod'] ;break;
	}
}
?>