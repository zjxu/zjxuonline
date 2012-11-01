<?php /* Smarty version Smarty-3.0.6, created on 2012-10-29 20:02:04
         compiled from "C:\wamp\www\m/tpl\require_two.html" */ ?>
<?php /*%%SmartyHeaderCode:24137508e703cc4b657-25787566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f54ee7dbc3298ed8b7a166150ff22b7eb3d24f9c' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\require_two.html',
      1 => 1351512121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24137508e703cc4b657-25787566',
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
     <?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>

         
         <?php if ($_smarty_tpl->tpl_vars['d']->value['context']!=''&&$_smarty_tpl->tpl_vars['d']->value['sphone']!='null'){?><?php echo $_smarty_tpl->tpl_vars['d']->value['context'];?>
<br><br><?php }?>
       
              <?php if (count($_smarty_tpl->tpl_vars['d']->value['images'])>0){?>
           <div class="highslide-gallery" style="margin-top: 13px">
           <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
           <a onclick="return hs.expand(this)" 
           href="<?php echo $_smarty_tpl->tpl_vars['i']->value['burl'];?>
" class="highslide">
           <img class="feedimg" alt="" src="<?php echo $_smarty_tpl->tpl_vars['i']->value['burl'];?>
"></a>
          
           <?php }} ?>
           
           
           <br><br>
           </div>
           
           <?php }else{ ?>
           
           <?php }?>
           
           
             价格:<?php echo $_smarty_tpl->tpl_vars['d']->value['price'];?>
&nbsp;&nbsp; &nbsp;  新旧程度:<?php echo $_smarty_tpl->tpl_vars['d']->value['new'];?>

     </div>
     

     <div class="footer">

     <div class="tag">  联系人:<?php echo $_smarty_tpl->tpl_vars['d']->value['linkman'];?>
&nbsp;&nbsp;   <?php if ($_smarty_tpl->tpl_vars['d']->value['sphone']!=''&&$_smarty_tpl->tpl_vars['d']->value['sphone']!='null'){?> 短号 :<?php echo $_smarty_tpl->tpl_vars['d']->value['sphone'];?>
&nbsp;&nbsp; <?php }?>电话 :<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
 </div>

   
        
      <div class="menu">


      			
               <?php if (islogin()){?>
               	
                 	<?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']!=$_SESSION['uid']){?>
       		<a href="javascript:void(0)" onclick="indexPostTab('comment','<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'getReplay'),$_smarty_tpl);?>
')" id="comment_btn_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"> 给他留言</a>
       	 <?php }?>
       	 
                	
                       <?php if ($_smarty_tpl->tpl_vars['d']->value['coll']==1){?> 
                       <a href="javascript:void(0)" onclick="collectadd('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'two','a'=>'add'),$_smarty_tpl);?>
')"><span id='coll_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
'>取消收藏</span></a>
                     <?php }elseif($_smarty_tpl->tpl_vars['d']->value['coll']==0){?>
                    <a href="javascript:void(0)" onclick="collectadd('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'two','a'=>'add'),$_smarty_tpl);?>
')"><span id='coll_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
'>收藏</span></a> 
                       <?php }?>
            
                   
     
                
                
                   <?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']==$_SESSION['uid']||$_SESSION['admin']==1){?>

                    <span class="delrep"><a href="javascript:void(0)" onclick="deltwo('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'two','a'=>'del','id'=>$_smarty_tpl->tpl_vars['d']->value['id']),$_smarty_tpl);?>
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
                           <input type="button" value="留言" onclick="sendtwomem('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'postpm'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['d']->value['user_id'];?>
')" class="btn" />
                       </div>
                          <?php }?>
                       
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
