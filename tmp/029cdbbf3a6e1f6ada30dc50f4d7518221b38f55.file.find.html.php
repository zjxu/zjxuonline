<?php /* Smarty version Smarty-3.0.6, created on 2012-10-31 16:12:35
         compiled from "C:\wamp\www\m/tpl\find.html" */ ?>
<?php /*%%SmartyHeaderCode:185015090dd7351b846-32873751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '029cdbbf3a6e1f6ada30dc50f4d7518221b38f55' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\find.html',
      1 => 1351671146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185015090dd7351b846-32873751',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('titlepre',$_smarty_tpl->getVariable('tagname')->value);$_template->assign('gallery','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>



<div id="article">
<?php if (is_array($_smarty_tpl->getVariable('twos')->value)){?>
<h1 style="margin:15px 0px"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'two','a'=>'type','type'=>$_smarty_tpl->getVariable('type')->value,'flag'=>1),$_smarty_tpl);?>
"  <?php if ($_smarty_tpl->getVariable('flag')->value==1){?> class="current" <?php }?>><?php echo $_smarty_tpl->getVariable('dtype')->value;?>
</a>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'two','a'=>'type','type'=>$_smarty_tpl->getVariable('type')->value,'flag'=>2),$_smarty_tpl);?>
"  <?php if ($_smarty_tpl->getVariable('flag')->value==2){?> class="current" <?php }?>><?php echo $_smarty_tpl->getVariable('dothertype')->value;?>
</a>
<a href="javascript:void(0)" onclick="addMytag('<?php echo $_smarty_tpl->getVariable('tagname')->value;?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'addMytag'),$_smarty_tpl);?>
')" id="flowTag">发布二手信息</a>
</h1>
<?php }?>
<div id="feedArea">
<?php $_template = new Smarty_Internal_Template("require_find.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('data',$_smarty_tpl->getVariable('losts')->value);$_template->assign('limits',4); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>




<div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div>



</div>




<div id="aside">
   <?php $_template = new Smarty_Internal_Template("require_sider.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('in_tagindex',true); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>