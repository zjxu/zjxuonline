<?php /* Smarty version Smarty-3.0.6, created on 2012-10-26 15:53:45
         compiled from "C:\wamp\www\m/tpl\user_setting.html" */ ?>
<?php /*%%SmartyHeaderCode:30294508a4189ed9250-55461988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb85e455a94753d69d3e8e4f5b4c637bbdf375e0' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\user_setting.html',
      1 => 1351238009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30294508a4189ed9250-55461988',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('addcss','yes');$_template->assign('editor','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="content">
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'savesetting'),$_smarty_tpl);?>
" id="userSetting"
	method="post" enctype="multipart/form-data" target="_parse">
<div id="content">

<div id="main">

<h2 id="title">个人设置</h2>
<div id="pb-post-area">

<div>

<table>
	<tr>
		<td >Email　<input type="text" class="iptname" value="<?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
"
			disabled="disabled"></td>
		<td>用户名　<input type="text" name="niname" id="niname" class="ipt"
			value="<?php echo $_smarty_tpl->getVariable('user')->value['uname'];?>
"></td>
	</tr>
	<tr>
		<td>Q &nbsp;&nbsp;Q　<input type="text" name="qq" id="qq" class="ipt"
			value="<?php echo $_smarty_tpl->getVariable('user')->value['qq'];?>
"></td>
		<td>性&nbsp;&nbsp;&nbsp;&nbsp;别　 男  <input type="radio" name="gender" id="gender1" value="男"
			<?php if ($_smarty_tpl->getVariable('user')->value['gender']=="男"){?>checked="checked"<?php }?> >　 　女  <input
			type="radio" name="gender" id="gender2" value="女" <?php if ($_smarty_tpl->getVariable('user')->value['gender']!="男"){?>checked="checked"<?php }?>></td>
	</tr>
	<tr>
		<td>学&nbsp;&nbsp;校　<select name="school">
			<option <?php if ($_smarty_tpl->getVariable('user')->value['school']=="嘉兴学院"){?>selected="selected"<?php }?> value="嘉兴学院">嘉兴学院
			</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['school']=="嘉兴职业技术学院"){?>selected="selected"<?php }?> value="嘉兴职业技术学院">嘉兴职业技术学院</option>

			<option <?php if ($_smarty_tpl->getVariable('user')->value['school']=="其他"){?>selected="selected"<?php }?> value="其他">
			其他</option>

		</select></td>
	</tr>


	<tr>
		<td>学&nbsp;&nbsp;院　<select name='college'>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']==''){?>selected="selected"<?php }?> value=""></option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="数信学院"){?>selected="selected"<?php }?> value="数信学院">数信学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="商学院"){?>selected="selected"<?php }?>  value="商学院">商学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="文法学院"){?>selected="selected"<?php }?>  value="文法学院">文法学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="外国语学院"){?>selected="selected"<?php }?>  value="外国语学院">外国语学院
			</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="医学院"){?>selected="selected"<?php }?>  value="医学院">医学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="机电工程学院"){?>selected="selected"<?php }?>  value="机电工程学院">机电工程学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="生物与化学工程学院"){?>selected="selected"<?php }?>  value="生物与化学工程学院">生物与化学工程学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="材料与纺织工程学院"){?>selected="selected"<?php }?>  value="材料与纺织工程学院">材料与纺织工程学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="建筑工程学院"){?>selected="selected"<?php }?>  value="建筑工程学院">建筑工程学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="设计学院"){?>selected="selected"<?php }?>  value="设计学院">设计学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="南湖学院"){?>selected="selected"<?php }?>  value="南湖学院">
			南湖学院</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="平湖校区"){?>selected="selected"<?php }?>  value="平湖校区">平湖校区</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['college']=="其他"){?>selected="selected"<?php }?>  value="其他">其他</option>

		</select></td>
		<td>年&nbsp;&nbsp;&nbsp;&nbsp;级　<select name="grade">
			<option <?php if ($_smarty_tpl->getVariable('user')->value['grade']==''){?>selected="selected"<?php }?> value=""></option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['grade']=="12级"){?>selected="selected"<?php }?> value="12级">12级</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['grade']=="11级"){?>selected="selected"<?php }?> value="11级">11级</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['grade']=="10级"){?>selected="selected"<?php }?> value="10级">10级</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['grade']=="09级"){?>selected="selected"<?php }?> value="09级">09级</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['grade']=="08级"){?>selected="selected"<?php }?> value="08级">08级</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['grade']=="07级"){?>selected="selected"<?php }?> value="07级">07级</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['grade']=="06级"){?>selected="selected"<?php }?> value="06级">06级</option>
			<option <?php if ($_smarty_tpl->getVariable('user')->value['grade']=="其他"){?>selected="selected"<?php }?> value="其他">其他</option>
		</select></td>
	</tr>
</table>
</div>

<div>
<h3 class="usettitle">个性签名或自我介绍</h3>
<textarea name="textarea" id="textarea"
	style="width: 100%; height: 200px" class="pb-input-text"><?php echo $_smarty_tpl->getVariable('user')->value['info'];?>
</textarea>
<input type="hidden" name="tag" id="tag" value="" /></div>

<div id="pwd_wrap">
<h3 class="usettitle" style="margin: 5px 0px">原始密码</h3>
<input type="password" name="pwd" id="pwd" class="ipt"
	submiturl="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'changepwd'),$_smarty_tpl);?>
">
<h3 class="usettitle">新密码</h3>
<input type="password" name="pwd1" id="pwd1" class="ipt" width="20px" />
<h3 class="usettitle">重复新密码</h3>
<input type="password" name="pwd2" id="pwd2" class="ipt" />

<p style="margin: 10px 0px; display: block"><span
	style="display: none;" id="loadings">正在保存...</span></p>
</div>




</div>
<div id="pb-action-holder"><a id="submit_baseinfo"
	class="blue-button" submiturl="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'savesetting'),$_smarty_tpl);?>
">保存</a> <a
	id="chgpwd" class="gray-button">修改密码</a> <a id="cancel"
	class="gray-button">返回</a> <span style="display: none;"
	id="pb-submiting-tip">正在保存...</span></div>
</div>


<div id="aside">
<div class="aside-item" id="post-privacy-holder">
<h4>我的头像
<div class="uploadBtn" id="upload_photo"><span>上传头像</span><input
	type="file" size="1" name="filedata" ext="jpg,jpeg,gif,png" /></div>
</h4>
<hr class="separator">
<img name="" src="<?php echo avatar(array('uid'=>$_SESSION['uid'],'size'=>'b','time'=>1),$_smarty_tpl);?>
" alt=""
	style="max-width: 170px" /></div>


<hr class="separator">
<div class="aside-item" id="recommand-tag-holder">
<h4>设置主题</h4>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'userblog','a'=>'customize'),$_smarty_tpl);?>
">点击立即设置个性主题</a>
<div class="clear"></div>
</div>





</div>
<div class="clear"></div>
</div>
</form>
<iframe id="_parse" name="_parse" style="display: none"></iframe></div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
