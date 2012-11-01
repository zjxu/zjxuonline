<?php /* Smarty version Smarty-3.0.6, created on 2012-10-04 19:39:56
         compiled from "C:\wamp\www\yunbian/tpl\require_sider.html" */ ?>
<?php /*%%SmartyHeaderCode:6352506d758c188a04-79465330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e711311f5d5010737be03d6f38b11e7ae22b760b' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\require_sider.html',
      1 => 1320942268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6352506d758c188a04-79465330',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--右侧菜单组件-->




<?php if ($_SESSION['uid']!=''){?>


  <?php if (!$_smarty_tpl->getVariable('in_tagindex')->value){?>

  <div id="search"><input type="text" value="搜索标签,发现兴趣" class="ipt"><input type="button" class="btn" value="" onClick="searchTag()"></div>
  <div class="hr"></div>
  <div id="sidetop">
    <div class="myfollow"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main'),$_smarty_tpl);?>
">我关注<?php echo $_smarty_tpl->getVariable('user')->value['flow'];?>
个博客</a></div>
    <div class="showfollow"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'myfollow'),$_smarty_tpl);?>
">管理我的关注</a></div>
   </div>

    <div id="dasbard">
        <div class="item"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mylikes'),$_smarty_tpl);?>
">我的最爱</a><span><?php echo $_smarty_tpl->getVariable('user')->value['likenum'];?>
</span></div>
        <div class="item"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'mypost'),$_smarty_tpl);?>
">我发布的</a><span><?php echo $_smarty_tpl->getVariable('user')->value['num'];?>
</span></div>
         <div class="item"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'myreplay'),$_smarty_tpl);?>
">我回复的</a></div>
    </div>
      <div class="hr"></div>
  <?php }?>


    <?php if ($_smarty_tpl->getVariable('in_tagindex')->value){?>

         <?php if ($_smarty_tpl->getVariable('favatag')->value){?>
             <div id="menu">
             <li class="end"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
" title="返回首页">返回首页</a></li>
             <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('favatag')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
             	<?php if ($_smarty_tpl->tpl_vars['d']->value['tag']['title']==$_smarty_tpl->getVariable('tagname')->value){?>
                 <li class="current"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'tag','tag'=>$_smarty_tpl->tpl_vars['d']->value['tag']['title']),$_smarty_tpl);?>
" title="最近更新<?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['tag']['updates']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['tag']['title'];?>
</a><span><?php if ($_smarty_tpl->tpl_vars['d']->value['tag']['num']){?>(<?php echo $_smarty_tpl->tpl_vars['d']->value['tag']['num'];?>
)<?php }?></span></li>
                <?php }else{ ?>
                <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'tag','tag'=>$_smarty_tpl->tpl_vars['d']->value['tag']['title']),$_smarty_tpl);?>
" title="最近更新<?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['tag']['updates']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['tag']['title'];?>
</a><span><?php if ($_smarty_tpl->tpl_vars['d']->value['tag']['num']){?>(<?php echo $_smarty_tpl->tpl_vars['d']->value['tag']['num'];?>
)<?php }?></span></li>
                <?php }?>

            <?php }} ?>
              <div class="clear"></div>
            </div>
            <?php }else{ ?>
             <div id="menu">
              <li class="end"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'recommend'),$_smarty_tpl);?>
">没有关注标签,发现一下吧</a></li>
              <div class="clear"></div>
            </div>
         <?php }?>
    <?php }else{ ?>
    	<?php if ($_smarty_tpl->getVariable('favatag')->value){?>
             <div id="menu">
             <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('favatag')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
              <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'tag','tag'=>$_smarty_tpl->tpl_vars['d']->value['tag']['title']),$_smarty_tpl);?>
" title="最近更新<?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['tag']['updates']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['tag']['title'];?>
</a> <span><?php if ($_smarty_tpl->tpl_vars['d']->value['tag']['num']){?>(<?php echo $_smarty_tpl->tpl_vars['d']->value['tag']['num'];?>
)<?php }?></span></li>
            <?php }} ?>
             <li class="end"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'tag'),$_smarty_tpl);?>
">查看更多标签</a></li>
              <div class="clear"></div>
            </div>
            <?php }else{ ?>
             <div id="menu">
              <li class="end"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'recommend'),$_smarty_tpl);?>
">没有关注标签,发现一下吧</a></li>
              <div class="clear"></div>
            </div>
        <?php }?>
    <?php }?>

	<div class="clear"></div>
 <?php }?>


	<!--_-<div class="hr"></div>
   <div class="list">
   <h1>欢迎访问云边</h1>
    <a href="http://www.thinksaas.cn/index.php/group/group/groupid-129"><img width="250" alt="" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/nologin.png"></a>
     <div class="footer">免费·开源轻博客系统</div>
    </div>---_-->




  <!-- <nav class="list">
   	 <h1>推荐阅读  <span>  </span> <a id="rec_focusTa" href="javascript:void(0)">关注Ta</a>  转发</h1>
    <a href="#"><img width="250" alt="" src="http://ww4.sinaimg.cn/mw600/7af8cdd4jw1dip5jnp6bmj.jpg"></a>
     <footer><a href="#">看看Ta的作品</a></footer>
    </nav>-->

   <!-- <nav class="list">
   	 <h1>音乐推荐  <span>  </span> <a id="rec_focusTa" href="javascript:void(0)">关注Ta</a>  转发</h1>
    <embed width="250" height="62" type="application/x-mplayer2"src="http://zhangmenshiting.baidu.com/data/music/4698391/%E5%BD%93%E6%88%91%E5%94%B1%E8%B5%B7%E8%BF%99%E9%A6%96%E6%AD%8C.mp3" autostart="true" enablecontextmenu="false" classid="clsid:6bf52a52-394a-11d3-b153-00c04f79faa6"></embed>
     <footer><a href="#">看看Ta的作品</a></footer>
    </nav>-->






