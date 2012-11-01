<?php /* Smarty version Smarty-3.0.6, created on 2012-10-31 13:26:24
         compiled from "C:\wamp\www\m/tpl\require_header.html" */ ?>
<?php /*%%SmartyHeaderCode:263315090b6805a5b00-02011326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e968c39b089790c9159ab7a6b11d7b6d8c40a7' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\require_header.html',
      1 => 1351661181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263315090b6805a5b00-02011326',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html lang="zh-cn">
<head>
    <title><?php if ($_smarty_tpl->getVariable('titlepre')->value){?><?php echo $_smarty_tpl->getVariable('titlepre')->value;?>
 -<?php }?> <?php echo $_smarty_tpl->getVariable('title')->value;?>
 <?php echo $_smarty_tpl->getVariable('yb')->value['site_title'];?>
 - <?php echo $_smarty_tpl->getVariable('yb')->value['site_titlepre'];?>
 </title>
    <meta charset="utf-8" />
    <meta name="author" content="<?php echo $_smarty_tpl->getVariable('yb')->value['author'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->getVariable('yb')->value['site_desc'];?>
" />
    <meta name="keywords" content="<?php if ($_smarty_tpl->getVariable('titlepre')->value){?><?php echo $_smarty_tpl->getVariable('titlepre')->value;?>
,<?php }?><?php echo $_smarty_tpl->getVariable('yb')->value['site_keyword'];?>
" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/favicon.ico" type="image/x-icon">
   <link href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/login.css" rel="stylesheet" type="text/css"  class="cssfx"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/html5.css" class="cssfx"/>
	   <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/bootstrap.css" class="cssfx"/>
	<?php $_template = new Smarty_Internal_Template("require_js.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</head>
<body>
<div id="header_bg">
<div id="footer_bg">
<div id="wrap">
<div id="header">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">网上嘉院</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
          <li <?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='index'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
">首页</a><?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='index'){?><div class="nav_arrow"></div><?php }?></li>
            <li <?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='waimai'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'waimai','a'=>'index'),$_smarty_tpl);?>
">外卖</a><?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='discover'){?><div class="nav_arrow"></div><?php }?></li>
         <li <?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='lost'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'lost'),$_smarty_tpl);?>
">寻物</a><?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='lost'){?><div class="nav_arrow"></div><?php }?></li>
         <li <?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='find'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'find'),$_smarty_tpl);?>
">招领</a><?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='find'){?><div class="nav_arrow"></div><?php }?></li>
       
        <li <?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='two'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'two','a'=>'index'),$_smarty_tpl);?>
">二手</a><?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='recommend'){?><div class="nav_arrow"></div><?php }?></li>
  
        <li <?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='work'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'work'),$_smarty_tpl);?>
">兼职</a><?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='now'){?><div class="nav_arrow"></div><?php }?></li>
        <li <?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='news'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'news'),$_smarty_tpl);?>
">资讯</a><?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='now'){?><div class="nav_arrow"></div><?php }?></li>
             <li <?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='side'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'side'),$_smarty_tpl);?>
">周边</a><?php if ($_smarty_tpl->getVariable('CurrentModule')->value=='now'){?><div class="nav_arrow"></div><?php }?></li>
       
            </ul>
              <?php if (!islogin()){?>
            <form class="navbar-form pull-right" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
" method="post" onSubmit="return checkLogin()">
              <input class="span2" type="text"  name="email" id="email" placeholder="用户名| 邮箱">
              <input class="span2" type="password"  name="password" id="password" placeholder="密码">
              <button type="submit" class="btn">登陆</button>
              <button type="button" class="btn">注册</button>
            </form>
          <?php }?>
             <?php if (islogin()){?>
             <div class="pull-right">
                 <div class="btn-group">
    <a class="btn" href="<?php echo goUserHome(array('domain'=>$_SESSION['domain'],'uid'=>$_SESSION['uid']),$_smarty_tpl);?>
"><i class="icon-user"></i> <?php echo $_SESSION['uname'];?>
</a>
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'setting'),$_smarty_tpl);?>
"><i class=icon-cog></i> 设置</a></li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'pm'),$_smarty_tpl);?>
"><i class="icon-trash"></i> 私信</a></li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mynotice'),$_smarty_tpl);?>
"><i class="icon-ban-circle"></i> 通知</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'logout'),$_smarty_tpl);?>
"><i class="icon-off"></i>退出</a></li>
    </ul>
    </div>
</div>
        <?php }?>
          </div><!--/.nav-collapse -->

        </div>
      </div>
    </div>
	

    <div id="tool">
 

    </div>

    <!--<div  class="tool">
        <?php if ($_SESSION['uid']==''){?>
            <a href="javascript:void(0)" onClick="loginBox('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
')">登陆</a>
            <a href="javascript:void(0)" onClick="regBox('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'reg'),$_smarty_tpl);?>
')">注册</a>
        <?php }else{ ?>
      	  <a href="<?php echo goUserHome(array('domain'=>$_SESSION['domain'],'uid'=>$_SESSION['uid']),$_smarty_tpl);?>
" target="_blank" title="我的主页"><?php echo $_SESSION['username'];?>
</a>
           <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'pm'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('pmCount')->value;?>
私信</a>
           <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'setting'),$_smarty_tpl);?>
">设置</a>
          <?php if ($_SESSION['admin']==1){?><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin'),$_smarty_tpl);?>
">后台</a><?php }?>
          <a href="javascript:void(0)" onClick="logout('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'logout'),$_smarty_tpl);?>
')">退出</a>

        <?php }?>
       	  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'about'),$_smarty_tpl);?>
">关于</a>
    </div>-->
</div>
<input type="hidden"  name="login_url" id="login_url" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
" />
<input type="hidden"  name="reg_url" id="reg_url" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'reg'),$_smarty_tpl);?>
" />

<script>
function checkLogin()
{
	if ($('#email').val() == ''){ $('#email').addClass('warn',500);}
	if ($('#password').val() == ''){ $('#password').addClass('warn',500);}
	if (($('#email').val() == '') || ($('#password').val() == '')) return false;
	return true;
}

</script>

