<?php /* Smarty version Smarty-3.0.6, created on 2012-10-29 16:33:58
         compiled from "C:\wamp\www\m/tpl\recommend.html" */ ?>
<?php /*%%SmartyHeaderCode:31883508e3f769017f7-20654860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8772c6ca25c439ae04d0daddfce47f0ad3686988' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\recommend.html',
      1 => 1351499609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31883508e3f769017f7-20654860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include 'C:\wamp\www\m\init\Drivers\Smarty\plugins\function.cycle.php';
?><?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('layout','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="channle">
<div class="welcome"> <?php echo $_smarty_tpl->getVariable('feeds')->value;?>
 </div>
<div class="htag">
  <div class="htag">
    <table width="900" cellpadding="0" class="hottab" cellspace="0">
      <thead>
        <tr >
          <th width="167" class="tag-hd">热门二手</th>
          <th width="322" class="hot-hd">热度</th>
          <th width="171" class="editor-hd">最近更新时间</th>
          <th width="228" class="editor-hd">发布者</th>
         
        </tr>
      </thead>
      <tbody>
      
      <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('htag')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
      <tr class="tag-row <?php echo smarty_function_cycle(array('values'=>"odd,add"),$_smarty_tpl);?>
">
        <td class="tag"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'two','a'=>'type','type'=>$_smarty_tpl->tpl_vars['d']->value['type']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['type'];?>
</a></td>
        <td class="hot"><div class="state" style="width:<?php echo checkHit(array('max'=>$_smarty_tpl->getVariable('hotMax')->value,'val'=>$_smarty_tpl->tpl_vars['d']->value['count']),$_smarty_tpl);?>
%"><?php echo $_smarty_tpl->tpl_vars['d']->value['count'];?>
</div> </td>
        <td class="editor"><?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['time']),$_smarty_tpl);?>
&nbsp;</td>
        <td class="editor">
        <a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/index.php?c=userblog&a=index&uid=<?php echo $_smarty_tpl->tpl_vars['d']->value['userid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
" target="_blank"> <img src="<?php echo avatar(array('uid'=>$_smarty_tpl->tpl_vars['d']->value['userid'],'size'=>'s'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
" align="absmiddle"/>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['uname'];?>
</a>
        </td>
       
      </tr>
      <?php }} ?>
      </tbody>
      
    </table>
  </div>
</div>
</div>
<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>