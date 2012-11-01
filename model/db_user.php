<?php
/////////////////////////////////////////////////////////////////
//云边开源轻博, Copyright (C)   2010 - 2011  qing.thinksaas.cn 
//EMAIL:nxfte@qq.com QQ:234027573                              
//$Id: db_member.php 35 2011-11-03 08:18:14Z anythink $ 
include 'util/McryptUtil.php';
include 'util/PassUtil.php';
class db_user extends spModel  
{  
	var $pk = "id"; // 主键  
	var $table = "user"; // 数据表的名称
	function is_email($email){
           return strlen($email) > 6 && preg_match("/^[\w\-\.]+@[\w\-]+(\.\w+)+$/", $email);
       }
	  var $addrules = array(  
		'isused' => array('db_user','checkname'), //  检查用户是否重复
		'isverifcode' => array('db_user','checkverifycode'), //检查验证马是否输入正确
		'checklogin' => array('db_user','checklogin'), //检查验证马是否输入正确
		'isopen'     => array('db_user','noopen'),     //检查是否允许登录
		'keepmail'   => array('db_user','keepmail'),   //检查是否被限制
		'ninameused' => array('db_user','ninameused'), //检查昵称是否使用
		
	  );  
 
    var $verifier_login  = array(  
       "rules" => array( 
           'email' => array(  
               'notnull' => TRUE, // username不能为空  
			   'isopen'    =>true, //是否被禁用
			  'email' => TRUE,
             ),  
           'password' => array(   
               'notnull' => TRUE, 
            ),  
		   'verifycode' => array(
				'notnull' => TRUE,	
				'isverifcode'=>'verifycode',
				'checklogin'=>TRUE,
			),
		    
        ),  
	   "messages" => array( // 提示信息  
             'email' => array(  
              'notnull' => "邮箱不能为空",  
			  'isopen'    =>'账号被限制访问',
			  'email'=>'请输入邮箱',
            ),  
			  'password' => array(  
              'notnull' => "密码不能为空",  
            ),
			   'verifycode' => array(
			   'notnull' => '验证码没有填写',	
			   'isverifcode'=>'验证码失败',
			   'checklogin' => '用户名密码不正确',  
			),
     )  
    );
	
	//连接登陆的验证 没有验证码的
	var $verifier_openConnect_Login  = array(  
       "rules" => array( 
           'email' => array(  
               'notnull' => TRUE, // username不能为空  
			  'isopen'    =>true, //是否被禁用
             ),  
           'password' => array(   
               'notnull' => TRUE, 
			   'checklogin' => TRUE
            ),  
        ),  
	   "messages" => array( // 提示信息  
             'email' => array(  
              'notnull' => "邮箱不能为空",  
			  'isopen'    =>'账号被限制访问',
            ), 
			  'password' => array(  
              'notnull' => "密码不能为空",  
			  'checklogin' => '用户名密码不正确'				  
            ) 
     )  
    );
	
	



   var $verifier_reg  = array(  
       "rules" => array( 
           'email' => array(  
               'notnull' => TRUE, // username不能为空  
               'minlength' => 5,  // username长度不能小于5  
               'maxlength' => 50, // username长度不能大于 
			   'email' => TRUE,
			   'keepmail'=>TRUE,
			   'isused' => 'email', //如果真重复了
             ),  
           'password' => array(   
               'notnull' => TRUE, 
               'minlength' => 6, 
            ),
			'username'=>array(
			 'minlength' => 3,  // username长度不能小于5  
			 'maxlength' => 12, // username长度不能大于 
		     'ninameused' => TRUE,
			),
		    'password2' => array(  
              'equalto' => 'password',   
            ),  
			
        ),  
	   "messages" => array( // 提示信息  
            'email' => array(  
                 'notnull' => "注册邮箱不能为空",  
                'minlength' => "注册邮箱不能少于5个字符", 
                 'maxlength' => "注册邮箱不能大于50个字符",  
				 'email'=>'请输入正确的邮箱',
				 'keepmail'=>'该邮箱被限制使用请更换',
				 'isused'=>'注册邮箱已经存在,试试绑定?',
            ),  
			'username'=>array(
				 'minlength' => '昵称不能小于3个字',  // username长度不能小于5  
				 'maxlength' => '昵称不能超过12个字', // username长度不能大于 
				 'ninameused' => '昵称已被使用请更换',
			),
			  'password' => array(  
                 'notnull' => "密码不能为空",  
                'minlength' => "密码不能少于5个字符",  
            ),  
			   'password2' => array(  
              'equalto' => '两次密码输入不正确',
			), 
			   'verifycode' => array(
				'notnull' => '验证码没有填写',	
				'isverifcode'=>'验证码失败',
			),			
		),
	);	
	
