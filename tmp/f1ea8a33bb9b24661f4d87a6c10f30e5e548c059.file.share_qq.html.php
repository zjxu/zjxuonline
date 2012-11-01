<?php /* Smarty version Smarty-3.0.6, created on 2012-10-13 15:43:08
         compiled from "C:\wamp\www\m/tpl\share_qq.html" */ ?>
<?php /*%%SmartyHeaderCode:2308550791b8c06e664-67977815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1ea8a33bb9b24661f4d87a6c10f30e5e548c059' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\share_qq.html',
      1 => 1320905796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2308550791b8c06e664-67977815',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<a href="javascript:void(0)" onclick="postToWb('<?php echo $_smarty_tpl->getVariable('sname')->value;?>
发布了内容 <?php echo addslashes($_smarty_tpl->getVariable('stitle')->value);?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'userblog','a'=>'show','domain'=>$_smarty_tpl->getVariable('domain')->value,'bid'=>$_smarty_tpl->getVariable('bid')->value),$_smarty_tpl);?>
');" class="tmblog">
转到微博</a>

<a version="1.0" class="qzOpenerDiv" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_likeurl" target="_blank">赞</a><script  src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20110603&style=3&showcount=1&width=130&height=30" charset="utf-8" defer="defer" ></script>

