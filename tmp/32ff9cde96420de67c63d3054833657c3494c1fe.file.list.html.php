<?php /* Smarty version Smarty-3.0.6, created on 2012-10-13 15:43:07
         compiled from "C:\wamp\www\m/tpl/theme/default/list.html" */ ?>
<?php /*%%SmartyHeaderCode:1493550791b8bbc87b0-09096687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ff9cde96420de67c63d3054833657c3494c1fe' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl/theme/default/list.html',
      1 => 1320905796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493550791b8bbc87b0-09096687',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("theme/default/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('titles',$_smarty_tpl->getVariable('d')->value['title']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>



<div id="wrap">

<div id="main">
    <div id="title"><a href="<?php echo goUserHome(array('domain'=>$_smarty_tpl->getVariable('domain')->value,'uid'=>$_smarty_tpl->getVariable('uid')->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a></div>
    <div id="sign"><?php echo $_smarty_tpl->getVariable('signhtml')->value;?>
</div>
</div>





<div id="article">
   

  <div class="box" id="blog_<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
">
   <div class="header">  <h1><a href="<?php echo goUserBlog(array('bid'=>$_smarty_tpl->getVariable('d')->value['bid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('d')->value['title'];?>
</a></h1> </div>
     
     <div class="content">
      <?php echo feeds(array('item'=>$_smarty_tpl->getVariable('d')->value['body'],'type'=>$_smarty_tpl->getVariable('d')->value['type'],'limit'=>'all','bid'=>$_smarty_tpl->getVariable('d')->value['bid'],'showmedia'=>1),$_smarty_tpl);?>

     </div>
     
     <div class="footer">
     点击(<?php echo $_smarty_tpl->getVariable('d')->value['hitcount'];?>
) &nbsp; 
      <div class="tag">标签: <?php echo tag(array('tag'=>$_smarty_tpl->getVariable('d')->value['tag'],'c'=>'tag'),$_smarty_tpl);?>
 </div>
      <div class="menu"><?php echo ybtime(array('time'=>$_smarty_tpl->getVariable('d')->value['time']),$_smarty_tpl);?>
   <a href="javascript:void(0)" onclick="indexPostTab('comment','<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'getReplay'),$_smarty_tpl);?>
')" id="comment_btn_<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
">  评论<em><?php ob_start();?><?php echo $_smarty_tpl->getVariable('d')->value['replaycount'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0){?>(<?php echo $_smarty_tpl->getVariable('d')->value['replaycount'];?>
)<?php }?></em></a>
      
        <?php if ($_smarty_tpl->getVariable('d')->value['uid']!=$_SESSION['uid']){?>
               <a href="javascript:void(0)" onclick="likes('<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'likes','bid'=>$_smarty_tpl->getVariable('d')->value['bid']),$_smarty_tpl);?>
')">喜欢</a> 
               <?php }?>
               
        <?php $_template = new Smarty_Internal_Template("share_qq.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('stitle',$_smarty_tpl->getVariable('d')->value['title']);$_template->assign('domain',$_smarty_tpl->getVariable('domain')->value);$_template->assign('bid',$_smarty_tpl->getVariable('d')->value['bid']);$_template->assign('sname',$_smarty_tpl->getVariable('username')->value); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
               
               
     
        <?php if ($_smarty_tpl->getVariable('d')->value['uid']==$_SESSION['uid']||$_SESSION['admin']==1){?>
                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'edit','id'=>$_smarty_tpl->getVariable('d')->value['bid']),$_smarty_tpl);?>
">编辑<?php if ($_smarty_tpl->getVariable('d')->value['open']==0){?>草稿<?php }?></a> 
                   <a href="javascript:void(0)" onclick="delblogs('<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'del','id'=>$_smarty_tpl->getVariable('d')->value['bid']),$_smarty_tpl);?>
')" title="删除">删除</a>
          <?php }?>
       </div>
        <div class="clear"></div>
     </div>
     
     <hr size="1" />
     <div class="favatitle">谁喜欢...(<?php echo $_smarty_tpl->getVariable('fava')->value['count'];?>
)</div>
    <?php if ($_smarty_tpl->getVariable('fava')->value['count']!=0){?>  
     <div class="fava">
    
         <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fava')->value['rs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
           <a href="<?php echo goUserHome(array('domain'=>$_smarty_tpl->tpl_vars['d']->value['domain'],'uid'=>$_smarty_tpl->tpl_vars['d']->value['uid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
 - <?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['time']),$_smarty_tpl);?>
"> 
           <img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['uid'],'size'=>'middle'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
"/></a>
         <?php }} ?>
      </div>
      <?php }?>
      
      
     <script>indexPostTab('comment','<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'getReplay'),$_smarty_tpl);?>
');</script>
     <div id="comment_<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
">
            <div class="comment">
            <?php if (islogin()){?>
                <textarea id="replyInput_<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
"></textarea>
                <input type="hidden" id="replyTo_<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
" />
                <div class="submit">
                 <em class="green" id="replyInput_lengthinf_<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
"></em>
                 <input type="button" value="提交评论" onclick="sendReplay('<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'replay'),$_smarty_tpl);?>
')" class="btn" />
             </div>
                <?php }?>
              <ul class="commentList" id="commentList_<?php echo $_smarty_tpl->getVariable('d')->value['bid'];?>
"></ul>
            </div>
      </div>
   
    </div>


    

</div>

<div class="aside">
    <?php $_template = new Smarty_Internal_Template("theme/default/aside.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>












<?php $_template = new Smarty_Internal_Template("theme/default/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>