<?php
/**
 * JJPHP 模型的基础类主要对数据库的操作
 * @package  comm
 * @author     zhuli <www.initphp.com>
 * @author     zhengyouxiangxiang <zhengyouxiang00@gmail.com>
 * @copyright   www.111work.com
 */
class Model extends JJBase
{
	
	
	protected $pageData;

		/**获取html版本的分页**/
	
	/*进行页码截断*/
	private function makepage($pager, $offset = 4) //这里的$offset表示当前页的左右偏移量
	{
		$start = 1;
		$end = $offset * 2+1;
		if ($pager['current_page'] > $offset)
		{
			$start = $pager['current_page'] - $offset;
			$end = $pager['current_page'] + $offset;
		}
		if ($end > $pager['total_page'])
		{
			$start = $pager['total_page'] - $offset * 2;
			$end = $pager['total_page'];
		}

		if ($start < 1) $start = 1;
		return array_slice($pager['all_pages'], $start - 1, $end - $start+1, true);
	}
	
	
	
	
	
	public function pagerHtml($page, $pageSize,$table,$where,$c='main',$a='index',$filter = array())
	{
			 $pager =$this->runpager( $page,$pageSize,$table,$where);
		 $pages = $this->makepage($pager); //获得截断的pages
		 $pageHtml = Null;

		

		if($pager)
		{
			//显示头部
			if($pager['current_page'] != $pager['first_page'])
			{
				$pageHtml .= '<a href="'.spUrl($c,$a, array_merge(array('page'=>$pager['first_page']),$filter)).'">&laquo; 第一页</a>
						<a href="'.spUrl($c,$a,array_merge(array('page'=>$pager['prev_page']),$filter)).'">&laquo; 上一页</a>';
			}

			//显示中间
			 foreach($pages as $thepage)
			 {
				 	if($thepage != $pager['current_page'])
							{
								$pageHtml .= '<a href="'.spUrl($c,$a,array_merge(array('page'=>$thepage),$filter)).'" class="number">'.$thepage.'</a> ';
							}else{
								$pageHtml .= '<a href="javascript:void(0)" class="number current"><b>'.$thepage.'</b></a>';
							}
			 }

			 //显示尾页
				if($pager['current_page'] != $pager['last_page'])
				{
					$pageHtml .= '<a href="'.spUrl($c,$a,array_merge(array('page'=>$pager['next_page']),$filter)).'">下一页 &raquo;</a>
										<a href="'.spUrl($c,$a,array_merge(array('page'=>$pager['last_page']),$filter)).'">尾页 &raquo;</a>';
				}
					//$pageHtml .=  $pager['total_count'].'/'.$pager['total_page'].'/'.$pager['page_size'];
		 }

		 return $pageHtml;

	}
	
	
	
	
	//pagerAjax('blog','getReplay',array('tweet_id'=>$id),'commentList_'.$id);
	public function pagerAjax($page, $pageSize,$table,$where,$c='main',$a='index',$filter = array(),$runarea='')
	{
		 $pager =$this->runpager( $page,$pageSize,$table,$where);
		 $pages = $this->makepage($pager); //获得截断的pages
		 $pageHtml = Null;

		if($pager)
		{
			//显示头部
			if($pager['current_page'] != $pager['first_page'])
			{
				$url = spUrl($c,$a, array_merge(array('page'=>$pager['first_page']),$filter));
				$next = spUrl($c,$a,array_merge(array('page'=>$pager['prev_page']),$filter));

				$pageHtml .= '<a href="javascript:void(0)" onclick="runpage(\''.$url.'\',\''.$runarea.'\')">&laquo; 第一页</a>
						<a href="javascript:void(0)" onclick="runpage(\''.$next.'\',\''.$runarea.'\')">&laquo; 上一页</a>';
			}

			//显示中间
		
			 foreach($pages as $thepage)
			 {
				 	if($thepage != $pager['current_page'])
							{
								$url = spUrl($c,$a,array_merge(array('page'=>$thepage),$filter));
								$pageHtml .= '<a href="javascript:void(0)" onclick="runpage(\''.$url.'\',\''.$runarea.'\')" class="number">'.$thepage.'</a> ';
							}else{
								$pageHtml .= '<a href="javascript:void(0)" class="number current"><b>'.$thepage.'</b></a>';
							}
			 }

			 //显示尾页
				if($pager['current_page'] != $pager['last_page'])
				{
					$next = spUrl($c,$a,array_merge(array('page'=>$pager['next_page']),$filter));
					$end = spUrl($c,$a,array_merge(array('page'=>$pager['last_page']),$filter));

					$pageHtml .= '<a href="javascript:void(0)" onclick="runpage(\''.$next.'\',\''.$runarea.'\')">下一页 &raquo;</a>
										<a href="javascript:void(0)" onclick="runpage(\''.$end.'\',\''.$runarea.'\')">尾页 &raquo;</a>';
				}
					//$pageHtml .=  $pager['total_count'].'/'.$pager['total_page'].'/'.$pager['page_size'];
		 }

		 return $pageHtml;

	}
	private function runpager( $page,$pageSize,$table,$where){
		$this->pageData = null;
		$total_count=$this->orm->$table($where)->count();
		if($total_count > $pageSize){
			$total_page = ceil( $total_count / $pageSize );

			$page = min(intval(max($page, 1)), $total_count); // 对页码进行规范运算
			
			$this->pageData = array(
				"total_count" => $total_count,                                 // 总记录数
				"page_size"   => $pageSize,                                    // 分页大小
				"total_page"  => $total_page,                                  // 总页数
				"first_page"  => 1,                                            // 第一页
				"prev_page"   => ( ( 1 == $page ) ? 1 : ($page - 1) ),         // 上一页
				"next_page"   => ( ( $page == $total_page ) ? $total_page : ($page + 1)),     // 下一页
				"last_page"   => $total_page,                                  // 最后一页
				"current_page"=> $page,                                        // 当前页
				"all_pages"   => array()	                                   // 全部页码
			);
		}
					for($i=1; $i <= $total_page; $i++)$this->pageData['all_pages'][] = $i;
		return $this->pageData;
	}
	
	
	
	
	
	
	//NotOrm的一个实例
	protected $orm;
	/**
	 * 填充orm
	 * 构造函数
	 */
	public function __construct()
	{
		$this->orm=$this->getNotORM();
	}
	/**
	 * SQL组装-组装多条语句插入
	 * 返回：('key') VALUES ('value'),('value2')
	 * @param array $field 字段
	 * @param array $data  对应的值，array(array('test1'),array('test2'))
	 * @return string
	 */
	public function buildInsertmore($field, $data) {
		$field = ' (' . $this->buildImplode($field, 1) . ') '; //字段组装
		$temp_data = array();
		$data = (array) $data;
		foreach ($data as $val) {
			$temp_data[] = '(' . $this->buildImplode($val) . ')';
		}
		$temp_data = implode(',', $temp_data);
		return $field . ' VALUES ' . $temp_data;
	}
	/**
	 * SQL组装-组装INSERT语句
	 * 返回：('key') VALUES ('value')
	 * @param  array $val 参数  array('key' => 'value')
	 * @return string
	 */
	public function buildInsert($val) {
		if (!is_array($val) || empty($val)) return '';
		$temp_v = '(' . $this->buildImplode($val). ')';
		$val = array_keys($val);
		$temp_k = '(' . $this->buildImplode($val, 1). ')';
		return $temp_k . ' VALUES ' . $temp_v;
	}
	/**
	 * SQL组装-组装UPDATE语句
	 * 返回：SET name = 'aaaaa'
	 * @param  array $val  array('key' => 'value')
	 * @return string `key` = 'value'
	 */
	public function buildUpdate($val) {
		if (!is_array($val) || empty($val)) return '';
		$temp = array();
		foreach ($val as $k => $v) {
			$temp[] = $this->buildKv($k, $v);
		}
		return 'SET ' . implode(',', $temp);
	}
	/**
	 * SQL组装-组装LIMIT语句
	 * 返回：LIMIT 0,10
	 * @param  int $start 开始
	 * @param  int $num   条数
	 * @return string
	 */
	public function buildLimit($start, $num = NULL) {
		$start = (int) $start;
		$start = ($start < 0) ? 0 : $start;
		if ($num === NULL) {
			return 'LIMIT ' . $start;
		} else {
			$num = abs((int) $num);
			return 'LIMIT ' . $start .' ,'. $num;
		}
	}
	/**
	 * SQL组装-组装IN语句
	 * 返回：('1','2','3')
	 * @param  array $val 数组值  例如：ID:array(1,2,3)
	 * @return string
	 */
	public function buildIn($val) {
		$val = $this->buildImplode($val);
		return ' IN (' . $val . ')';
	}

