<?php
class ActiveModel extends Model
{
	
	public function getMyActives($pageSize,$uid,$pageIndex,$workid)
	{
		$activelist=array();
		$pattern_src = "/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i";
		$pageIndex=(int)$pageIndex;
		$pageSize=(int)$pageSize;
		$begin=$pageIndex*$pageSize;
		/*
		 *
		 <id>1045525</id>       <portrait>http://static.oschina.net/uploads/user/100/200439_50.jpg</portrait>
		 <author><![CDATA[郑友想]]></author>
		 <authorid>200439</authorid>
		 <catalog>3</catalog>
		 <objecttype>100</objecttype>
		 <objectcatalog>0</objectcatalog>
		 <objecttitle><![CDATA[]]></objecttitle>
		 <appclient>1</appclient>
		 <url></url>
		 <objectID>1045525</objectID>
		 message><![CDATA[终于出来了 OSCHINA Android 客户端]]></message>
		 <commentCount>0</commentCount>
		 <pubDate>2012-08-31 10:08:25</pubDate>
		 <tweetimage></tweetimage>
		 */
		$user=$this->orm->user[$uid]->getRow();
		$sql="SELECT tweet.id as id,3 as otype,
tweet.appclient as appclient ,tweet.body as message ,tweet.commentcount as
commentCount,tweet.pubdate as pubdate,3 as type
from tweet
where tweet.user_id=:uid
UNION
SELECT comm.id as id ,comm.catalog as otype,
comm.appclient as appclient,comm.content as message, 0 as commentCount,
comm.pubdate as pubdate ,2 as type
from comm
where comm.user_id=:uid
UNION
SELECT two.id as id ,4 as otype,
two.appclient as appclient,two.title as message, 0 as commentCount,
two.pubdate as pubdate ,4 as type
from two
where two.user_id=:uid
ORDER BY pubdate desc
LIMIT $begin,  $pageSize";
		$param=array("uid"=>$uid);
			
	//	$activeuser=$this->orm->tweet("user_id",$uid);
		$activeout=$this->orm->JJDAO->preareAndFetch($sql,$param);
		$count=count($activeout);
		for($i=0;$i<$count;$i++)
		{
			//<portrait>http://static.oschina.net/uploads/user/100/200439_50.jpg</portrait>
			//<author><![CDATA[郑友想]]></author>
			//<authorid>200439</authorid>
			$activeout[$i]['face']=$user['portrait'];
			$activeout[$i]['author']=$user['uname'];
			$activeout[$i]['authorid']=$user['id'];
			$body=preg_replace($pattern_src,"",	$activeout[$i]['message']);
			$body=str_replace("</img>", "", $body);
			if( 	$body==null|| $body=="")	$body="<无文本内容>";
			$activeout[$i]['message']=$body;
			$type=$activeout[$i]['type'];
			$otitle="";
			$oid=0;
			
			if($type==3)//动弹
			{
				$oid=$activeout[$i]['id'];

			}elseif ($type==2)//评论
			{
				$otype=$activeout[$i]['otype'];
				if($otype==3)//动弹评论
				{
					$pattern_src = "/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i";
					$com=$this->orm->comm[$activeout[$i]['id']]->getRow();
					$oid=$com['tweet_id'];
					$otitle=$this->orm->tweet[$oid]['body'];
					$otitle=preg_replace($pattern_src,"",$otitle);
					$otitle=str_replace("</img>", "", $otitle);
					if( $otitle==null|| $otitle=="") $otitle="<无文本内容>";

				}
			}elseif ($type==4)//two
			{
				$oid=$activeout[$i]['id'];
				$two=$this->orm->two[$oid]->getRow();
				$activeout[$i]['two']=$two;
				$workutil=new WorkIdUtil();
		       $uid=$workutil->getUid($workid);
			  if($uid!=null)
		    {
	
		    	if($this->orm->coll(array('user_id'=>$uid,'type'=>'two','object_id'=>$oid))->count()>0)
		    	{
		    	
		    			$activeout[$i]['two']['coll']=1;
		    	}else 
		    	{
		    		$activeout[$i]['two']['coll']=0;
		    	}
		    }else 
		    {
		    	$activeout[$i]['two']['coll']=0;
		    }
				
			}
			$activeout[$i]['oid']=$oid;
			$activeout[$i]['otitle']=$otitle;
		}
		$pageSize=$count;
		$activelist["actives"]=$activeout;
		$activelist["activecount"]=$count;
		$activelist["pagesize"]=$pageSize;
		return $activelist;
	}
	