	//连接注册的验证
	 var $verifier_openConnect_Reg  = array(  
       "rules" => array( 
           'email' => array(  
               'notnull' => TRUE, // username不能为空  
               'minlength' => 5,  // username长度不能小于5  
               'maxlength' => 50, // username长度不能大于 
			   'email' => TRUE,
			   'keepmail'=>TRUE,
			   'isused' => 'email', //如果真重复了
             ),  
           'password' => array(   
               'notnull' => TRUE, 
               'minlength' => 6, 
            ),
			'username'=>array(
			 'minlength' => 3,  // username长度不能小于5  
			 'maxlength' => 12, // username长度不能大于 
		     'ninameused' => TRUE,
			),
		    'password2' => array(  
              'equalto' => 'password',   
            ),  
			
        ),  
	   "messages" => array( // 提示信息  
            'email' => array(  
                 'notnull' => "注册邮箱不能为空",  
                'minlength' => "注册邮箱不能少于5个字符", 
                 'maxlength' => "注册邮箱不能大于50个字符",  
				 'email'=>'请输入正确的邮箱',
				 'keepmail'=>'该邮箱被限制使用请更换',
				 'isused'=>'注册邮箱已经存在,试试绑定?',
            ),  
			'username'=>array(
				 'minlength' => '昵称不能小于3个字',  // username长度不能小于5  
				 'maxlength' => '昵称不能超过12个字', // username长度不能大于 
				 'ninameused' => '昵称已被使用请更换',
			),
			  'password' => array(  
                 'notnull' => "密码不能为空",  
                'minlength' => "密码不能少于5个字符",  
            ),  
			   'password2' => array(  
              'equalto' => '两次密码输入不正确',
			),  
		),
	);	
   
  

	/*用户登录，规则验证*/
	function userLogin($row)
	{
		return true;
	}
	/*用户注册,11.6.29验收完毕*/
	function userReg($row)
	{
		$ip = $_SERVER["REMOTE_ADDR"];
		$salt = randstr();
		$password = password_encode($row['password'],$salt);
		$arr = array('password' => $password,
					 'salt' =>$salt,
					 'regtime'=> time(),
					 'regip'=>$ip
			    );
		$row = array_merge($row,$arr);
	
		$uid = $this->create($row);
		$_SESSION['uid'] = $uid;
		spClass('db_notice')->sendRegisgtr($uid);
		return $uid;
	}

	/*注册验证是否重名*/
	function checkemail($val,$right)
	{
		$result = $this->findBy('email',$val);
		if(is_array($result))
		{
			return FALSE;	
		}else{
			return TRUE;	
		}
	}
	/*注册验证是否重名*/
	function checkname($val,$right)
	{
		$result = $this->findBy('uname',$val);
		if(is_array($result))
		{
			return FALSE;	
		}else{
			return TRUE;	
		}
	}
	/*注册昵称是否重复*/
	function ninameused($val,$right,$all)
	{
		$result = $this->findBy('username',$all['username']);
		if(is_array($result))
		{
			return FALSE;
		}else{
			return TRUE;
		}
	}
	
	/*检测限制账号*/
	function keepmail($val,$right,$all)
	{
		$keep =  $GLOBALS['YB']['keep_email'];
		if($keep != '')
		{
			$keeparray = explode(',',$keep);
			$emails = explode('@',$all['email']);
			if(in_array($emails[0],$keeparray))
			{
				return false;
			}else{
				return true;
			}
		}else{
			return true;
		}
	}
	
	
	/*检查账号是否被禁用*/
	function noopen($val,$right,$all)
	{
		
		if($this->is_email($all['email']))
		{
			$result = $this->findBy('email',$all['email']);
		if($result['isapprove'] == 0)
		{
			return true;	
		}else{
			return false;	
		}
		}else 
		{
					$result = $this->findBy('uname',$all['email']);
		if($result['isapprove'] == 0)
		{
			return true;	
		}else{
			return false;	
		}
		}
	
	}
	
	/*检查用户名密码是否正确*/
	function checklogin($val,$right,$all)
	{
if($this->is_email($all['email']))
{
		$result = $this->findBy('email',$all['email']);
}else 
{
	$result = $this->findBy('uname',$all['email']);
}

		if($all['email'] == '' || $all['password'] == ''){return false;}
		$password =$all['password'];
		
		$passuntil=new PassUtil();
		if($result['pass'] ==$passuntil->getDbPass($password) )
		{
			$ip = getIP();
			$_SESSION['uid'] = $result['id'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['domain'] = 'zheng';
			$_SESSION['uname'] = $result['uname'];
			$_SESSION['admin'] = $result['admin'];				
			setcookie('unames',$result['email'],time()+60*60*24*30,'/');
			$this->update(array('id'=>$result['id']),array('latestonline'=>date('Y-m-d H:i:s')));
			return true;
		}else{
			return false;	
		}
	}
	
	/*注册checkverifycode是否正确*/
	function checkverifycode($val,$right,$all)
	{
	  $vcode = spClass('spVerifyCode');
	  if($vcode->verify($all['verifycode'])) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	/*获取所有活动的扩展登陆信息*/
	 function _getActionToken($uid)
	{
		$rs = spClass('db_memberex')->spLinker()->findAll(array('uid'=>$uid));
		foreach($rs as $d)
		{
			$_SESSION['openconnect'][$d['types']]['openid'] = $d['openid'];
			$_SESSION['openconnect'][$d['types']]['token'] = $d['token'];
			$_SESSION['openconnect'][$d['types']]['secret'] = $d['secret'];
		}
	}
	

}
?>