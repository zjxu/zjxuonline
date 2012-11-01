<?php /* Smarty version Smarty-3.0.6, created on 2012-10-04 20:42:37
         compiled from "C:\wamp\www\yunbian/tpl\admin/header.html" */ ?>
<?php /*%%SmartyHeaderCode:1938506d843de518d1-34960283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48514970721427c5b6489a22d5a14401689a640a' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\admin/header.html',
      1 => 1320992178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1938506d843de518d1-34960283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>yunbian - Administrator Control panel</title>
<script>var urlpath = '<?php echo $_smarty_tpl->getVariable('url')->value;?>
'</script> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/dialog/dialog.js?skin=mac"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/dialog/dialogTools.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/admin/style/global.js"></script>

<link href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/admin/style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrap">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="137"><img src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/admin/style/logo.png" width="173" height="87" alt="yunbian os" /></td>
      <td class="menuline"><div class="menu">
          <ul>
            <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'index'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->getVariable('curr_index')->value;?>
>首页</a></li>
            <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'system'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->getVariable('curr_system')->value;?>
>系统管理</a> </li>
            <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'blog'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->getVariable('curr_blog')->value;?>
>内容管理</a> </li>
            <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'user'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->getVariable('curr_user')->value;?>
>用户管理</a></li>
            <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'theme'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->getVariable('curr_theme')->value;?>
>主题管理</a></li>
            <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'database'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->getVariable('curr_database')->value;?>
>数据管理</a></li>
            <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main'),$_smarty_tpl);?>
">返回首页</a></li>
          </ul>
        </div></td>
    </tr>
  </table>
 
   <?php if (isset($_smarty_tpl->getVariable('get',null,true,false)->value['ac'])){?> <script>showprccmsg('<?php echo $_smarty_tpl->getVariable('get')->value['ac'];?>
')</script> <?php }?>