<?php /* Smarty version Smarty-3.0.6, created on 2012-10-04 22:52:11
         compiled from "C:\wamp\www\yunbian/tpl\require_discovery_user.html" */ ?>
<?php /*%%SmartyHeaderCode:2991506da29b8b5c26-82226014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c4e82813ab54e8839ca862231cbfd9100c3607' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\require_discovery_user.html',
      1 => 1320733684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2991506da29b8b5c26-82226014',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
    <div class="blogitem">
     <div class="clearfix">
    <img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['uid'],'size'=>'middle'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
" class="face"/>
        <h5 class="title">
       <a href="<?php echo goUserHome(array('domain'=>$_smarty_tpl->tpl_vars['d']->value['domain'],'uid'=>$_smarty_tpl->tpl_vars['d']->value['uid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
-<?php echo strip_tags($_smarty_tpl->tpl_vars['d']->value['sign']);?>
" target="_blank"> <?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
</a>
        </h5>
        </div>

<div class="sign"><?php echo strip_tags($_smarty_tpl->tpl_vars['d']->value['sign']);?>
<br/>
TA的标签:<?php echo $_smarty_tpl->tpl_vars['d']->value['blogtag'];?>

</div>
 <div style="clear:both;"> <a href="javascript:void(0)" onclick="follows('<?php echo $_smarty_tpl->tpl_vars['d']->value['uid'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'follows'),$_smarty_tpl);?>
')">关注TA</a> | <?php echo $_smarty_tpl->tpl_vars['d']->value['local'];?>
</div>
<!--<span class="blogitem-new">NEW</span>-->
    </div>
    <?php }} ?>