<?php /* Smarty version Smarty-3.0.6, created on 2012-10-04 21:49:55
         compiled from "C:\wamp\www\yunbian/tpl\reg_new.html" */ ?>
<?php /*%%SmartyHeaderCode:5005506d94034d1ec3-05678651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25da421b167397f0bd36cad93c4c77aa2fec6a58' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\reg_new.html',
      1 => 1320809726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5005506d94034d1ec3-05678651',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->getVariable('yb')->value['site_title'];?>
 - <?php echo $_smarty_tpl->getVariable('yb')->value['site_titlepre'];?>
 - Power by 云边轻博</title>
<meta name="author" content="<?php echo $_smarty_tpl->getVariable('yb')->value['author'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('yb')->value['site_desc'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('yb')->value['site_keyword'];?>
" />
<?php $_template = new Smarty_Internal_Template("require_js.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('login','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<link href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/login.css" rel="stylesheet" type="text/css" class="cssfx"/>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/favicon.ico" type="image/x-icon">

</head>

<body>
<div id="wrap">

  <div id="main">
	<div id="lbtn"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main'),$_smarty_tpl);?>
">登陆</a></div>
    <div id="logo"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/logo.png" width="248" height="81" alt="logo" /></a></div> <div id="BalloonA"></div><div id="BalloonB"></div>
     <div style="height:65px; clear:both"></div>

  <table border="0" align="center" cellpadding="0" cellspacing="0" id="regbox">
      <tr>
        <td width="386" rowspan="2" valign="top">
         <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'reg'),$_smarty_tpl);?>
" method="post">
        <div id="regarea">
              <h1>注册<?php echo $_smarty_tpl->getVariable('yb')->value['site_title'];?>
账号</h1>
              <?php if ($_smarty_tpl->getVariable('errmsg')->value){?>
                <div id="errmsg"><?php echo $_smarty_tpl->getVariable('errmsg')->value;?>
</div>
                <?php }?>

              <div class="filed clearfix"><label class="nocontent">邮箱</label>
              	<input type="text"  name="email" class="input" tabindex="1" value="<?php echo $_POST['email'];?>
" title="请使用自己邮箱,使用他人邮箱被举报将会删除该账号">
                </div>
              <div class="filed clearfix"><label class="nocontent">密码</label>
              <input type="password"  name="password" class="input" tabindex="2" value="<?php echo $_POST['password'];?>
" title="请输入密码"></div>
              <div class="filed clearfix"><label class="nocontent">重复</label>
              <input type="password"  name="password2" class="input" tabindex="3" value="<?php echo $_POST['password2'];?>
" title="请重复输入密码"></div>
              <div class="filed clearfix" style="margin-bottom:0px"><label class="nocontent">昵称</label>
              <input type="text"  name="username" class="input" tabindex="4" value="<?php echo $_POST['username'];?>
" title="请输入昵称"></div>


              <?php if ($_smarty_tpl->getVariable('yb')->value['regCodeSwitch']!='close'){?>
            <div class="filed clearfix" style="margin:0px">
            <label class="nocontent"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'vcode','t'=>$_smarty_tpl->getVariable('time')->value),$_smarty_tpl);?>
" class="vericode"  onclick="javascript:reloadcode(this,this.src);" title="看不清楚，换一张" style="cursor:pointer;" /></label>
            <input name="verifycode" type="text" id="verifycode"  class="input" size="8" maxlength="4"  /></div>
            <?php }?>

               <div class="filed clearfix"><label class="nocontent"></label>
               <input class="regBtn" type="button" name="do"  value="" tabindex="5" onClick="checkReg()" /><span class="regcurr"></span></div>
        </div>
        <input type="hidden" name="doing" value="true" />
        <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('callback')->value;?>
" name="callback">
        </form>
        </td>
        <td height="53"> <div><span><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'service'),$_smarty_tpl);?>
" target="_blank">注册将视为您同意服务条款</a></span> </div>
          &nbsp;</td>
      </tr>
      <tr>
        <td width="261" valign="top">
          <?php if ($_smarty_tpl->getVariable('yb')->value['openlogin_qq_open']==1||$_smarty_tpl->getVariable('yb')->value['openlogin_weib_open']==1){?>
      <div id="openconnent">
      <h1>用合作账户登陆</h1>
          <div id="area">
              <?php if ($_smarty_tpl->getVariable('yb')->value['openlogin_qq_open']==1){?>
              <li><a href="javascript:void(0)" onClick="openconnect('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'openconnect','a'=>'qq'),$_smarty_tpl);?>
')"><img src="tpl/image/qq_login.png" border="0" style="margin-top:10px"/></a></li>
              <?php }?>
              <?php if ($_smarty_tpl->getVariable('yb')->value['openlogin_weib_open']==1){?>
              <li> <a href="javascript:void(0)" onClick="openconnect('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'openconnect','a'=>'weibo'),$_smarty_tpl);?>
')"><img src="tpl/image/weib_login.png" border="0" style="margin-top:10px"/></a></li>
              <?php }?>
          </div>
      </div>
       <?php }?>
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
            <li><a href="#">程序下载</a></li>
         </div>
        <div class="copy">
         <a href="http://www.thinksaas.cn/index.php/group/group/groupid-129" target="_blank">Powered by <?php echo $_smarty_tpl->getVariable('yb')->value['soft'];?>
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

	setTimeout(function(){$('#BalloonB').fadeIn('slow');},800)
	setTimeout(function(){ $('#BalloonA').fadeIn('slow');},1100)
})

function reloadcode(obj,url)
{
	obj.src = url+ '&nowtime=' + new Date().getTime();
}


function checkReg()
{
	$('.regcurr').addClass('loading');
	$("input[name='do']").attr('disabled', true);
	$('form').submit();

}


var offset = 2247;
var backgroundheight = offset;
function scrollbackground() {
    offset = (offset < 1) ? offset + (backgroundheight - 1) : offset - 1;
    $('#footer').css('background-position', offset + "px");
    setTimeout(function() {
        scrollbackground()
    },
    100)
};
scrollbackground();

-->
</script>
</body>
</html>





