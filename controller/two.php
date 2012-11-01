<?php
/////////////////////////////////////////////////////////////////
//云边开源轻博, Copyright (C)   2010 - 2011  qing.thinksaas.cn
//EMAIL:nxfte@qq.com QQ:234027573
//$Id: main.php 45 2011-11-07 06:33:21Z anythink $


class two extends top
{

	public function index()
	{
		$this->memberinfo();
		$hot=$this->getModel('two')->getHot();

		//		$tags = spClass('db_tags')->getHotTag(30);
		//		if($tags['string'])
		//		{
		//			$where = "`open` = 1 and `tag` in ({$tags['string']})";
		//		}
		//

		$twos=$this->getModel('two')->getNew();

		$this->feeds = feddshtml($twos,0,'recommend');
		$this->hotMax = $hot[0]['count'];

		$this->htag = $hot;



		$this->title = '二手';
		$this->CurrentModule = 'two';
		$this->display('recommend.html');

	}
	public function del()
	{
			if($this->spArgs('id'))
		{
			if(islogin())
			{
					$oid=$this->spArgs('id');
					$gettwo=$this->getNotORM()->two[$oid];
			
					if($gettwo['user_id']==$_SESSION['uid'])
					{
						if($gettwo->delete()!=null)
						{
							echo 'ok';
						}
					}else 
					{
			
							echo '无权限删除';
					}
			}
			
			}
	}
public function add()
{
		if($this->spArgs('id'))
		{
			if(islogin())
			{
				$oid=$this->spArgs('id');
				$gettwo=$this->getNotORM()->coll(array('user_id'=>$_SESSION['uid'],'type'=>'two','object_id'=>$oid));
				if($gettwo->count()>0)
				{
					if($gettwo->delete()!=null)
					{
						echo 2;
					}else 
					{
						echo "删除失败，请重试";
					}
				}else 
				{
					$temptwo=$this->getNotORM()->two[$oid];
					if($temptwo['flag']==1)
					{
						$title="(转让)".$temptwo['title'];
					}else if($temptwo['flag']==2)
					{
							$title="(求购)".$temptwo['title'];
					}
				$coll=array();
			$coll['user_id']=$_SESSION['uid'];
			$coll['title']=$title;
			$coll['type']='two';
			$coll['object_id']=$oid;
			if($this->getNotORM()->coll()->insert($coll)!=null)
			{
				echo 1;
			}else 
			{
					echo "收藏失败，请重试";
			}
				}
			}
		}
}

  public function show()
  {
  		$this->title = '二手';
		$this->CurrentModule = 'two';
		$r=array();
			$flag=1;
			if($this->spArgs('id'))
			{
				$id=intval($this->spArgs('id'));
				$t=$this->getNotORM()->two[$id];
			
				$this->type=$t['type'];
				$this->dtype='转让'.$this->type;
$this->dothertype='求购'.$this->type;

$this->flag=$t['flag'];
$i=0;
$r[0]=$t->getRow();
    $r[$i]['pubdate']=strtotime($t['pubdate']);
			$r[$i]['images']=$this->getNotORM()->images(array('type'=>'two','object_id'=>$t['id']))->fetchAllData();
			$r[$i]['uname']=$t->user['uname'];
			$r[$i]['portrait']=$t->user['portrait'];
				    if(islogin())
		    {
	
		    	if($this->getNotORM()->coll(array('user_id'=>$_SESSION['uid'],'type'=>'two','object_id'=>$t['id']))->count()>0)
		    	{
                   $r[$i]['coll']=1;
		    	}else 
		    	{
		    		$r[$i]['coll']=0;
		    	}
		    }
		$this->twos=$r;
			}
			$this->display('tag_index.html');
  }
	public function  type()
	{
	   $this->title = '二手';
		$this->CurrentModule = 'two';
		$flag=1;
		if($this->spArgs('flag'))
		{
			if(is_numeric($this->spArgs('flag')))
		$flag=$this->spArgs('flag');
		}
		if($this->spArgs('type'))
		{
			$type = tagEncodeParse($this->spArgs('type'));

			$this->type= strreplaces($type);
	
$this->dtype='转让'.$this->type;
$this->dothertype='求购'.$this->type;
		
			$page=$this->spArgs('page',1);
			$index=$page-1;
			if(islogin())
			{
				$this->twos= $this->getModel('two')-> getTwosByType($_SESSION['uid'],$type,15,$flag,$index);
			}else
			{
				$this->twos=  $this->getModel('two')-> getTwosByType(0,$type,15,$flag,$index);

			}
				

		}else{
			$this->type = NULL;
		}

		$this->pager =  $this->getModel('two')->pagerHtml($page, 15,"two",array('type'=>$type,'flag'=>$flag),$c='two',$a='type',array('type'=>$type,'flag'=>$flag));
$this->flag=$flag;
		$this->display('tag_index.html');
	}

