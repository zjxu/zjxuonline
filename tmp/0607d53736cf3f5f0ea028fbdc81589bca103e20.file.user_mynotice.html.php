<?php /* Smarty version Smarty-3.0.6, created on 2012-10-28 11:16:08
         compiled from "C:\wamp\www\m/tpl\user_mynotice.html" */ ?>
<?php /*%%SmartyHeaderCode:24292508ca378b2b272-12575387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0607d53736cf3f5f0ea028fbdc81589bca103e20' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\user_mynotice.html',
      1 => 1351394162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24292508ca378b2b272-12575387',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div id="article">    
<h1><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mynotice'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_notice')->value;?>
>通知</a>  </h1>
<div id="message" style="margin:0">

<h2>系统通知(<?php echo $_smarty_tpl->getVariable('sysnotice_c')->value;?>
)</h2>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sysnotice')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>

    <div class="article"  id="notice_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
    <div class="delnotice">
       
    </div>
        <div>
           <p>  <?php echo ybtime(array('time'=>strtotime($_smarty_tpl->tpl_vars['d']->value['pubtime'])),$_smarty_tpl);?>
</p>
            <p class="info"><?php echo replay_preg(array('msg'=>$_smarty_tpl->tpl_vars['d']->value['title']),$_smarty_tpl);?>
  
  </p>
       </div>
    </div>
   <?php }} else { ?>

     <div class="content">
           暂时没有系统通知
     </div>

<?php } ?>
<?php if ($_smarty_tpl->getVariable('sysnotice')->value){?> 
    <p class="clear">

      	  <input name="button" type="button" value="知道了" class="btn"  onclick="noticeclear(3)"/>

    </p>
<?php }?>


<h2>留言通知(<?php echo $_smarty_tpl->getVariable('repnotice_c')->value;?>
)</h2>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('repnotice')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>

    <div class="article"  id="notice_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">

        <div><div class="facearea">
       		 <a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['objectid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['objectname'];?>
" target="_blank">
       			 <img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['objectid'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['objectname'];?>
" align="absmiddle" class="face"/>
       		 </a>
        </div>
           <p><a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['objectid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['objectname'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['objectname'];?>
</a> <?php echo ybtime(array('time'=>strtotime($_smarty_tpl->tpl_vars['d']->value['pubtime'])),$_smarty_tpl);?>
</p>
            <p class="info"><?php echo replay_preg(array('msg'=>$_smarty_tpl->tpl_vars['d']->value['title']),$_smarty_tpl);?>
  <a href="<?php echo notice_gomess(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['objectid']),$_smarty_tpl);?>
">查看原文</a></p>
       </div>
    </div>
   <?php }} else { ?>


   
     <div class="content">
           暂时没有评论通知
     </div>

<?php } ?>
<?php if ($_smarty_tpl->getVariable('repnotice')->value){?>  
	<p>
        <?php if ($_smarty_tpl->getVariable('d')->value['isread']==0){?>
        <input name="button" type="button" value="知道了" class="btn"  onclick="noticeclear(1)"/>
        <?php }else{ ?>
        <input name="button" type="button" value="清空" class="btn"  onclick="noticedel(1)"/>
        <?php }?>
	</p>
<?php }?>


<h2>关注通知(<?php echo $_smarty_tpl->getVariable('flownotice_c')->value;?>
)</h2>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('flownotice')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>

    <div class="article fllows"  id="notice_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">

        <div><div class="facearea">
       		 <a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['objectid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['objectname'];?>
" target="_blank">
       			 <img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['objectid'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['objectname'];?>
" align="absmiddle" class="face"/>
       		 </a>
        </div>
           <p><a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['objectid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['objectname'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['objectname'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
 -  <?php echo ybtime(array('time'=>strtotime($_smarty_tpl->tpl_vars['d']->value['pubtime'])),$_smarty_tpl);?>
</p>
            <p class="info">
            <?php if ($_smarty_tpl->tpl_vars['d']->value['info']=='关注了你'){?>关注了你 <a href="javascript:void(0)" onclick="follows('<?php echo $_smarty_tpl->tpl_vars['d']->value['objectid'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'follows'),$_smarty_tpl);?>
')">我也关注TA</a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['d']->value['info']=='取消关注'){?>取消关注了你<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['d']->value['info']=='互相关注'){?>你们互相关注<?php }?>
            
            </p>
       </div>
    </div>
    
   <?php }} else { ?>
     <div class="content">
           暂时没有关注通知
     </div>

<?php } ?>
<?php if ($_smarty_tpl->getVariable('flownotice')->value){?>
    <p class="clear">

      	  <input name="button" type="button" value="知道了" class="btn"  onclick="noticeclear(2)"/>
       
    </p>
<?php }?>




    <div class="clear"></div>
</div>


     <div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div>
</div>




          
          
<div id="aside">
   <?php $_template = new Smarty_Internal_Template("require_sider.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>