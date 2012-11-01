<?php
include_once(JJPATH.'/util/ConstantUtil.php');
include_once(JJPATH.'/util/WorkIdUtil.php');
class UserModel extends Model
{	
	public function uplastogin($uid)
	{
					if(isset($uid)&&$uid>0&&$uid!="")
		{
			date_default_timezone_set(PRC);
			$user=$this->orm->user[$uid];
			$user['jointime']=$user['jointime'];
			    $user['latestonline']=date("Y-m-d H:i:s");
			    $user->update();
		}
	}
	public function  cname($uid,$uname)
	{

	  if($uname==""||!isset($uname))
		{
			return 1;
		}
		$user=$this->orm->user[$uid];
		if($user['uname']==$uname)
		{
	      return 0;
		}
	if($this->orm->user('uname',$uname)->count()>0)
	   {
	   		return 3;
	   }
			$user['uname']=$uname;
			$user['jointime']=$user['jointime'];
		if($user->update()!=false)
		{
		  return 0;
		}
	}
	
	public function register($uname,$pass,$email,$hasimg,&$isok)
	{
				date_default_timezone_set(PRC);
			$newuser=array();
		if($uname==""||!isset($uname))
		{	$newuser['result']=ResultUtil::getResult(2, "用户名不能为空");
			return $newuser;
		}
		if($pass==""||!isset($pass))
		{
			$newuser['result']=ResultUtil::getResult(2, "密码不能为空");
			
				return $newuser;
		}
		if($email==""||!isset($email))
		{
			$newuser['result']=ResultUtil::getResult(2, "邮箱不能为空");
			
				return $newuser;
		}
		if(!$this->is_email($email))
		{
				$newuser['result']=ResultUtil::getResult(2, "邮箱格式不正确");
				
					return $newuser;
		}
	   if($this->orm->user('email',$email)->count()>0)
	   {
	   		$newuser['result']= ResultUtil::getResult(2, "邮箱和别人重复了，请更改");
	   		
	   			return $newuser;
	   }
	if($this->orm->user('uname',$uname)->count()>0)
	   {
	   		$newuser['result']= ResultUtil::getResult(2, "用户名和别人重复了，请更改");
	   		return $newuser;
	   }
		$user=array();
		$user['uname']=$uname;
		$user['pass']=PassUtil::getDbPass($pass);
		$user['email']=$email;
		$user['latestonline']=date("Y-m-d H:i:s");
		$inuser=$this->orm->user()->insert($user);
		if($inuser&&$hasimg)
		{
			      $path="./web/static/images/user/";
                  $namefilepath="http://www.111work.com/api/web/static/images/user/";
	              $newname=$inuser['id'];
		    	  $upload=new JJUpload();
		    	  $up=$upload->upload("img", $newname, $path, array());
		    	 $jjimge=new JJImage();
		    	 $jjimge->make_thumb($path.$up['newName'], $path."m_".$newname,65,65);
		    	 $jjimge->make_thumb($path.$up['newName'], $path."s_".$newname,20,20);
		    	 $jjimge->make_thumb($path.$up['newName'], $path."b_".$newname,0,0,false,200);
		    	 $jjimge->make_thumb($path.$up['newName'], $path."app_".$newname,50,50);
		    	 $inuser['portrait']=$namefilepath."app_".$newname.'.'.$up['ext'];
		    	 $inuser->update();
		}
		if($inuser)
		{
			$isok=true;
			$uid=$inuser['id'];
				$newuser=$this->orm->user[$uid]->getRow();

			unset($newuser['xh']);
				unset($newuser['class']);
					unset($newuser['score']);
							 $newuser["followerscount"]=$this->orm->fan("fan",$uid)->count();
				     $newuser['fanscount']=$this->orm->fan("follower",$uid)->count();
	      
		  $newuser['pass']=PassUtil::getRealPass($newuser['pass']);
			  $this->getModel("message")->add(1,$uid,ConstantUtil::$regmessage);

			
			$newuser['result']= ResultUtil::getResult(1, "注册成功请进一步完善信息");
	
		 	if($this->getModel("notice")->getNotice($uid)!=null)
		 	{
		 		$newuser['notice']=$this->getModel("notice")->getNotice($uid);
		 	}
	
			 return $newuser;
		}
		else
		{
		
		$newuser['result']= ResultUtil::getResult(2, "注册失败，请重试");
		 return $newuser;
		}
	}
	public function cpass($workid,$uid,$oldpass,$newpass,$newpass1,&$isok)
	{
	   $workidutil=new WorkIdUtil();
		$result=null;
		if(!$workidutil->check($workid, $uid, $result))
		{
			return $result;
		}
		if($oldpass==""||!isset($oldpass))
		{
			return ResultUtil::getResult(2, "旧密码不能为空");
		}
	   if($newpass==""||!isset($newpass))
		{
			return ResultUtil::getResult(2, "新密码不能为空");
		}
		if($newpass!=$newpass1)
		{
			return ResultUtil::getResult(2, "2次密码不一致");
		}
		$user=$this->orm->user[$uid];
		$oldpass=PassUtil::getDbPass($oldpass);
		if($user['pass']!=$oldpass)
		{
			return ResultUtil::getResult(2, "旧密码错误");
		}
		$newpass=PassUtil::getDbPass($newpass);
		if($user['pass']==$newpass)
		{
				return ResultUtil::getResult(2, "新旧密码一样");
		}
		$user['pass']=$newpass;
		$user['jointime']=$user['jointime'];
		if($user->update()!=false)
		{
			$isok=true;
			return ResultUtil::getResult(1, "修改成功");
		}else 
		{
				return ResultUtil::getResult(2, "修改失败，请重试");
		}
	}
	public function update($uid,$grader,$qq,$shool,$college,$grade,$info)
	{
		date_default_timezone_set(PRC);
$grader=trim($grader);
		if($grader!="男"&&$grader!="女")
		{
			return  "性别错误";
		}
		

		if($qq!=""&&isset($qq)&&!is_numeric($qq))
		{
			return "QQ错误";
		}
		if($qq!=""&&isset($qq)&&strlen($qq)>15)
		{
			return "QQ号过长";
		}
		$user=$this->orm->user[$uid];
		$user['gender']=$grader;
	$user['qq']=trim($qq);

				
		
       $user['school']=$shool;
	$user['college']=$college;
	$user['grade']=$grade;
	$user['info']=$info;
	    $user['latestonline']=date("Y-m-d H:i:s");
$user['jointime']=$user['jointime'];
		if($user->update()!=false)
		{
			return 1;
		}else 
		{
			return 1;
		}
	}
	public function upface($workid,$uid)
	{
	    $workidutil=new WorkIdUtil();
		$result=null;
		if(!$workidutil->check($workid, $uid, $result))
		{
			return $result;
		}
//				$big = 'b_'.$uid.'.jpg'; 
//						$middle = 'm_'.$uid.'.jpg'; 
//						$small = 's_'.$uid.'.jpg'; 
		         $user=$this->orm->user[$uid];
		         $path="./web/static/images/user/";
                 $namefilepath="http://www.111work.com/api/web/static/images/user/";
	              $newname=$uid;
		    	 $upload=new JJUpload();
		    	 $up=$upload->upload("portrait", $newname, $path, array());
                //  $tweet['bimg']=$namefilepath.$up['newName'];
		    	 $jjimge=new JJImage();
		    	 $jjimge->make_thumb($path.$up['newName'], $path."m_".$newname,65,65);
		    	 $jjimge->make_thumb($path.$up['newName'], $path."s_".$newname,20,20);
		    	 $jjimge->make_thumb($path.$up['newName'], $path."b_".$newname,0,0,false,200);
		    	 $jjimge->make_thumb($path.$up['newName'], $path."app_".$newname,50,50);
		    	 $user['portrait']=$namefilepath."app_".$newname.'.'.$up['ext'];
		    	 $user['jointime']=$user['jointime'];
		    	 $user->update();
		    	 //$tweet['simg']=
		    	 return ResultUtil::getResult(1, "头像上传成功");
	}
	
