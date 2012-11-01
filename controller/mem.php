<?php
/////////////////////////////////////////////////////////////////
//云边开源轻博, Copyright (C)   2010 - 2011  qing.thinksaas.cn 
//EMAIL:nxfte@qq.com QQ:234027573                              
//$Id: user.php 41 2011-11-06 07:59:40Z anythink $ 


//个人设置动作执行
class mem extends top
{ 

	function __construct(){  
         parent::__construct(); 
		  if(!islogin()){prient_jump(spUrl('main'));}	
     }  
	

	
		
	/*显示首页界面我关注的*/
	public function mymem()
	{
		if($this->spArgs('me'))
		{
			
			   $page=$this->spArgs('page',1);
            $index=$page-1;

			//			put("relation", relation);0:显示自己的粉丝 1:显示自己的关注者
		
		
		$this->pager = 	$this->getModel('mem')->pagerHtml($page, 50,'mem',array("user_id",$_SESSION['uid']),$c='mem',$a='mymem');
			
			      $mems=$this->getModel('mem')->getMems(50,$_SESSION['uid'],$index);
 	$this->mem =$mems['mems'];
		$this->me=1;
			$this->curr_forme = ' class="current"';
		}else{
			
					//粉丝
     
            //我关注别人的
            $page=$this->spArgs('page',1);
            $index=$page-1;
            $mems=$this->getModel('mem')->getMems(50,0,$index);

           	$this->mem =$mems['mems'];
			//			put("relation", relation);0:显示自己的粉丝 1:显示自己的关注者
		
		$this->me=0;
			$this->pager = 	$this->getModel('mem')->pagerHtml($page, 50,'mem',array("user_id",0),$c='mem',$a='mymem');
			$this->curr_mefor = ' class="current"';
		}
		
		$this->memberinfo();
		$this->display('user_mem.html');	
	
	}
	

	/*显示首页界面我发布的*/
	public function mypost()
	{
		if($this->spArgs('draft'))
		{
			$this->blogs = spClass('db_blog')->spLinker()->spPager($this->spArgs('page',1),10)->findAll("`uid` = {$_SESSION['uid']} and `open` = 0 ",'bid desc');
			$this->pager = spClass('db_blog')->spPager()->pagerHtml('user','mypost',array('draft'=>'yes'));
			$this->curr_my_draft = ' class="current"';
		}else{
			$this->blogs = spClass('db_blog')->spLinker()->spPager($this->spArgs('page',1),10)->findAll("`uid` = {$_SESSION['uid']} and `open`not in (-1,0) ",'bid desc');
			$this->pager = spClass('db_blog')->spPager()->pagerHtml('user','mypost');	
			$this->curr_my_index = ' class="current"';
		}
		
			
		$this->memberinfo();
		$this->curr_r1_4 = ' class="current"';
		$this->display('user_mypost.html');	
	}
	
	/*我的回复*/
	public function myreplay()
	{
		if($this->spArgs('received')==1){ //我收到的
			$this->myreplay = spClass('db_replay')->spLinker()->spPager($this->spArgs('page',1),10)->findAll("`repuid` = {$_SESSION['uid']}");
			$this->pager = spClass('db_replay')->spPager()->pagerHtml('user','myreplay',array('received'=>1));
			$this->curr_myreplay_r = ' class="current"';
		$this->received = 1;
		}else{	//我发出的 回复
			$db_replay = spClass('db_replay');
			$db_replay->linker['blog']['enabled'] = false;
			$this->myreplay = $db_replay->spLinker()->spPager($this->spArgs('page',1),10)->findAll("`uid` = {$_SESSION['uid']}",'id desc');
			$this->pager = $db_replay->spPager()->pagerHtml('user','myreplay');
			$this->curr_myreplay = ' class="current"';

		}
		$this->memberinfo();
		$this->display('user_myreplay.html');	
	}
	
	
		
