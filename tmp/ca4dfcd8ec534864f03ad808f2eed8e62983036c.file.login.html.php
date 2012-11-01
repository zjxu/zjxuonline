<?php /* Smarty version Smarty-3.0.6, created on 2012-10-04 22:40:19
         compiled from "C:\wamp\www\yunbian/tpl\login.html" */ ?>
<?php /*%%SmartyHeaderCode:16201506d9fd3724fa0-63045693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca4dfcd8ec534864f03ad808f2eed8e62983036c' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\login.html',
      1 => 1349359058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16201506d9fd3724fa0-63045693',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html lang="zh-cn" class="no-js">
<head>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->getVariable('yb')->value['site_title'];?>
 - <?php echo $_smarty_tpl->getVariable('yb')->value['site_titlepre'];?>
 - Powered by 云边轻博</title>
<meta name="author" content="<?php echo $_smarty_tpl->getVariable('yb')->value['author'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('yb')->value['site_desc'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('yb')->value['site_keyword'];?>
" />
<?php $_template = new Smarty_Internal_Template("require_js.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('login','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<link href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/login.css" rel="stylesheet" type="text/css"  class="cssfx"/>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/favicon.ico" type="image/x-icon">

</head>

<body>
<div id="wrap">

  <div id="main">
	<div id="rbtn"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'reg'),$_smarty_tpl);?>
">注册</a></div>
    <div id="logo"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/logo.png" width="248" height="81" alt="logo" /></a></div> <div id="BalloonA"></div><div id="BalloonB"></div>
    <div style="height:150px; clear:both">
    <!--[if lte IE 6]>
    	<div class="ie6">
        <h1>请不要再使用IE6</h1>
        <div>虽然我们试图努力让各个浏览器的浏览效果达到最佳，但是IE6我们实在无能为力。<br />
        我们的开发人员花了大量时间来保证IE6的界面不乱，但无法保证所有功能都能正常使用。<br />
        因此我们建议您更换掉已经淘汰很久的IE6浏览器。<br />
        您可以使用 ie7,ie8,ie9,firefox,chrome,opera,safari</div>
        </div>
        <![endif]-->
    </div>
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" id="logbox">
      <tr>
        <td>
              <h1>登陆<?php echo $_smarty_tpl->getVariable('yb')->value['site_title'];?>
网</h1>
          <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
" method="post" onSubmit="return checkLogin()">
        <?php if ($_smarty_tpl->getVariable('errmsg')->value){?>
        <div id="errmsg"><?php echo $_smarty_tpl->getVariable('errmsg')->value;?>
</div>
        <?php }?>
                <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('callback')->value;?>
" name="callback">
                <input type="hidden" value="" name="formKey">
                <div id="loginarea">
                    <div class="filed">
                    	<label for="email" class="nocontent">邮箱</label>
                        <input type="text" id="email" name="email" class="input round" tabindex="1" value="<?php if ($_POST['email']){?><?php echo $_POST['email'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('email')->value;?>
<?php }?>">
                    </div>
                    <div class="filed"><label for="password" class="nocontent">密码</label><input type="password" id="password" class="input round" value="<?php echo $_POST['password'];?>
" name="password" tabindex="2"></div>
                    <div class="filedBtn"><input class="subBtn" type="submit" name="submit"  value="&nbsp;" /></div><div class="clear"></div>
                    <table width="400" border="0" cellspacing="0" cellpadding="0" class="remember">
                      <tr>
                        <td width="190"> <input name="savename" type="checkbox" id="savename" value="1" checked="checked" title="保存账号"/><label for="savename" >记住账号</label></td>
                        <td  align="left" valign="middle">  <!--<a href="#">忘记密码?</a>--></td>
                      </tr>
                    </table>
                   <?php if ($_smarty_tpl->getVariable('yb')->value['loginCodeSwitch']!='close'){?>
                    <table width="400" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="195">
                        <div class="filed"><label for="verifycode" class="nocontent">验证码</label><input type="text" id="verifycode" class="input"  name="verifycode" tabindex="3"></div></td>
                        <td width="205" align="left" valign="middle">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'vcode','t'=>$_smarty_tpl->getVariable('time')->value),$_smarty_tpl);?>
" class="vericode" onClick="javascript:reloadcode(this,this.src);" title="看不清楚，换一张" style="cursor:pointer;" /></td>
                      </tr>
                    </table>
                   <?php }?>
             </div>

       <?php if ($_smarty_tpl->getVariable('yb')->value['openlogin_qq_open']==1||$_smarty_tpl->getVariable('yb')->value['openlogin_weib_open']==1){?>
      <div id="openconnent">
      <h1>用合作账户登陆</h1>
          <div id="area">
              <?php if ($_smarty_tpl->getVariable('yb')->value['openlogin_qq_open']==1){?>
              <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'openconnect','a'=>'qq'),$_smarty_tpl);?>
"><img src="tpl/image/qq_login.png" border="0" style="margin-top:10px"/></a></li>
              <?php }?>
              <?php if ($_smarty_tpl->getVariable('yb')->value['openlogin_weib_open']==1){?>
              <li> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'openconnect','a'=>'weibo'),$_smarty_tpl);?>
"><img src="tpl/image/weib_login.png" border="0" style="margin-top:10px"/></a></li>
              <?php }?>
          </div>
      </div>
       <?php }?>
          </form>
        </td>
      </tr>
    </table>
  </div>


	<div id="footer"></div>
	<div id="copyright">
		<div class="nav clearfix">
			<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'about'),$_smarty_tpl);?>
">关于云边</a></li>
			<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'call'),$_smarty_tpl);?>
">联系我们</a></li>
			<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'help'),$_smarty_tpl);?>
">获取帮助</a></li>
			<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'service'),$_smarty_tpl);?>
">服务条款</a></li>
			<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'privacy'),$_smarty_tpl);?>
">隐私政策</a></li>
		</div>
		<div class="copy"><a href="http://www.thinksaas.cn/index.php/group/group/groupid-129" target="_blank">Powered by <?php echo $_smarty_tpl->getVariable('yb')->value['soft'];?>
 <b><?php echo $_smarty_tpl->getVariable('yb')->value['version'];?>
</b> </a>&nbsp;2011-2012 <?php echo $_smarty_tpl->getVariable('yb')->value['site_icp'];?>
 <?php echo $_smarty_tpl->getVariable('yb')->value['site_count'];?>
</small></div>
	</div>


</div>
<script>
<!--

// login and reg
$(document).ready(function(){
	if($('#email').val() != ''){$('#email').parent().find('label').hide();}
	if($('#password').val() != ''){$('#password').parent().find('label').hide();}
	if($('#loginarea #verifycode').val() != ''){$('#loginarea #verifycode').parent().find('label').hide();}
	$('#email,#password,#loginarea #verifycode').focus(function(){
		$(this).parent().find('label').hide();
	}).blur(function(){
		if($(this).val() ==''){$(this).parent().find('label').show();}
	})

	setTimeout(function(){$('#BalloonB').fadeIn('slow');},800);
	setTimeout(function(){ $('#BalloonA').fadeIn('slow');},1100);

	$('#email').keyup(function(){if ($(this).hasClass('warn')) {$(this).removeClass('warn');}});
	$('#password').keyup(function(){if ($(this).hasClass('warn')) {$(this).removeClass('warn');}});
})

function reloadcode(obj,url)
{
	obj.src = url+ '&nowtime=' + new Date().getTime();
}


function checkLogin()
{
	if ($('#email').val() == ''){ $('#email').addClass('warn',500);}
	if ($('#password').val() == ''){ $('#password').addClass('warn',500);}
	if (($('#email').val() == '') || ($('#password').val() == '')) return false;
	$('.subBtn').addClass('loading');
	return true;
}

/*var offset = 2247;
var backgroundheight = offset;
function scrollbackground() {
    offset = (offset < 1) ? offset + (backgroundheight - 1) : offset - 1;
    $('#footer').css('background-position', offset + "px");
    setTimeout(function() {
        scrollbackground()
    },
    100)
};
scrollbackground();*/

-->
</script>
</body>
</html>