	public function discovery()
	{
		$this->memberinfo();
		$this->cate = spClass('db_category')->findCate();


		if($this->spArgs('catename'))
		{
			$_SESSION['discover_catename'] = $this->spArgs('catename');
			$cname = spClass('db_member')->escape('%'.urldecode($this->spArgs('catename')).'%');
			if($this->spArgs('local'))
			{
				$local = spClass('db_member')->escape('%'.urldecode($this->spArgs('local')).'%');
				$_SESSION['discover_local'] = TRUE;
				$where = "`local` like $cname ";
			}else{
				unset($_SESSION['discover_local']);
			}
			$this->currcid = $this->spArgs('cid');

		}

		if($_SESSION['discover_catename'])
		{
			$blogtag = explode(',',urldecode($_SESSION['discover_catename']));
			$pre = '';
			foreach($blogtag as $d)
			{
				$pre .= '`blogtag` like \'%'.$d.'%\' or ';
			}
			$pre = substr($pre,0,-4);
			$where = "$pre and `blogtag` != ''";
		}

		if($_SESSION['discover_local'])
		{
			$cname = spClass('db_member')->escape('%'.urldecode($_SESSION['discover_catename']).'%');
			$where = "`local` like $cname ";
		}

		if($this->spArgs('cateall'))
		{
			unset($_SESSION['discover_catename']);
			header("Location:".spUrl('main','discovery'));
		}


		$this->userinfo = spClass('db_member')->spPager($this->spArgs('page',1),16)->findAll($where,'flow desc,num desc');
		$count  = spClass('db_member')->findCount($where);
		$page = spClass('db_member')->spPager()->getPager();



		$this->CurrentModule = 'discover';
		if($this->spArgs('catename'))
		{
			$this->titlepre = urldecode($this->spArgs('catename')).' - 发现';
		}else{
			$this->titlepre = '发现';
		}
		if($this->spArgs('ajaxload'))
		{
			if($this->spArgs('page') <= $page['total_page'])
			{
				$this->data = $this->userinfo;
				$this->display('require_discovery_user.html');
			}
		}else{
			$this->display('discovery.html');
		}
	}


	public function now()
	{

		$this->memberinfo();
		$this->favatag = spClass('db_mytag')->myFavaTag($_SESSION['uid'],5); //显示收藏标签
		$sql = "SELECT b. * , k.id AS likeid , f.id AS followid ,m.username,m.domain
						FROM `".DBPRE."blog` AS b LEFT JOIN `".DBPRE."likes` AS k ON ( b.bid = k.bid AND k.uid ='$uid' )
						LEFT JOIN `".DBPRE."follow` AS f ON ( b.uid = f.touid and f.uid = '$uid' )
						LEFT JOIN `".DBPRE."member` as m on b.uid = m.uid where b.open = 1 order by b.bid desc";

		$this->blogs = spClass('db_blog')->spPager($this->spArgs('page',1),10)->findSql($sql);
		$page = spClass('db_blog')->spPager()->getPager('');

		$this->title = '此刻最新';
		$this->CurrentModule = 'now';
		if($this->spArgs('ajaxload'))
		{
			if($this->spArgs('page') <= $page['total_page'])
			{
				$this->limits = 4;
				$this->data = $this->blogs; //将内容给模板变量
				$this->display('require_feeds.html');
			}
		}else{
			$this->display('now.html');
		}
	}














































	/*用户登陆*/
	public function login()
	{

		if($this->spArgs('email'))
		{

			$userobj = spClass('db_user');

			if($this->yb['loginCodeSwitch'] != 'close') //如果开启
			{
				$userobj->verifier = $userobj->verifier_login;
			}else{
				$userobj->verifier = $userobj->verifier_openConnect_Login;
			}

			if( false == $userobj->spVerifier($this->spArgs()) ){
				$userobj->userLogin($this->spArgs());


				if($this->spArgs('callback'))
				{
					$this->jslocation(base64_decode($this->spArgs('callback')));
				}else{
					$this->jslocation(spUrl('main','index'));
				}

			}else{
				$err = $userobj->spVerifier($this->spArgs());
				foreach($err as $d){$errs[] = $d;}
				$this->errmsg = $errs[0][0];

				$this->jslocation(spUrl('main','indexerror', array("error"=>$this->errmsg)));
			}
		}
		$this->callback = $this->spArgs('callback');
		$this->time = time();
		$this->email = $_COOKIE['unames'];
		$this->display('login.html');
	}

	/*用户退出*/
	public function logout()
	{
		$_SESSION = array();
		session_destroy();
		if($this->spArgs('callback'))
		{
			$this->jslocation(base64_decode($this->spArgs('callback')));
		}else{
			$this->jslocation(spUrl('main','index'));
		}
	}

	/*用户注册*/
	public function reg()
	{
		$this->time = time();
		if($this->spArgs('doing'))
		{
			$userobj = spClass('db_member');

			if($this->yb['regCodeSwitch'] != 'close') //如果开启
			{
				$userobj->verifier = $userobj->verifier_reg;
			}else{
				$userobj->verifier = $userobj->verifier_openConnect_Reg;
			}

			if( false == $userobj->spVerifier($this->spArgs()) ){
				$userobj->userReg($this->spArgs());
				if($this->spArgs('callback'))
				{
					$this->jslocation(base64_decode($this->spArgs('callback')));
				}else{
					$this->jslocation(spUrl('main','index'));
				}
			}else{
				$err = $userobj->spVerifier($this->spArgs());
				foreach($err as $d){$errs[] = $d;}
				$this->errmsg = $errs[0][0];

			}
		}
		$this->callback = $this->spArgs('callback');
		$this->display('reg_new.html');
	}





	/*获取验证码*/
	public function vcode()
	{
		spClass('spVerifyCode')->display();
	}

}
?>