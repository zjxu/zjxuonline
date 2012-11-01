<?php /* Smarty version Smarty-3.0.6, created on 2012-10-31 21:12:20
         compiled from "C:\wamp\www\m/tpl\require_finds.html" */ ?>
<?php /*%%SmartyHeaderCode:28621509123b44fdb03-77507913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e30939a998490182e4abc031c61d23e62f1cbd1' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\require_finds.html',
      1 => 1351689119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28621509123b44fdb03-77507913',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<style>
.h2 {
    border-bottom: 1px dashed #ACACAC;
    color: #4C4C4C;
    font: 20px "Microsoft Yahei";
    padding-bottom: 10px;
    text-shadow: 0 1px 2px rgba(65, 65, 65, 0.7);
}
publish_form {
    padding: 20px 0 0 20px;
}

ul.publish_form li {
    margin-bottom: 10px;
    overflow: hidden;
}
ul {
    list-style: none outside none;
}
.object_detail {
    margin-left: 1em;
    width: 715px;
}
</style>




<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
<div class="box" id="blog_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
     <div class="top">
     	<?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']!=0){?><a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
" target="_blank"> 
     	<img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
" class="face"/></a><?php }else{ ?><img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id'],'size'=>'middle'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
" class="face"/><?php }?><span class="jiao"></span>
     </div>
     
     <div class="header">
       <cite> <?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']!=0){?><a href="<?php echo goUserHome(array('domain'=>$_smarty_tpl->tpl_vars['d']->value['domain'],'uid'=>$_smarty_tpl->tpl_vars['d']->value['user_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
<?php }?> <?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['pubtime']),$_smarty_tpl);?>
 </cite>
   
     </div>
     
     <div id="feedText_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="content">
  
       
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
           
           
             <ul class="publish_form">
						<li>
							<span>物品名称:</span><span class="object_detail"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</span>
						</li>
						<li>
							<span>物品类型:</span><span class="object_detail"><?php echo $_smarty_tpl->tpl_vars['d']->value['type'];?>
</span>
						</li>
						<li>
							<span id="label_place">拾获地点:</span><span class="object_detail"><?php echo $_smarty_tpl->tpl_vars['d']->value['path'];?>
</span>
						</li>
						<li class="clearfix">
							<span id="label_time">拾获时间:</span><span class="object_detail"><?php echo $_smarty_tpl->tpl_vars['d']->value['losttime'];?>
</span>
						</li>
				
						<li>
							<span>详情描述:</span><span class="object_detail" id="object_detail"><?php echo $_smarty_tpl->tpl_vars['d']->value['context'];?>
</span>
						</li>
						
					</ul>
     </div>
     

     <div class="footer">

     <div class="tag">  联系人:<?php echo $_smarty_tpl->tpl_vars['d']->value['linkman'];?>
&nbsp;&nbsp;   <?php if ($_smarty_tpl->tpl_vars['d']->value['sphone']!=''&&$_smarty_tpl->tpl_vars['d']->value['sphone']!='null'){?> 短号 :<?php echo $_smarty_tpl->tpl_vars['d']->value['sphone'];?>
&nbsp;&nbsp; <?php }?>电话 :<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
 <?php if ($_smarty_tpl->tpl_vars['d']->value['qq']!=''&&$_smarty_tpl->tpl_vars['d']->value['qq']!='null'){?>qq:<?php echo $_smarty_tpl->tpl_vars['d']->value['qq'];?>
<?php }?></div>

   
        
      <div class="menu">


      			
               <?php if (islogin()){?>
               	
                 	<?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']!=$_SESSION['uid']&&$_smarty_tpl->tpl_vars['d']->value['user_id']!=0){?>
       		<a href="javascript:void(0)" onclick="indexPostTab('comment','<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'getReplay'),$_smarty_tpl);?>
')" id="comment_btn_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"> 给他留言</a>
       	 <?php }?>
       	 
                	
               
            
                   
     
                
                
                   <?php if ($_smarty_tpl->tpl_vars['d']->value['user_id']==$_SESSION['uid']||$_SESSION['admin']==1){?>

                    <span class="delrep"><a href="javascript:void(0)" onclick="deltwo('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'del','id'=>$_smarty_tpl->tpl_vars['d']->value['id']),$_smarty_tpl);?>
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


 