	/**
	 * SQL组装-组装AND符号的WHERE语句
	 * 返回：WHERE a = 'a' AND b = 'b'
	 * @param array $val array('key' => 'val')
	 * @return string
	 */
	public function buildWhere($val) {
		if (!is_array($val) || empty($val)) return '';
		$temp = array();
		foreach ($val as $k => $v) {
			$temp[] = $this->buildKv($k, $v);
		}
		return ' WHERE ' . implode(' AND ', $temp);
	}
	/**
	 * SQL组装-组装KEY=VALUE形式
	 * 返回：`a` = 'a'
	 * @param  string $k KEY值
	 * @param  string $v VALUE值
	 * @return string
	 */
	public function buildKv($k, $v) {
		return $this->buildEscape($k, 1) . ' = ' . $this->buildEscape($v);
	}
	/**
	 * SQL组装-将数组值通过，隔开
	 * 返回：'1','2','3'
	 * @param  array $val   值
	 * @param  int   $iskey 0-过滤value值，1-过滤字段
	 * @return string
	 */
	public function buildImplode($val, $iskey = 0) {
		if (!is_array($val) || empty($val)) return '';
		return implode(',', $this->buildEscape($val, $iskey));
	}
	/**
	 * SQL组装-单个或数组参数过滤
	 * @param  string|array $val
	 * @param  int          $iskey 0-过滤value值，1-过滤字段
	 * @return string
	 */
	public function buildEscape($val, $iskey = 0) {
		if (is_array($val)) {
			foreach ($val as $k => $v) {
				$val[$k] = trim($this->buildEscapeSingle($v, $iskey));
			}
			return $val;
		}
		return $this->buildEscapeSingle($val, $iskey);
	}
	/**
	 * 单个值的SQL过滤
	 * @param  string $val 过滤的值
	 * @param  int    $iskey 0-过滤value值，1-过滤字段
	 * @return string
	 */
	public function buildEscapeSingle($val, $iskey = 0) {
		if ($iskey === 0) {
			if (is_numeric($val)) {
				return " '" . $val . "' ";
			} else {
				return " '" . addslashes(stripslashes($val)) . "' ";
			}
		} else {
			$val = str_replace(array('`', ' '), '', $val);
			return ' `'.addslashes(stripslashes($val)).'` ';
		}
	}
	/**
	 * 防止SQL注入
	 * @param  string $value 需要过滤的值
	 * @return string
	 */
	public function filterSql($value) {
		$sql = array("select", 'insert', "update", "delete", "\'", "\/\*",
						"\.\.\/", "\.\/", "union", "into", "load_file", "outfile");
		$sql_re = array("","","","","","","","","","","","");
		return str_replace($sql, $sql_re, $value);
	}
	/**
	 * 加反斜杠，放置SQL注入
	 * @param  string $value 需要过滤的值
	 * @return string
	 */
	public function filterSlashes($value) {
		if (get_magic_quotes_gpc()) return $value;
		if(!is_array($value))
		{
			return addslashes($value);
		}
		foreach ($value as $key => $val) {
			if (is_array($val)) {
				$this->filterSlashes($value[$key]);
			} else {
				$value[$key] = addslashes($val);
			}
		}
		return $value;
	}
}