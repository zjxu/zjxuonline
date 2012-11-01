<?php /* Smarty version Smarty-3.0.6, created on 2012-10-04 19:39:54
         compiled from "C:\wamp\www\yunbian/tpl\require_post.html" */ ?>
<?php /*%%SmartyHeaderCode:12674506d758acbaa01-93894352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1aa662952bd39da1d348c01b401ba9059ba87ed' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\require_post.html',
      1 => 1320733684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12674506d758acbaa01-93894352',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="postblog">
        <div class="img"><img src="<?php echo avatar(array('uid'=>$_SESSION['uid'],'size'=>'middle'),$_smarty_tpl);?>
" alt="<?php echo $_SESSION['username'];?>
" class="face"/></div>
        <div class="pop">
     <?php if ($_smarty_tpl->getVariable('yb')->value['addtext_switch']==1){?> <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'text'),$_smarty_tpl);?>
" class="text">文字</a></li> <li class="ln"></li><?php }?>
    <?php if ($_smarty_tpl->getVariable('yb')->value['addmusic_switch']==1){?> <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'music'),$_smarty_tpl);?>
" class="music">音乐</a></li><li class="ln"></li><?php }?>
    <?php if ($_smarty_tpl->getVariable('yb')->value['addimg_switch']==1){?> <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'image'),$_smarty_tpl);?>
" class="photo">图片</a></li><li class="ln"></li><?php }?>
    <?php if ($_smarty_tpl->getVariable('yb')->value['addvideo_switch']==1){?><li><a  href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'video'),$_smarty_tpl);?>
" class="video">视频</a></li><li class="ln"></li><?php }?>
    <!--<li><a href="#" class="link">其他</a></li>-->    
      </div>
    </div>