<?php /* Smarty version Smarty-3.0.6, created on 2012-11-01 10:31:10
         compiled from "C:\wamp\www\m/tpl\user_mylikes.html" */ ?>
<?php /*%%SmartyHeaderCode:139375091deee8c1096-48167411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ad1f401f517cebbf7171ffeffb28773dbe72ee6' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\user_mylikes.html',
      1 => 1351691516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139375091deee8c1096-48167411',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('gallery','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div id="article">
<h1>我的收藏&nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mylikes'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_waimai')->value;?>
>外卖</a><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mypost','lost'=>'yes'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_lost')->value;?>
>二手</a><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mylikes','work'=>'yes'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_work')->value;?>
>兼职</a><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mylikes','new'=>'yes'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_new')->value;?>
>资讯</a><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mypost','find'=>'yes'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_find')->value;?>
>周边</a></h1>
  
  
    
  
  <?php if ($_smarty_tpl->getVariable('posttype')->value=='work'){?>
   <?php $_template = new Smarty_Internal_Template("require_works.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('data',$_smarty_tpl->getVariable('data')->value);$_template->assign('limits','all'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
  <?php }?>
    <?php if ($_smarty_tpl->getVariable('posttype')->value=='new'){?>
   <?php $_template = new Smarty_Internal_Template("require_news.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('data',$_smarty_tpl->getVariable('data')->value);$_template->assign('limits','all'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
  <?php }?>
    <?php if ($_smarty_tpl->getVariable('posttype')->value=='lost'){?>
   <?php $_template = new Smarty_Internal_Template("require_losts.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('data',$_smarty_tpl->getVariable('losts')->value);$_template->assign('limits','all'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
  <?php }?>
  <div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div>    
</div>




          
          
<div id="aside">
   <?php $_template = new Smarty_Internal_Template("require_sider.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>