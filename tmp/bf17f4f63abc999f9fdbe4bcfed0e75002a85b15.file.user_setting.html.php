<?php /* Smarty version Smarty-3.0.6, created on 2012-10-07 20:24:06
         compiled from "C:\wamp\www\yunbian/tpl\user_setting.html" */ ?>
<?php /*%%SmartyHeaderCode:1160850717466a063c3-88339506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf17f4f63abc999f9fdbe4bcfed0e75002a85b15' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\user_setting.html',
      1 => 1349612636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1160850717466a063c3-88339506',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('addcss','yes');$_template->assign('editor','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="content">
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'savesetting'),$_smarty_tpl);?>
" id="userSetting" method="post" enctype="multipart/form-data" target="_parse">
  <div id="content">

    <div id="main">
  
      <h2 id="title">个人设置</h2>
      <div id="pb-post-area">

        
        
        <div>
          <h3 class="usettitle"> 我的账号 <span>(不可更改)</span> </h3>
          <input type="text"  class="iptname"  value="<?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
" disabled="disabled">
        </div>
        
        <div>
          <h3 class="usettitle"> 昵称或轻博名称 <span>名称需唯一可更改</span> </h3>
          <input type="text" name="niname" id="niname" class="ipt"  value="<?php echo $_smarty_tpl->getVariable('user')->value['username'];?>
">
        </div>
        
        <div>
          <h3 class="usettitle"> 个性化地址 <span>只能为英文或数字组合最短3位,最长15位</span> </h3>
           <input type="text" class="iptdomain"  value="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" disabled="disabled" >
          <input type="text" name="domain" id="domain" class="ipt"  value="<?php echo $_smarty_tpl->getVariable('user')->value['domain'];?>
">
        </div>
         <div>
          <h3 class="usettitle"> 博客关键字 <span>用最多三个关键词描述他的主题。例如：轻音大爱,古典,摇滚等。</span> </h3>
         <div id="post-tag2" style="width:98%; height:45px; overflow:hidden">
          <ul class="clearfix" id="post-tag-list"><!--动态插入标签-->
        
          <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('myTag')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
          <li tag="<?php echo $_smarty_tpl->tpl_vars['d']->value;?>
"><span><?php echo $_smarty_tpl->tpl_vars['d']->value;?>
</span><a title="删除" onclick="remTags(this)" href="javascript:;">x</a></li>
          <?php }} ?>
          </ul>
          <div id="post-tag-input-holder">
            <input type="text" id="post-tag-input" class="pb-tag-tip">
          </div>
         
        </div>
        <div style="margin-top:5px; clear:both">最多三个主要标签,您也可从右侧的推荐标签选择</div>
        </div>
        

        
        <div>
          <h3 class="usettitle">个性签名或自我介绍</h3>
          <textarea name="textarea" id="textarea" style="width:100%; height:200px" class="pb-input-text" ><?php echo $_smarty_tpl->getVariable('user')->value['sign'];?>
</textarea>
          <input type="hidden" name="tag" id="tag" value="" />
        </div>
        
        <?php if ($_smarty_tpl->getVariable('yb')->value['mail_open']==1){?>
        <div>
          <h3 class="usettitle">邮件通知(请允许以下方式邮件通知我)</h3>
         <input name="m_rep" id="m_rep" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('user')->value['m_rep']==1){?>checked="checked"<?php }?> />回复通知
         <input name="m_fow" id="m_fow" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('user')->value['m_fow']==1){?>checked="checked"<?php }?> />关注通知
         <input name="m_pm" id="m_pm" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('user')->value['m_pm']==1){?>checked="checked"<?php }?> />私信通知
        </div>
         <?php }?>
	  <div id="pwd_wrap">
 		<h3 class="usettitle" style="margin:5px 0px">原始密码</h3>
           <input type="password" name="pwd" id="pwd" class="ipt" submiturl="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'changepwd'),$_smarty_tpl);?>
" >
           <h3 class="usettitle">新密码</h3>
           <input type="password" name="pwd1" id="pwd1" class="ipt" width="20px"/>
           <h3 class="usettitle">重复新密码</h3>
           <input type="password" name="pwd2" id="pwd2" class="ipt"/>
           
           <p style="margin:10px 0px; display:block"> <span style="display:none;" id="loadings">正在保存...</span> 
           </p>
        </div>
     
        
          
 
      </div>
      <div id="pb-action-holder"> 
          <a id="submit_baseinfo" class="blue-button" submiturl="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'savesetting'),$_smarty_tpl);?>
">保存</a>
           <a id="chgpwd" class="gray-button">修改密码</a> 
          <a id="cancel" class="gray-button">返回</a> 
       <span style="display:none;" id="pb-submiting-tip">正在保存...</span>
      </div>
    </div>
    
 
    <div id="aside">
      <div class="aside-item" id="post-privacy-holder">
      <h4>我的头像  <div class="uploadBtn" id="upload_photo"><span >上传头像</span><input type="file" size="1" name="filedata" ext="jpg,jpeg,gif,png" /></div></h4>
      <hr class="separator">
       <img name="" src="<?php echo avatar(array('uid'=>$_SESSION['uid'],'size'=>'b','time'=>1),$_smarty_tpl);?>
" alt="" style="max-width:170px" />
        
      </div>
      
      
      <hr class="separator">
      <div class="aside-item" id="recommand-tag-holder">
        <h4>设置主题</h4>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'userblog','a'=>'customize'),$_smarty_tpl);?>
">点击立即设置个性主题</a>
        <div class="clear"></div>
      </div>


    
   
      
    </div>
    <div class="clear"></div>
  </div>
</form>
<iframe id="_parse" name="_parse" style="display:none"></iframe>
</div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
