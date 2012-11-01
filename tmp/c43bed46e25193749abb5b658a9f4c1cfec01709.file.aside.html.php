<?php /* Smarty version Smarty-3.0.6, created on 2012-10-25 18:04:40
         compiled from "C:\wamp\www\m/tpl\theme/default/aside.html" */ ?>
<?php /*%%SmartyHeaderCode:1971150890eb8afa6d7-49833973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c43bed46e25193749abb5b658a9f4c1cfec01709' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\theme/default/aside.html',
      1 => 1351159477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1971150890eb8afa6d7-49833973',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
  <div id="menu">
     <div><img src="<?php echo avatar(array('uid'=>$_smarty_tpl->getVariable('uid')->value,'size'=>'b'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" /></div>

     
     <?php if ($_smarty_tpl->getVariable('isfollow')->value==1){?>
    	 <a href="javascript:void(0)" onclick="follows('<?php echo $_smarty_tpl->getVariable('uid')->value;?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'follows'),$_smarty_tpl);?>
')">您已关注,取消</a>
     <?php }elseif($_smarty_tpl->getVariable('isfollow')->value==0){?>
     <a href="javascript:void(0)" onclick="follows('<?php echo $_smarty_tpl->getVariable('uid')->value;?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'follows'),$_smarty_tpl);?>
')">关注作者</a>
     <?php }?>
     
     <?php if ($_SESSION['uid']!=$_smarty_tpl->getVariable('user')->value['uid']){?>   <a href="javascript:void(0)" onClick="sendpm(<?php echo $_smarty_tpl->getVariable('uid')->value;?>
)">发送留言</a> <?php }?>
      <?php if ($_smarty_tpl->getVariable('user')->value['latestonline']){?> <a href="javascript:void(0)">最近登录: <?php echo ybtime(array('time'=>$_smarty_tpl->getVariable('user')->value['latestonline']),$_smarty_tpl);?>
</a><?php }?>
       <a href="javascript:void(0)">来自  <?php echo $_smarty_tpl->getVariable('user')->value['school'];?>
<?php echo $_smarty_tpl->getVariable('user')->value['college'];?>
<?php echo $_smarty_tpl->getVariable('user')->value['grade'];?>
</a>
    </div>
    
 	<div class="title"><?php echo $_smarty_tpl->getVariable('username')->value;?>
的关注(<?php echo $_smarty_tpl->getVariable('follow')->value['count'];?>
)</div>
    
    
    <div class="follow">
    <?php  $_smarty_tpl->tpl_vars['da'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('follow')->value['fs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['da']->key => $_smarty_tpl->tpl_vars['da']->value){
?>
       <a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['da']->value['userid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['da']->value['name'];?>
"> 
       <img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['da']->value['userid'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['da']->value['tome']['name'];?>
" style="max-width:40px" /></a>
    <?php }} ?>
    </div>
    
     	<div class="title"><?php echo $_smarty_tpl->getVariable('username')->value;?>
的粉丝(<?php echo $_smarty_tpl->getVariable('myLook')->value['count'];?>
)</div>
    
    
    <div class="follow">
    <?php  $_smarty_tpl->tpl_vars['da'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('myLook')->value['fs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['da']->key => $_smarty_tpl->tpl_vars['da']->value){
?>
       <a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['da']->value['userid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['da']->value['name'];?>
"> 
       <img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['da']->value['userid'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['da']->value['tome']['name'];?>
" style="max-width:40px" /></a>
    <?php }} ?>
    </div>
    