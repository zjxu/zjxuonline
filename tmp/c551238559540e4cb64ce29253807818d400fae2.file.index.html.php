<?php /* Smarty version Smarty-3.0.6, created on 2012-10-25 17:00:20
         compiled from "C:\wamp\www\m/tpl/theme/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:50625088ffa4d75dd8-42987998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c551238559540e4cb64ce29253807818d400fae2' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl/theme/default/index.html',
      1 => 1351155617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50625088ffa4d75dd8-42987998',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("theme/default/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>



<div id="wrap">

<div id="main">
<div id="title"><a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->getVariable('uid')->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a></div>
<?php if ($_smarty_tpl->getVariable('user')->value['info']!=''){?>

<div id="sign"><?php echo $_smarty_tpl->getVariable('user')->value['info'];?>
</div>

<?php }?>
</div>





<div id="article">
   
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tweets')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
    <div class="box" id="blog_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
   <div class="header"><h1><a href="<?php echo goUserBlog(array('bid'=>$_smarty_tpl->tpl_vars['d']->value['id']),$_smarty_tpl);?>
"></a></h1> </div>
     
     <div class="content">
           <?php echo $_smarty_tpl->tpl_vars['d']->value['body'];?>

         
              <?php if ($_smarty_tpl->tpl_vars['d']->value['bimg']!=''){?>
           <div class="highslide-gallery" style="margin-top: 13px">
           <a onclick="return hs.expand(this)" 
           href="<?php echo $_smarty_tpl->tpl_vars['d']->value['bimg'];?>
" class="highslide">
           <img class="feedimg" alt="" src="<?php echo $_smarty_tpl->tpl_vars['d']->value['simg'];?>
"></a>
          
           </div>
           <?php }?>
     </div>
     
     
     <div class="footer clearfix">
      <div class="tag">     <?php if ($_smarty_tpl->tpl_vars['d']->value['appclient']!=''){?>
     <div class="tag">用[<?php echo $_smarty_tpl->tpl_vars['d']->value['appclient'];?>
]发布</div>
     <?php }?>
        </div>
      <div class="menu"><?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['pubdate']),$_smarty_tpl);?>
   <a href="javascript:void(0)" onclick="indexPostTab('comment','<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'getReplay'),$_smarty_tpl);?>
')" id="comment_btn_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
       评论<em><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['d']->value['commentcount'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0){?>(<?php echo $_smarty_tpl->tpl_vars['d']->value['commentcount'];?>
)<?php }?></em></a>
         <?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']==$_SESSION['uid']||$_SESSION['admin']==1){?>

                    <span class="delrep"><a href="javascript:void(0)" onclick="delblogs('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'del','id'=>$_smarty_tpl->tpl_vars['d']->value['id']),$_smarty_tpl);?>
')" title="删除">&nbsp;&nbsp;&nbsp;</a></span>
                   <?php }?>
       
       </div>
     </div>
     
     <div style="display:none" id="comment_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                      <div class="comment">
                      <?php if (islogin()){?>
                          <textarea id="replyInput_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"></textarea>
                          <input type="hidden" id="replyTo_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" />
                          <div class="submit">
                           <em class="green" id="replyInput_lengthinf_<?php echo $_smarty_tpl->tpl_vars['d']->value['bid'];?>
"></em>
                           <input type="button" value="提交评论" onclick="sendReplay('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'replay'),$_smarty_tpl);?>
')" class="btn" />
                       </div>
                          <?php }?>
                        <ul class="commentList" id="commentList_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"></ul>
                      </div>
                    </div>
   
    </div>
      <?php }} else { ?>
    
    <?php } ?>
    
    <div class="page"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div>     

    

</div>

<div class="aside">
    <?php $_template = new Smarty_Internal_Template("theme/default/aside.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>











<?php $_template = new Smarty_Internal_Template("theme/default/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>