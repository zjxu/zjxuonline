<?php /* Smarty version Smarty-3.0.6, created on 2012-10-28 22:04:13
         compiled from "C:\wamp\www\m/tpl\user_myfollow.html" */ ?>
<?php /*%%SmartyHeaderCode:15319508d3b5d927080-29939625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f367abe0dafc16874877da974c90ba5894271d5' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\user_myfollow.html',
      1 => 1351433050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15319508d3b5d927080-29939625',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<?php if ($_smarty_tpl->getVariable('getfollow')->value==1){?>
<div id="article">
 <h1><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'myfollow'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_mefor')->value;?>
>我关注的</a> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'myfollow','follow'=>'me'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_forme')->value;?>
>关注我的</a></h1>    
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('follow')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
  <div class="box" id="myfollow_<?php echo $_smarty_tpl->tpl_vars['d']->value['meto']['uid'];?>
">
     <div class="top">
     	<a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['userid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
" target="_blank"> 
     	<img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['userid'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
" class="face"/></a><span class="jiao"></span>
     </div>
     <div class="header">
       <cite> <a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['userid']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</a></cite>
        <?php echo $_smarty_tpl->tpl_vars['d']->value['from'];?>

     </div>
     

     

     <div class="footer">
     
      <div class="menu">
         <?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['time']),$_smarty_tpl);?>
      
        <?php if ($_smarty_tpl->tpl_vars['d']->value['linker']==1){?> 互相关注<?php }else{ ?><a href="javascript:void(0)" onclick="follows('<?php echo $_smarty_tpl->tpl_vars['d']->value['userid'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'follows'),$_smarty_tpl);?>
')" id="follow_<?php echo $_smarty_tpl->tpl_vars['d']->value['userid'];?>
">加关注</a><?php }?>     
      </div>
        <div class="clear"></div>
     </div>

     
   
    </div>
   <?php }} else { ?>
     <div class="box" id="myfollow_<?php echo $_smarty_tpl->tpl_vars['d']->value['userid'];?>
">
    	 <div class="content">  您还没有关注或还没有人关注您 </div>
    </div>
   <?php } ?> 
    <div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div> 
</div>




<?php }else{ ?>


<div id="article">
 <h1><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'myfollow'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_mefor')->value;?>
>我关注的</a> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'myfollow','follow'=>'me'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_forme')->value;?>
>关注我的</a></h1>    
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('follow')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
  <div class="box" id="myfollow_<?php echo $_smarty_tpl->tpl_vars['d']->value['tome']['uid'];?>
">
     <div class="top">

     	       	<a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['userid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
" target="_blank"> 
     	<img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['userid'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
" class="face"/></a><span class="jiao"></span>
     </div>
     <div class="header">
       <cite> <a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['userid']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</a></cite>
       <?php echo $_smarty_tpl->tpl_vars['d']->value['from'];?>

     </div>
     

     

     <div class="footer">
      <div class="menu">
        <?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['time']),$_smarty_tpl);?>
   <?php if ($_smarty_tpl->tpl_vars['d']->value['linker']==1){?>已互相关注<?php }?>   
         <a href="javascript:void(0)" onclick="follows('<?php echo $_smarty_tpl->tpl_vars['d']->value['userid'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'follows'),$_smarty_tpl);?>
')">  取消关注</a> 
      </div>
        <div class="clear"></div>
     </div>

     
   
    </div>
   <?php }} else { ?>
     <div class="box" id="myfollow_<?php echo $_smarty_tpl->tpl_vars['d']->value['tome']['uid'];?>
">
    	 <div class="content">  您还没有关注或还没有人关注您 </div>
    </div>
   <?php } ?> 
    <div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div> 
</div>




<?php }?>




          
          
<div id="aside">
   <?php $_template = new Smarty_Internal_Template("require_sider.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>