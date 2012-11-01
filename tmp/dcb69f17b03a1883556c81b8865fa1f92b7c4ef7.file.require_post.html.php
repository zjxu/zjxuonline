<?php /* Smarty version Smarty-3.0.6, created on 2012-10-24 19:50:42
         compiled from "C:\wamp\www\m/tpl\require_post.html" */ ?>
<?php /*%%SmartyHeaderCode:237985087d612e86605-46141090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb69f17b03a1883556c81b8865fa1f92b7c4ef7' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\require_post.html',
      1 => 1351079438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237985087d612e86605-46141090',
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
" class="text">动弹</a></li> <li class="ln"></li><?php }?>
    <?php if ($_smarty_tpl->getVariable('yb')->value['addmusic_switch']==1){?> <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'music'),$_smarty_tpl);?>
" class="music">音乐</a></li><li class="ln"></li><?php }?>
    <?php if ($_smarty_tpl->getVariable('yb')->value['addimg_switch']==1){?> <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'image'),$_smarty_tpl);?>
" class="photo">图片</a></li><li class="ln"></li><?php }?>
    <?php if ($_smarty_tpl->getVariable('yb')->value['addvideo_switch']==1){?><li><a  href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'video'),$_smarty_tpl);?>
" class="video">视频</a></li><li class="ln"></li><?php }?>
    <!--<li><a href="#" class="link">其他</a></li>-->    
      </div>
    </div>