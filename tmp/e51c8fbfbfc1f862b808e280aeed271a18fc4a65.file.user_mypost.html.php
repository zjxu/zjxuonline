<?php /* Smarty version Smarty-3.0.6, created on 2012-10-05 09:10:56
         compiled from "C:\wamp\www\yunbian/tpl\user_mypost.html" */ ?>
<?php /*%%SmartyHeaderCode:16048506e33a097f4f7-74986745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e51c8fbfbfc1f862b808e280aeed271a18fc4a65' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\user_mypost.html',
      1 => 1320733684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16048506e33a097f4f7-74986745',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('gallery','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div id="article">
<h1><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mypost'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_index')->value;?>
>我发布的</a><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mypost','draft'=>'yes'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_draft')->value;?>
>草稿</a></h1>
     <?php $_template = new Smarty_Internal_Template("require_feeds.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('data',$_smarty_tpl->getVariable('blogs')->value);$_template->assign('limits','all'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
  <div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div>    
</div>




          
          
<div id="aside">
   <?php $_template = new Smarty_Internal_Template("require_sider.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>