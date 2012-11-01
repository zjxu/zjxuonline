<?php /* Smarty version Smarty-3.0.6, created on 2012-10-31 17:17:49
         compiled from "C:\wamp\www\m/tpl\dlost.html" */ ?>
<?php /*%%SmartyHeaderCode:232075090ecbdbb28b2-48502493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b6e56c8c9701a5ab9be4d7b44dc3842786d1ef' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\dlost.html',
      1 => 1351675056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232075090ecbdbb28b2-48502493',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('titlepre',$_smarty_tpl->getVariable('tagname')->value);$_template->assign('gallery','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

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
<div id="article">
<div style="margin-bottom: 20px">
<h2 id="h2" class="h2">失物信息详情</h2>
</div>

<div id="feedArea">

<div class="box" id="blog_<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
">
     <div class="top">
     	<?php if ($_smarty_tpl->getVariable('d')->value['user_id']!=0){?><a href="<?php echo goUserHome(array('uid'=>$_smarty_tpl->getVariable('d')->value['user_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->getVariable('d')->value['uname'];?>
" target="_blank"> 
     	<img src="<?php echo avatar(array('uid'=>$_smarty_tpl->getVariable('d')->value['user_id'],'size'=>'m'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->getVariable('d')->value['uname'];?>
" class="face"/></a><?php }else{ ?><img src="<?php echo avatar(array('uid'=>$_smarty_tpl->getVariable('d')->value['user_id'],'size'=>'middle'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->getVariable('d')->value['uname'];?>
" class="face"/><?php }?><span class="jiao"></span>
     </div>
     
     <div class="header">
       <cite> <?php if ($_smarty_tpl->getVariable('d')->value['user_id']!=0){?><a href="<?php echo goUserHome(array('domain'=>$_smarty_tpl->getVariable('d')->value['domain'],'uid'=>$_smarty_tpl->getVariable('d')->value['user_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('d')->value['uname'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->getVariable('d')->value['uname'];?>
<?php }?> <?php echo ybtime(array('time'=>$_smarty_tpl->getVariable('d')->value['pubtime']),$_smarty_tpl);?>
 </cite>
   
     </div>
     
     <div id="feedText_<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
" class="content">
  
       
              <?php if (count($_smarty_tpl->getVariable('d')->value['images'])>0){?>
           <div class="highslide-gallery" style="margin-top: 13px">
           <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('d')->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
							<span>物品名称:</span><span class="object_detail"><?php echo $_smarty_tpl->getVariable('d')->value['title'];?>
</span>
						</li>
						<li>
							<span>物品类型:</span><span class="object_detail"><?php echo $_smarty_tpl->getVariable('d')->value['type'];?>
</span>
						</li>
						<li>
							<span id="label_place">丢失地点:</span><span class="object_detail"><?php echo $_smarty_tpl->getVariable('d')->value['path'];?>
</span>
						</li>
						<li class="clearfix">
							<span id="label_time">丢失时间:</span><span class="object_detail"><?php echo $_smarty_tpl->getVariable('d')->value['losttime'];?>
</span>
						</li>
				
						<li>
							<span>详情描述:</span><span class="object_detail" id="object_detail"><?php echo $_smarty_tpl->getVariable('d')->value['context'];?>
</span>
						</li>
						
					</ul>
     </div>
     

     <div class="footer">

     <div class="tag">  联系人:<?php echo $_smarty_tpl->getVariable('d')->value['linkman'];?>
&nbsp;&nbsp;   <?php if ($_smarty_tpl->getVariable('d')->value['sphone']!=''&&$_smarty_tpl->getVariable('d')->value['sphone']!='null'){?> 短号 :<?php echo $_smarty_tpl->getVariable('d')->value['sphone'];?>
&nbsp;&nbsp; <?php }?>电话 :<?php echo $_smarty_tpl->getVariable('d')->value['phone'];?>
 <?php if ($_smarty_tpl->getVariable('d')->value['qq']!=''&&$_smarty_tpl->getVariable('d')->value['qq']!='null'){?>qq:<?php echo $_smarty_tpl->getVariable('d')->value['qq'];?>
<?php }?></div>

   
        
      <div class="menu">


      			
               <?php if (islogin()){?>
               	
                 	<?php if ($_smarty_tpl->getVariable('d')->value['user_id']!=$_SESSION['uid']&&$_smarty_tpl->getVariable('d')->value['user_id']!=0){?>
       		<a href="javascript:void(0)" onclick="indexPostTab('comment','<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'blog','a'=>'getReplay'),$_smarty_tpl);?>
')" id="comment_btn_<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
"> 给他留言</a>
       	 <?php }?>
       	 
                	
               
            
                   
     
                
                
                   <?php if ($_smarty_tpl->getVariable('d')->value['user_id']==$_SESSION['uid']||$_SESSION['admin']==1){?>

                    <span class="delrep"><a href="javascript:void(0)" onclick="deltwo('<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'del','id'=>$_smarty_tpl->getVariable('d')->value['id']),$_smarty_tpl);?>
')" title="删除">&nbsp;&nbsp;&nbsp;</a></span>
                   <?php }?>
               <?php }?>
   
      </div>
        <div class="clear"></div>
     </div>

 
                    <div style="display:none" id="comment_<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
">
                      <div class="comment">
                      <?php if (islogin()){?>
                          <textarea id="replyInput_<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
"></textarea>
                          <input type="hidden" id="replyTo_<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
" />
                          <div class="submit">
                           <em class="green" id="replyInput_lengthinf_<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
"></em>
                           <input type="button" value="留言" onclick="sendtwomem('<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'postpm'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->getVariable('d')->value['user_id'];?>
')" class="btn" />
                       </div>
                          <?php }?>
                       
                      </div>
                    </div>
                    
                     <div id="feeds_<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
"  style="display:none">
                      <div class="comment">


                        <ul class="feedList" id="feedList_<?php echo $_smarty_tpl->getVariable('d')->value['id'];?>
">
                        </ul>
                      </div>
                    </div>
     
   
    </div>
    </div>
    </div>
    <div id="aside">
   <?php $_template = new Smarty_Internal_Template("require_sider.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('in_tagindex',true); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>
    <?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>