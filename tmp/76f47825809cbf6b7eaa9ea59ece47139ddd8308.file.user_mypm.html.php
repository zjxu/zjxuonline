<?php /* Smarty version Smarty-3.0.6, created on 2012-10-26 19:44:29
         compiled from "C:\wamp\www\m/tpl\user_mypm.html" */ ?>
<?php /*%%SmartyHeaderCode:23166508a779d120f33-03163672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f47825809cbf6b7eaa9ea59ece47139ddd8308' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\user_mypm.html',
      1 => 1351251845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23166508a779d120f33-03163672',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('loadedit','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div id="article">
<h1><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'pm'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_my_notice')->value;?>
>我的留言</a></h1>
<div id="message" style="margin: 0"><?php if ($_smarty_tpl->getVariable('islook')->value){?>
<h2>与 <?php echo $_smarty_tpl->getVariable('foruser')->value['uname'];?>
 对话中 - <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'pm'),$_smarty_tpl);?>
">返回留言</a></h2>

 <script>


</script> 

<form id="postpm" method="post" style="margin-top: 15px">
<table width="580" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><img src="<?php echo avatar(array('uid'=>$_SESSION['uid'],'size'=>'m'),$_smarty_tpl);?>
"
			alt="<?php echo $_SESSION['username'];?>
" align="absmiddle" /></td>
		<td><input name="uid" type="hidden" value="<?php echo $_smarty_tpl->getVariable('foruser')->value['id'];?>
" />
		<textarea name="info" id="info"
			class="xheditor {tools:'smallmail'}"
			style="width: 100%; height: 100px"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><span id="submit_tip"
			style="display: none">正在发送...</span> <input name="submit"
			type="button" id="submit_button" class="blue-button submit"
			value="发送留言" onclick="doPmSubmit();" tabindex="4" />&nbsp;</td>
	</tr>
</table>








<br />
</form>

<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('read')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
<div class="article" id="notice_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
<div class="delnotice"></div>
<?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']!=$_SESSION['uid']){?>
<div>

<div class="facearea"><a
	href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id']),$_smarty_tpl);?>
"
	title="<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
" target="_blank"> <img
	src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
"
	align="absmiddle" class="face" /> </a></div>

<p><a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id']),$_smarty_tpl);?>
"
	title="<?php echo $_smarty_tpl->tpl_vars['d']->value['user']['username'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
</a>
<?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['pubdate']),$_smarty_tpl);?>
 回复我</p>
<p class="info"><?php echo replay_preg(array('msg'=>$_smarty_tpl->tpl_vars['d']->value['content']),$_smarty_tpl);?>
</p>
<p align="right"> <a href="javascript:void(0)"
	onClick="delnotice('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'delmess','id'=>$_smarty_tpl->tpl_vars['d']->value['id']),$_smarty_tpl);?>
')">删除</a>
</p>
</div>
<?php }else{ ?>

<div>

<div class="facearea" style="float: right"><a
	href="<?php echo goUserHome(array('uid'=>$_SESSION['uid']),$_smarty_tpl);?>
" title="<?php echo $_SESSION['uname'];?>
"
	target="_blank"> <img src="<?php echo avatar(array('uid'=>$_SESSION['uid'],'size'=>'m'),$_smarty_tpl);?>
"
	alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['user']['username'];?>
" align="absmiddle" class="face" /> </a></div>



<p><a href="<?php echo goUserHome(array('uid'=>$_SESSION['uid']),$_smarty_tpl);?>
" title="<?php echo $_SESSION['uname'];?>
"
	target="_blank">我</a> <?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['pubdate']),$_smarty_tpl);?>
 发出</p>
<p class="info"><?php echo replay_preg(array('msg'=>$_smarty_tpl->tpl_vars['d']->value['content']),$_smarty_tpl);?>
</p>
<p align="left"><a href="javascript:void(0)"
	onClick="delnotice('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'delmess','id'=>$_smarty_tpl->tpl_vars['d']->value['id']),$_smarty_tpl);?>
')">删除</a>

</p>
</div>
<?php }?></div>
<?php }} ?> <?php }else{ ?>

<h2>留言 <?php if ($_smarty_tpl->getVariable('pmCount')->value){?> (<?php echo $_smarty_tpl->getVariable('pmCount')->value;?>
) <?php }?></h2>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mypm')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>

<div class="article" id="notice_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
<div class="delnotice"></div>
<div>
<div class="facearea"><a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['friendid']),$_smarty_tpl);?>
"
	title="<?php echo $_smarty_tpl->tpl_vars['d']->value['friendname'];?>
" target="_blank"> <img
	src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['friendid'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['friendname'];?>
"
	align="absmiddle" class="face" /> </a></div>
<p>与<a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['friendid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['friendname'];?>
"
	target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['friendname'];?>
</a> 对话<?php echo $_smarty_tpl->tpl_vars['d']->value['user']['uid'];?>
<?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['pubDate']),$_smarty_tpl);?>
 - 共<?php echo $_smarty_tpl->tpl_vars['d']->value['messageCount'];?>
条</p>

<p class="info"><?php echo $_smarty_tpl->tpl_vars['d']->value['sender'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['content'];?>
</p>
<p align="right"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'pm','look'=>$_smarty_tpl->tpl_vars['d']->value['friendid']),$_smarty_tpl);?>
">查看上下文</a>/
<a href="javascript:void(0)" onclick="sendpm(<?php echo $_smarty_tpl->tpl_vars['d']->value['friendid'];?>
)">回复</a></p>
</div>
</div>
<?php }} else { ?> <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('usdpm')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>

<div class="article" id="notice_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
<div class="delnotice"></div>
<div>
<div class="facearea"><a
	href="<?php echo goUserHome(array('domain'=>$_smarty_tpl->tpl_vars['d']->value['user']['domain'],'uid'=>$_smarty_tpl->tpl_vars['d']->value['uid']),$_smarty_tpl);?>
"
	title="<?php echo $_smarty_tpl->tpl_vars['d']->value['user']['username'];?>
" target="_blank"> <img
	src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['uid'],'size'=>'middle'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['tome']['username'];?>
"
	align="absmiddle" class="face" /> </a></div>
<p>与<a href="<?php echo goUserHome(array('domain'=>$_smarty_tpl->tpl_vars['d']->value['domain'],'uid'=>$_smarty_tpl->tpl_vars['d']->value['uid']),$_smarty_tpl);?>
"
	title="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
</a>
对话<?php echo $_smarty_tpl->tpl_vars['d']->value['user']['uid'];?>
<?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['time']),$_smarty_tpl);?>
 - 共<?php echo $_smarty_tpl->tpl_vars['d']->value['fcount'];?>
条</p>
<p class="info"><?php echo replay_preg(array('msg'=>$_smarty_tpl->tpl_vars['d']->value['info']),$_smarty_tpl);?>
</p>
<p align="right"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'pm','look'=>$_smarty_tpl->tpl_vars['d']->value['uid']),$_smarty_tpl);?>
">查看上下文</a>
/ <a href="javascript:void(0)" onclick="sendpm(<?php echo $_smarty_tpl->tpl_vars['d']->value['uid'];?>
)">回复</a></p>
</div>
</div>
<?php }} else { ?>
<div class="content">暂时没留言</div>

<?php } ?> <?php } ?> <?php }?>




<div class="clear"></div>
</div>


<footer class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</footer></div>






<div id="aside"><?php $_template = new Smarty_Internal_Template("require_sider.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
