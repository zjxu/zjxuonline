<?php /* Smarty version Smarty-3.0.6, created on 2012-10-31 21:08:09
         compiled from "C:\wamp\www\m/tpl\user_mypost.html" */ ?>
<?php /*%%SmartyHeaderCode:20069509122b9372042-18650491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7c0f243497f11707ab448d3d003770ee4971cc3' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\user_mypost.html',
      1 => 1351688866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20069509122b9372042-18650491',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('gallery','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div id="article">
<h1>我的发布&nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mypost'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_index')->value;?>
>二手</a><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mypost','lost'=>'yes'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_lost')->value;?>
>寻物</a><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mypost','find'=>'yes'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_find')->value;?>
>招领</a></h1>
  
  
    
  
  <?php if ($_smarty_tpl->getVariable('posttype')->value=='two'){?>
   <?php $_template = new Smarty_Internal_Template("require_two.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('data',$_smarty_tpl->getVariable('two')->value);$_template->assign('limits','all'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
  <?php }?>
    <?php if ($_smarty_tpl->getVariable('posttype')->value=='find'){?>
   <?php $_template = new Smarty_Internal_Template("require_finds.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('data',$_smarty_tpl->getVariable('finds')->value);$_template->assign('limits','all'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
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