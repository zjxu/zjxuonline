<?php /* Smarty version Smarty-3.0.6, created on 2012-10-04 20:12:26
         compiled from "C:\wamp\www\yunbian/tpl\theme/default/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:14454506d7d2a078942-14513798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d44f670912a3505815d763b139a47aef1b58126' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\theme/default/footer.html',
      1 => 1320733684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14454506d7d2a078942-14513798',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\yunbian\init\Drivers\Smarty\plugins\modifier.date_format.php';
?>

<div id="foorer">
<small>Powered by  <a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/<?php echo $_smarty_tpl->getVariable('domain')->value;?>
"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a>&nbsp;&amp;&nbsp;<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('yb')->value['soft'];?>
 <b><?php echo $_smarty_tpl->getVariable('yb')->value['version'];?>
</a>
 2011-<?php echo smarty_modifier_date_format(time(),"%Y");?>
&nbsp;<?php echo $_smarty_tpl->getVariable('yb')->value['site_icp'];?>
<?php echo $_smarty_tpl->getVariable('yb')->value['site_count'];?>
 </small>


</div>
</div>
</div>
</div>
</body>
</html>