	public function my($uid)
	{


		$user=$this->orm->user[$uid]->getRow();
		unset($user['pass']);
			unset($user['xh']);
				unset($user['class']);
					unset($user['score']);

		return $user;
	}
	
		 //* @param id 表示被评论的某条新闻，帖子，动弹的id 或者某条消息的 friendid 
	 //* @param catalog 表示该评论所属什么类型：1新闻  2帖子  3动弹  4动态
	 //* @param replyid 表示被回复的单个评论id
	 //* @param authorid 表示该评论的原始作者id
	 //* @param uid 用户uid 一般都是当前登录用户uid
	 //* @param content 发表评论的内容
	public function updaterelation($uid,$hisuid)
	{

		if($uid==$hisuid)
		{
			if($this->orm->user[$uid]['gender']=="女")
			{

		exit('这位小姐请不用关注自己好么!');
			}else
			{
			
			exit('这位先生请不用关注自己好么!');
			}	
		}
		$fan=array();
		$fan['fan']=$uid;
	   $fan['follower']=$hisuid;
		if($this->orm->fan($fan)->count()>0)
		{
			
		
		
					$this->orm->fan($fan)->delete();
					return 2;
		
		}else 
		{
			$this->orm->fan()->insert($fan);
			$uname=$this->orm->user[$uid]['uname'];
			$hisname=$this->orm->user[$hisuid]['uname'];
			$mess=$hisname."你好，".$uname." 刚刚成为了你的粉丝。";
			  $this->getModel("message")->pubone($uid,$hisuid,$mess);
				return	1;
		}

	}
	public function information($uid,$hisuid,$hisname,$pageIndex,$pageSize,$workid)
	{
		
		
		$hisuser=$this->orm->user[$hisuid]->getRow();
			
		unset($hisuser['pass']);
		unset($hisuser['xh']);
		$count1=$this->orm->fan(array("follower"=>$uid,"fan"=>$hisuid))->count();
		$count2=$this->orm->fan(array("follower"=>$hisuid,"fan"=>$uid))->count();
		$relation=3;
		if($count1==1&&$count2==1)
		{
			$relation=1;
		}else if($count1==1)
		{
			$relation=4;
		}else if($count2==1)
		{
			$relation=2;
		}

		$hisuser['relation']=$relation;
		$r["user"]=$hisuser;
         
          $r['activies']=$this->getModel("active")->getActives($pageSize,$hisuid,$pageIndex,$workid);
		 $r['pagesize']=$pageSize;
		 return $r;
		
		
	}
	