	public function getActives(&$pageSize,$uid,$pageIndex,$workid)
	{
		$pattern_src = "/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i";
		$pageIndex=(int)$pageIndex;
		$pageSize=(int)$pageSize;
		$begin=$pageIndex*$pageSize;
		/*
		 *
		 <id>1045525</id>       <portrait>http://static.oschina.net/uploads/user/100/200439_50.jpg</portrait>
		 <author><![CDATA[郑友想]]></author>
		 <authorid>200439</authorid>
		 <catalog>3</catalog>
		 <objecttype>100</objecttype>
		 <objectcatalog>0</objectcatalog>
		 <objecttitle><![CDATA[]]></objecttitle>
		 <appclient>1</appclient>
		 <url></url>
		 <objectID>1045525</objectID>
		 message><![CDATA[终于出来了 OSCHINA Android 客户端]]></message>
		 <commentCount>0</commentCount>
		 <pubDate>2012-08-31 10:08:25</pubDate>
		 <tweetimage></tweetimage>
		 */
		$user=$this->orm->user[$uid]->getRow();
		$sql="SELECT tweet.id as id,3 as otype,
tweet.appclient as appclient ,tweet.body as message ,tweet.commentcount as
commentCount,tweet.pubdate as pubdate,3 as type
from tweet
where tweet.user_id=:uid
UNION
SELECT comm.id as id ,comm.catalog as otype,
comm.appclient as appclient,comm.content as message, 0 as commentCount,
comm.pubdate as pubdate ,2 as type
from comm
where comm.user_id=:uid
UNION
SELECT two.id as id ,4 as otype,
two.appclient as appclient,two.title as message, 0 as commentCount,
two.pubdate as pubdate ,4 as type
from two
where two.user_id=:uid
ORDER BY pubdate desc
LIMIT $begin,  $pageSize";
		$param=array("uid"=>$uid);
			
		//$activeuser=$this->orm->tweet("user_id",$uid);
		$activeout=$this->orm->JJDAO->preareAndFetch($sql,$param);
		$count=count($activeout);
		for($i=0;$i<$count;$i++)
		{
			//<portrait>http://static.oschina.net/uploads/user/100/200439_50.jpg</portrait>
			//<author><![CDATA[郑友想]]></author>
			//<authorid>200439</authorid>
			$activeout[$i]['face']=$user['portrait'];
			$activeout[$i]['author']=$user['uname'];
			$activeout[$i]['authorid']=$user['id'];
			$body=preg_replace($pattern_src,"",	$activeout[$i]['message']);
			$body=str_replace("</img>", "", $body);
			if( 	$body==null|| $body=="")	$body="<无文本内容>";
			$activeout[$i]['message']=$body;
			$type=$activeout[$i]['type'];
			$otitle="";
			$oid=0;
			
			if($type==3)//动弹
			{
				$oid=$activeout[$i]['id'];

			}elseif ($type==2)//评论
			{
				$otype=$activeout[$i]['otype'];
				if($otype==3)//动弹评论
				{
					$pattern_src = "/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i";
					$com=$this->orm->comm[$activeout[$i]['id']]->getRow();
					$oid=$com['tweet_id'];
					$otitle=$this->orm->tweet[$oid]['body'];
					$otitle=preg_replace($pattern_src,"",$otitle);
					$otitle=str_replace("</img>", "", $otitle);
					if( $otitle==null|| $otitle=="") $otitle="<无文本内容>";

				}
			}elseif ($type==4)//two
			{
				$oid=$activeout[$i]['id'];
				$two=$this->orm->two[$oid]->getRow();
				$activeout[$i]['two']=$two;
				$workutil=new WorkIdUtil();
		       $uid=$workutil->getUid($workid);
			  if($uid!=null)
		    {
	
		    	if($this->orm->coll(array('user_id'=>$uid,'type'=>'two','object_id'=>$oid))->count()>0)
		    	{
		    	
		    			$activeout[$i]['two']['coll']=1;
		    	}else 
		    	{
		    		$activeout[$i]['two']['coll']=0;
		    	}
		    }else 
		    {
		    	$activeout[$i]['two']['coll']=0;
		    }
				
			}
			$activeout[$i]['oid']=$oid;
			$activeout[$i]['otitle']=$otitle;
		}
		$pageSize=$count;
		return $activeout;
	}
}