<?php
class outservice extends top
{
	public function del()
	{
		if(islogin())
		{
			if($this->spArgs('id'))
			{
				$lost=$this->getNotORM()->lost[$this->spArgs('id')];
				if($lost['user_id']==$_SESSION['uid'])
				{
					$lost->delete();
					echo 'ok';
				}else
				{
				echo '无权限';
				}
			}
		}
	}
	//flag
   public function dlost()
   {
   	$r=array();
     	if($this->spArgs('id'))
		{
			$lost=$this->getNotORM()->lost[$this->spArgs('id')];
			if($lost!=null)
		{
			$r=$lost->getRow();
			$r['pubtime']=strtotime($r['pubtime']);
			if($r['user_id']!=0)
			{
			$user=$lost->user;
			$r['uname']=$user['uname'];
			
			}else 
			{
				$r['uname']="匿名用户";
			}
		}else 
		{
			$this->jslocation(spUrl('outservice','lost'));
		}
		}
		 $this->title = '寻物信息';
	      $this->CurrentModule='lost';
	      $this->d=$r;
		  $this->display('dlost.html');
   }
   public function dfind()
   {
   	$r=array();
     	if($this->spArgs('id'))
		{
			$lost=$this->getNotORM()->lost[$this->spArgs('id')];
		if($lost!=null)
		{
			$r=$lost->getRow();
			$r['pubtime']=strtotime($r['pubtime']);
			if($r['user_id']!=0)
			{
			$user=$lost->user;
			$r['uname']=$user['uname'];
			
			}else 
			{
				$r['uname']="匿名用户";
			}
		}else 
		{
			$this->jslocation(spUrl('outservice','find'));
		}
		}
		 $this->title = '招领信息';
	      $this->CurrentModule='find';
	      $this->d=$r;
		  $this->display('dfind.html');
   }
	public function lost()
	{
		$type ="all";
		if($this->spArgs('type'))
		{
		    $type = tagEncodeParse($this->spArgs('type'));
			$this->type= strreplaces($type);
		}
        $page=$this->spArgs('page',1);
		$index=$page-1;
		
		
		if($type =="all")
		{
			 $this->pager =  $this->getModel('lost')->pagerHtml($page, 15,"lost",array('flag'=>1),$c='outservice',$a='lost');
		}else 
		{
			 $this->pager =  $this->getModel('lost')->pagerHtml($page, 15,"lost",array('type'=>$type,'flag'=>1),$c='outservice',$a='lost',array('type'=>$type));
		}
     	$this->losts= $this->getModel("lost")->getlostType($type,15,1,$index);

		  $this->title = '寻物信息';
	      $this->CurrentModule='lost';
		  $this->display('lost.html');
	}
	public function find()
	{
	      	$type ="all";
		if($this->spArgs('type'))
		{
		    $type = tagEncodeParse($this->spArgs('type'));
			$this->type= strreplaces($type);
		}
        $page=$this->spArgs('page',1);
		$index=$page-1;
		
		
		if($type =="all")
		{
			 $this->pager =  $this->getModel('lost')->pagerHtml($page, 15,"lost",array('flag'=>2),$c='outservice',$a='find');
		}else 
		{
			 $this->pager =  $this->getModel('lost')->pagerHtml($page, 15,"lost",array('type'=>$type,'flag'=>2),$c='outservice',$a='find',array('type'=>$type));
		}
     	$this->losts= $this->getModel("lost")->getlostType($type,15,2,$index);

		  $this->title = '招领信息';
	      $this->CurrentModule='find';
		  $this->display('find.html');
	}
public function add()
{
		if($this->spArgs('id'))
		{
			if(islogin())
			{
				$oid=$this->spArgs('id');
				$gettwo=$this->getNotORM()->coll(array('user_id'=>$_SESSION['uid'],'type'=>'service','object_id'=>$oid));
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
					$temptwo=$this->getNotORM()->service[$oid];
					$title=$temptwo['title'];
			
				$coll=array();
			$coll['user_id']=$_SESSION['uid'];
			$coll['title']=$title;
			$coll['type']='service';
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
     public function work()
     {
     	$uid=0;
     	if(islogin())
     	{
     		$uid=$_SESSION['uid'];
     	}
     	
     	   $this->CurrentModule='work';
     		$page=$this->spArgs('page',1);
			$index=$page-1;
			$service=$this->getModel('service')->getServices($uid,25,2,$index);
          $this->pager =  $this->getModel('service')->pagerHtml($page, 15,"service",array('flag'=>2,'end'=>0),$c='outservice',$a='work');
     	$this->work=$service['services'];
     	
          $this->display('work.html');
     	      	
     }
	  public function  side()
	  {
	  	$uid=0;
     	if(islogin())
     	{
     		$uid=$_SESSION['uid'];
     	}
     	$servicetemp=$this->getModel('service')->getServices($uid,20,3,0);
     	$pagecount=$servicetemp['pagecount'];
     			$page=$this->spArgs('page',1);
	  	if($page>=$pagecount)
    	{
    		$page=1;
    	}

		$index=$page-1;
    	$service=$this->getModel('service')->getServices($uid,20,3,$index);

    
      	$this->CurrentModule='side';
		$this->page=$page;
		$this->data = $service['services'];

		$this->display('waterfall.html');
	

	  }

      public function news()
      {
      	     
      	      	
      	      		  	$uid=0;
     	if(islogin())
     	{
     		$uid=$_SESSION['uid'];
     	}
     	

     		$page=$this->spArgs('page',1);
			$index=$page-1;
			$service=$this->getModel('service')->getServices($uid,25,4,$index);
          $this->pager =  $this->getModel('service')->pagerHtml($page, 15,"service",array('flag'=>4,'end'=>0),$c='outservice',$a='news');
     	$this->work=$service['services'];
     		 	$this->CurrentModule='news';
          $this->display('news.html');
      }
}