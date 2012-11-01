<?php
/////////////////////////////////////////////////////////////////
//云边开源轻博, Copyright (C)   2010 - 2011  qing.thinksaas.cn 
//EMAIL:nxfte@qq.com QQ:234027573                              
//$Id: user.php 41 2011-11-06 07:59:40Z anythink $ 


//个人设置动作执行
class user extends top
{ 

	function __construct(){  
         parent::__construct(); 
		  if(!islogin()){prient_jump(spUrl('main'));}	
		  $this->favatag = spClass('db_mytag')->myFavaTag($_SESSION['uid'],5); //显示收藏标签
     }  
	
	/*显示我的设置界面*/
	function setting()
	{
if(islogin())
{
		$this->user = spClass('db_user')->find(array('id'=>$_SESSION['uid'])); //用户信息

		$this->display('user_setting.html');	
}
	}
	
	
		
	/*显示首页界面我关注的*/
	public function myfollow()
	{
		if($this->spArgs('follow'))
		{
			
			   $page=$this->spArgs('page',1);
            $index=$page-1;
              $fans=$this->getModel('fan')->getFans($_SESSION['uid'],0,$index,25);

           	$this->follow =$fans['fs'];
			//			put("relation", relation);0:显示自己的粉丝 1:显示自己的关注者
		
		
			$this->pager = 	$this->getModel('fan')->pagerHtml($page, 25,'fan',array("follower",$_SESSION['uid']),$c='user',$a='myfollow',array('follow'=>'me'));
			
			       $this->follower=$this->getModel('fan')->getFans($_SESSION['uid'],0,0,200);
			$this->getfollow = 1;
		
			$this->curr_forme = ' class="current"';
		}else{
			
					//粉丝
     
            //我关注别人的
            $page=$this->spArgs('page',1);
            $index=$page-1;
              $fans=$this->getModel('fan')->getFans($_SESSION['uid'],1,$index,25);

           	$this->follow =$fans['fs'];
			//			put("relation", relation);0:显示自己的粉丝 1:显示自己的关注者
		
		
			$this->pager = 	$this->getModel('fan')->pagerHtml($page, 25,'fan',array("fan",$_SESSION['uid']),$c='user',$a='myfollow');
			$this->curr_mefor = ' class="current"';
		}
		
		$this->memberinfo();
		$this->display('user_myfollow.html');	
	
	}
	
	/*我喜欢的*/
	public function mylikes()
	{
		
		
		if(islogin())
		{
				$page=$this->spArgs('page',1);
			$index=$page-1;
		if($this->spArgs('work'))
		{
		$this->data= $this->getModel('service')->getServicesByColl($_SESSION['uid'],15,2,$pageIndex);
					 $this->pager =  $this->getModel('lost')->pagerHtml($page, 15,"lost",array('user_id'=>$_SESSION['uid'],'flag'=>1),$c='user',$a='mypost',array("lost"=>"yes"));
			$this->curr_my_lost= ' class="current"';
			$this->posttype='work';
		}else if($this->spArgs('new'))
		{
			$this->finds= $this->getModel('lost')->getlostById($_SESSION['uid'],15,2,$index);
					 $this->pager =  $this->getModel('lost')->pagerHtml($page, 15,"lost",array('user_id'=>$_SESSION['uid'],'flag'=>2),$c='user',$a='mypost',array("find"=>"yes"));
			$this->curr_my_find = ' class="current"';
						$this->posttype='new';
		}
		else{
			$this->two= $this->getModel('two')-> getTwosById($_SESSION['uid'],15,$index);
	    	 $this->pager =  $this->getModel('two')->pagerHtml($page, 15,"two",array('user_id'=>$_SESSION['uid']),$c='user',$a='mypost');
			$this->curr_my_index = ' class="current"';
			$this->posttype='two';
		}
		
		$this->curr_r1_4 = ' class="current"';
		$this->display('user_mylikes.html');	
		}

		
	}
	
	/*显示首页界面我发布的*/
	public function mypost()
	{
		if(islogin())
		{
				$page=$this->spArgs('page',1);
			$index=$page-1;
		if($this->spArgs('lost'))
		{
		$this->losts= $this->getModel('lost')->getlostById($_SESSION['uid'],15,1,$index);
					 $this->pager =  $this->getModel('lost')->pagerHtml($page, 15,"lost",array('user_id'=>$_SESSION['uid'],'flag'=>1),$c='user',$a='mypost',array("lost"=>"yes"));
			$this->curr_my_lost= ' class="current"';
			$this->posttype='lost';
		}else if($this->spArgs('find'))
		{
			$this->finds= $this->getModel('lost')->getlostById($_SESSION['uid'],15,2,$index);
					 $this->pager =  $this->getModel('lost')->pagerHtml($page, 15,"lost",array('user_id'=>$_SESSION['uid'],'flag'=>2),$c='user',$a='mypost',array("find"=>"yes"));
			$this->curr_my_find = ' class="current"';
						$this->posttype='find';
		}
		else{
			$this->two= $this->getModel('two')-> getTwosById($_SESSION['uid'],15,$index);
	    	 $this->pager =  $this->getModel('two')->pagerHtml($page, 15,"two",array('user_id'=>$_SESSION['uid']),$c='user',$a='mypost');
			$this->curr_my_index = ' class="current"';
			$this->posttype='two';
		}
		
		$this->curr_r1_4 = ' class="current"';
		$this->display('user_mypost.html');	
		}
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