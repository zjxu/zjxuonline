<?php /* Smarty version Smarty-3.0.6, created on 2012-10-31 21:50:23
         compiled from "C:\wamp\www\m/tpl\work.html" */ ?>
<?php /*%%SmartyHeaderCode:743350912c9ff2ee38-13371970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '446734f79e9be7ee91d59bfd17ff60e1f9c8b0ba' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\work.html',
      1 => 1351691264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '743350912c9ff2ee38-13371970',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('titlepre',$_smarty_tpl->getVariable('tagname')->value);$_template->assign('gallery','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/work.css" class="cssfx"/>
<div id="article" >

<div id="feedArea">
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('work')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
<div class="box" id="blog_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">

     <div class="header">
       <cite> (<?php echo $_smarty_tpl->tpl_vars['d']->value['workspath'];?>
) <?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['pubdate']),$_smarty_tpl);?>
 </cite>
   
     </div>
     
     <div id="feedText_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="content">
    
    <table >
    <tr height="30px"> <td>薪资水平: &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['workmoney'];?>
&nbsp;&nbsp;</td><td>招聘人数:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['worknum'];?>
</td></tr>
 <tr height="30px"><td>性别要求: &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['workgender'];?>
&nbsp;&nbsp;</td><td>工作时间:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['worktime'];?>
</td></tr>
 <tr height="30px"><td>工作地点:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['workpath'];?>
 </td></tr>
    </table>

         <?php if ($_smarty_tpl->tpl_vars['d']->value['content']!=''){?><?php echo $_smarty_tpl->tpl_vars['d']->value['content'];?>
<?php }?>
       
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
           
           
             
     </div>
     

     <div class="footer">

     <div class="tag">  联系人:<?php echo $_smarty_tpl->tpl_vars['d']->value['linkman'];?>
&nbsp;&nbsp;   <?php if ($_smarty_tpl->tpl_vars['d']->value['sphone']!=''&&$_smarty_tpl->tpl_vars['d']->value['sphone']!='null'){?> 短号 :<?php echo $_smarty_tpl->tpl_vars['d']->value['sphone'];?>
&nbsp;&nbsp; <?php }?>电话 :<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
 </div>

   
        
      <div class="menu">


      			
               <?php if (islogin()){?>
               	
     
       	 
                	
                       <?php if ($_smarty_tpl->tpl_vars['d']->value['coll']==1){?> 
                       <a href="javascript:void(0)" onclick="collectadd('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'add'),$_smarty_tpl);?>
')"><span id='coll_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
'>取消收藏</span></a>
                     <?php }elseif($_smarty_tpl->tpl_vars['d']->value['coll']==0){?>
                    <a href="javascript:void(0)" onclick="collectadd('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'add'),$_smarty_tpl);?>
')"><span id='coll_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
'>收藏</span></a> 
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
</div>




<div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div>



</div>




<div id="aside">
   <?php $_template = new Smarty_Internal_Template("require_sider.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('in_tagindex',true); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>