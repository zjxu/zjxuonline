<?php
/**
 * JJPHP 视图基本类
 * @package  comm
 * @author     zhuli <www.initphp.com>
 * @author     zhengyouxiangxiang <zhengyouxiang00@gmail.com>
 * @copyright   www.111work.com
 */
class View extends JJBase
{
	public  $variable = array(); //视图变量
	private $templates = array(); //视图存放器
	private $header;
	private $footer;
	/**
	 * 模板-设置模板变量
	 * @param  string  $key   KEY值-模板中的变量名称
	 * @param  string  $value value值
	 * @return array
	 */
	public function assign($key, $value) {
		$this->variable[$key] = $value;
	}
	/**
	 * 设置尾模板..
	 * @param  $footer
	 */
	public function setFooter($footer='footer')
	{
		$this->footer=$footer;
	}
	/**
	 * 设置头模板..
	 * @param  $header
	 */
	public function setHeader($header='header')
	{
		$this->header=$header;
	}
	/**
	 * 设置模板
	 * @param  string  $viewName 模板名称
	 */
	public function setView($viewName) {
		$this->templates[]=$viewName;
	}
	/**
	 * 设置默认模版
	 */
	protected  function returnDefaultDisplayName()
	{
		$contr=$this->getContrNameExceptContr();
		$action=$this->getAction();
		return  $this->returnIncludeViewName($contr,$action);
	}
	/**
	 *return include view下的文件..
	 * @param  $name
	 */
	protected function returnIncludeViewName($contr,$action)
	{
		$contr=strtolower($contr);
		$action=strtolower($action);
		$filename=JJPATH.'/web/view/'.$contr.'/'.$action.'.php';
		if(!$this->fileExists($filename))  throw new JJException('不存在view:  '.$action);
		return $filename;
	}
	protected function returnIncludecommName($name)
	{
	    $name=strtolower($name);
		$filename=JJPATH.'/web/view/comm/'.$name.'.php';
		if(!$this->fileExists($filename))  throw new JJException('不存在view:  '.$name);
		return $filename;
	}
	/**
	 * 模板-显示视图
	 */
	public function display() {
		if (is_array($this->variable)) {
			foreach ($this->variable as $key => $val) {
				$$key = $val;
			}
		}
		if(isset($this->header)) include_once ($this->returnIncludecommName($this->header));
		if(empty($this->templates)) include_once($this->returnDefaultDisplayName());
		foreach ($this->templates as $name) {
			include_once ($this->returnIncludeViewName($this->getContrNameExceptContr(),$name));
	 }
	 if(isset($this->footer)) include_once ($this->returnIncludecommName($this->footer));
	}

}