	/*我的回复*/
	public function mynotice()
	{
	
			$isread = 0;
			$this->curr_my_notice = ' class="current"';
		
		if($this->spArgs('clears')) //清除通知
		{
			$clear = $this->spArgs('clears');
			if(in_array($clear,array(1,2,3)))//1 评论通知  2 系统通知 3关注通知
			{
				spClass('db_notice')->delete(array('user_id'=>$_SESSION['uid'],'type'=>$clear));
				exit;
			}
		}
		
		if($this->spArgs('dels')) //清除通知
		{
			$clear = $this->spArgs('dels');
			if(in_array($clear,array(1,2,3)))//1 评论通知  2 系统通知 3关注通知
			{
				spClass('db_notice')->delete(array('uid'=>$_SESSION['uid'],'sys'=>$clear,'isread'=>1) );
				exit;
			}
		}
		
		//系统通知
		$this->sysnotice_c = $this->repnotice_c =$this->flownotice_c = 0;
		$this->sysnotice = spClass('db_notice')->spLinker()->spPager($this->spArgs('page',1),10)->findAll(array('user_id'=>$_SESSION['uid'],'type'=>3),'id desc');


		if(is_array($this->sysnotice)){ $this->sysnotice_c = count($this->sysnotice); }
		
		//留言通知
		$this->repnotice = spClass('db_notice')->spLinker()->spPager($this->spArgs('page',1),10)->findAll(array('user_id'=>$_SESSION['uid'],'type'=>1),'id desc');
      
		if(is_array($this->repnotice)){ $this->repnotice_c = count($this->repnotice); }
		
		//关注通知
		$this->flownotice = spClass('db_notice')->spLinker()->spPager($this->spArgs('page',1),10)->findAll(array('user_id'=>$_SESSION['uid'],'type'=>2),'id desc');

		if(is_array($this->flownotice)){ $this->flownotice_c = count($this->flownotice); }

		
		

		$this->display('user_mynotice.html');	

	}
	
	
	function pm()
	{
		
		if($this->spArgs('look')) //阅读私信 
		{
			$this->islook = true;
			$foruid  = intval($this->spArgs('look'));
		 $this->foruser=$this->getModel('user')->my($foruid);
			$mess=$this->getModel("comm")->getComm($_SESSION['uid'],200,$foruid,5,0);

	
			$this->read=$mess['comms'];
		}else{
	

	$mess=$this->getModel("message")->getMes($_SESSION['uid'],200,0);
	$this->pmCount=$mess['messageCount'];
		$this->mypm=$mess['messages'];
		}
		
//		//如果没有未读私信则显示已读的
//		if(!$this->mypm)
//		{
//			
//			$where = "SELECT n . * , m.username, m.domain, count( n.foruid ) AS fcount FROM `".DBPRE."notice` AS n
//				LEFT JOIN `".DBPRE."member` AS m ON n.uid = m.uid 
//				WHERE n.foruid = '{$_SESSION['uid']}'  and n.sys=0 
//				GROUP BY n.uid ORDER BY n.id DESC ";
//
//			$this->usdpm = spClass('db_notice')->spLinker()->findSql($where,'time desc');
//			//echo $where;
//		}
//	

		
		
		
		$this->memberinfo();
		$this->display('user_mypm.html');
	}
	
	
	
	/*保存个性修改*/
	function savesetting()
	{
if(islogin())
{       
	$uname=$this->spArgs('niname');
$usermodel=$this->getModel('user');
$ok=$usermodel->cname($_SESSION['uid'],$uname);
	
		if($ok==1)
		{
			js_err('用户名不能为空');

		}
		if($ok==3)
		{
				js_err('用户名已被使用');
		
		}
$qq=$this->spArgs('qq');
$gender=$this->spArgs('gender');
$school=$this->spArgs('school');
$college=$this->spArgs('college');
$grade=$this->spArgs('grade');
$info=$this->spArgs('textarea');

$ok=$usermodel-> update($_SESSION['uid'],$gender,$qq,$school,$college,$grade,$info);


	if($ok!=1)
	{
			js_err($ok);
	}
	$_SESSION['uname'] = htmlspecialchars($this->spArgs('niname'));
	exit('<script>parent.window.location.reload()</script>');				
	
	
	}
	}
	
	
	/*发送站内短信*/
	function postpm()
	{
		if($this->spArgs('send'))
		{
			if(islogin())
			{
		echo	$this->getModel('message')->add($_SESSION['uid'],$this->spArgs('uid'),$this->spArgs('info'));
		exit;
			}else 
			{
				exit;
			}
		}
		$uid = intval($this->spArgs('uid'));
		$this->rs = spClass('db_user')->find(array('id'=>$uid),'','id,uname');
		$this->display('user_mail_ajax.html');	
	}
	
	
	/*上传头像*/
	function upavatar()
	{
		$upfile = spClass('uploadFile');
		$upfile->set_filetypes('jpg|png|jpge|bmp');
		$upfile->set_path(API_PATH.'web/static/images/user');

		$upfile->set_imgresize(false);
		$upfile->set_imgmask(false);
		$upfile->set_dirtype(5); //设置为上传头像
		$upfile->set_diydir($_SESSION['uid']);  //用户id
		
		$files = $upfile->fileupload();	
		echo $files;
	}
	
	
	/*修改密码 使用ajaxpost 提交 不需要js 报错*/
	function changepwd()
	{
		if($this->spArgs('pwd') == '' || $this->spArgs('pwd1') == '' || $this->spArgs('pwd2') == ''){exit('所有字段不能为空');	}
		if($this->spArgs('pwd1') != $this->spArgs('pwd2')){ exit('两次密码不一致');}
		
		$user = spClass('db_user')->findBy('id',$_SESSION['uid']);
		$localpwd = trim($this->spArgs('pwd'));
		$passuntil=new PassUtil();
	   $localpwd=$passuntil->getDbPass($localpwd);
			if($user['pass'] != $localpwd){
			   exit('原始密码错误');	
			}else{
				$newpass=trim($this->spArgs('pwd1'));

				$row = array('pass' => $passuntil->getDbPass($newpass));	
				spClass('db_user')->update(array('id'=>$_SESSION['uid']),$row);
				if(1 >= spClass('db_user')->affectedRows() )
				{
				exit('ok');	
				}else{
				exit('密码没有修改成功,可能没有改变');	
				}
			}
	}
	

	
	
	
	
	
	
}

/*当前模块下函数*/
function js_err($msg)
{
	exit('<script>parent.tiper("'.$msg.'");parent.postoff();</script>');
}