	function is_email($email){
           return strlen($email) > 6 && preg_match("/^[\w\-\.]+@[\w\-]+(\.\w+)+$/", $email);
       }
	private function result($errorCode,$errorMessage)
	{
	     $array=array();
	     $array['errorcode']=$errorCode;
	     $array['errormessage']=$errorMessage;
	     return $array;
	}

	public function login($uname,$pass,$keep,&$islogin)
	{
		$r= array();
		if($uname==""||!isset($uname)||$pass==""||!isset($pass))
		{
			$r['result']=$this->result(2, "用户名或密码为空");
			return $r;
		}
		if($this->is_email($uname))
		{
		
			if($this->orm->user('email',$uname)->count()>0)
			{

				     
				$temp=$this->orm->user('email',$uname)->fetchOneData();
		        $pass=PassUtil::getDbPass($pass);
				if($temp['pass']==$pass)
				{
					 $r=array();
					$r["id"]=$temp['id'];
					 $r["uname"]=$temp['uname'];
					 $r["email"]=$temp['email'];
					 $r["portrait"]=$temp['portrait'];
					 $r["account"]=$uname;
					 $r["followers"]=$this->orm->fan("fan",$r["id"])->count();
				     $r['fans']=$this->orm->fan("follower",$r["id"])->count();
				     $this->uplastogin($r["id"]);
				     $r['result']=$this->result(1, "登录成功");
				     $islogin=$temp['id'];
				     return $r;
				}
				else 
				{
					  $r['result']=$this->result(2, "密码错误");
				     return $r;
				}
			}
			else 
			{
				$r['result']=$this->result(2, "email不存在");
				 return $r;
			}
		}
		else 
		{
			if($this->orm->user('uname',$uname)->count()>0)
			{
				$temp=$this->orm->user('uname',$uname)->fetchOneData();
				$pass=PassUtil::getDbPass($pass);
				if($temp['pass']==$pass)
				{
					 $r=array();
					 $r["id"]=$temp['id'];
					 $r["uname"]=$temp['uname'];
					 $r["email"]=$temp['email'];
					 $r["portrait"]=$temp['portrait'];
					 $r["account"]=$uname;
					 $r["followers"]=$this->orm->fan("fan",$r["id"])->count();
				     $r['fans']=$this->orm->fan("follower",$r["id"])->count();
				     $r['result']=$this->result(1, "登录成功");
				     $islogin=$temp['id'];
				     return $r;
				}
				else 
				{
					  $r['result']=$this->result(2, "密码错误");
				     return $r;
				}
			}
			else 
			{
				$r['result']=$this->result(2, "用户名不存在");
				 return $r;
			}
		}
		
	}
}