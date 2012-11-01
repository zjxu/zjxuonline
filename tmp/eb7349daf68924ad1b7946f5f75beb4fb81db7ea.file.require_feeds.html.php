<?php /* Smarty version Smarty-3.0.6, created on 2012-10-24 22:05:46
         compiled from "C:\wamp\www\m/tpl\require_feeds.html" */ ?>
<?php /*%%SmartyHeaderCode:212825087f5ba11f019-90883057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb7349daf68924ad1b7946f5f75beb4fb81db7ea' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\require_feeds.html',
      1 => 1351087530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212825087f5ba11f019-90883057',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
<div class="box" id="blog_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
     <div class="top">
     	<a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
" target="_blank"> 
     	<img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id'],'size'=>'middle'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
" class="face"/></a><span class="jiao"></span>
     </div>
     <div class="header">
       <cite> <a href="<?php echo goUserHome(array('domain'=>$_smarty_tpl->tpl_vars['d']->value['domain'],'uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
</a> <?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['pubdate']),$_smarty_tpl);?>
 </cite>
   
     </div>
     
     <div id="feedText_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="content">
     <?php echo $_smarty_tpl->tpl_vars['d']->value['body'];?>

         
              <?php if ($_smarty_tpl->tpl_vars['d']->value['bimg']!=''){?>
           <div class="highslide-gallery" style="margin-top: 13px">
           <a onclick="return hs.expand(this)" 
           href="<?php echo $_smarty_tpl->tpl_vars['d']->value['bimg'];?>
" class="highslide">
           <img class="feedimg" alt="" src="<?php echo $_smarty_tpl->tpl_vars['d']->value['bimg'];?>
"></a>
          
           </div>
           <?php }?>
     </div>
     

     <div class="footer">
     <?php if ($_smarty_tpl->tpl_vars['d']->value['appclient']!=''){?>
     <div class="tag">用[<?php echo $_smarty_tpl->tpl_vars['d']->value['appclient'];?>
]发布</div>
     <?php }?>
        
      <div class="menu">

	<a href="javascript:void(0)" onclick="indexPostTab('comment','<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'getReplay'),$_smarty_tpl);?>
')" id="comment_btn_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
      				 评论<em><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['d']->value['commentcount'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0){?>(<?php echo $_smarty_tpl->tpl_vars['d']->value['commentcount'];?>
)<?php }?></em></a>
               <?php if (islogin()){?>
               	
                
       
                	<?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']!=$_SESSION['uid']){?>
                       <?php if ($_smarty_tpl->tpl_vars['d']->value['followid']!=''){?> <a href="javascript:void(0)" onclick="follows('<?php echo $_smarty_tpl->tpl_vars['d']->value['user_id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'follows'),$_smarty_tpl);?>
')">已关注</a> <?php }else{ ?>
                       <a href="javascript:void(0)" onclick="follows('<?php echo $_smarty_tpl->tpl_vars['d']->value['user_id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'follows'),$_smarty_tpl);?>
')">关注</a>
                       <?php }?>
                   <?php }?>
                   
     
                
                
                   <?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']==$_SESSION['uid']||$_SESSION['admin']==1){?>

                    <span class="delrep"><a href="javascript:void(0)" onclick="delblogs('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'del','id'=>$_smarty_tpl->tpl_vars['d']->value['id']),$_smarty_tpl);?>
')" title="删除">&nbsp;&nbsp;&nbsp;</a></span>
                   <?php }?>
               <?php }?>
   
      </div>
        <div class="clear"></div>
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
                           <em class="green" id="replyInput_lengthinf_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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
                    
                     <div id="feeds_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"  style="display:none">
                      <div class="comment">


                        <ul class="feedList" id="feedList_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                        </ul>
                      </div>
                    </div>
     
   
    </div>
<?php }} ?>
