<?php /* Smarty version Smarty-3.0.6, created on 2012-10-29 11:05:39
         compiled from "C:\wamp\www\m/tpl\user_mem.html" */ ?>
<?php /*%%SmartyHeaderCode:22551508df2834073f1-76625876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf81d6fffe52b94851d780d5536ff78c6f74f35f' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\user_mem.html',
      1 => 1351479855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22551508df2834073f1-76625876',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css"> 



<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<link href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/mem.css" rel="stylesheet" type="text/css">

<?php if ($_smarty_tpl->getVariable('me')->value==0){?>
<div id="article">
 <h1><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'mem','a'=>'mymem'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_mefor')->value;?>
>大家的备忘录</a> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'mem','a'=>'mymem','me'=>true),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_forme')->value;?>
>我的备忘录</a></h1>
 <ul>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mem')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>

 
    <li>
    <?php if ($_smarty_tpl->tpl_vars['d']->value['url']!=''){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['d']->value['url'];?>
" target="_blank">
 <?php }else{ ?>
 <a href="#">
 <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['d']->value['url']!=''){?>
<h2><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</h2>
<?php }?>
        <p><?php echo $_smarty_tpl->tpl_vars['d']->value['content'];?>
</p>

           <?php if ($_smarty_tpl->tpl_vars['d']->value['phone']!=''){?>
        <p>电话：<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
</p>
<?php }?>
      </a>
    </li>

   <?php }} ?> 
   </ul>
    <div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div> 
</div>




<?php }else{ ?>


<div id="article">
  <h1><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'mem','a'=>'mymem'),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_mefor')->value;?>
>大家的备忘录</a> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'mem','a'=>'mymem','me'=>true),$_smarty_tpl);?>
"<?php echo $_smarty_tpl->getVariable('curr_forme')->value;?>
>我的备忘录</a></h1>


 <ul>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mem')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>

 
    <li>
    <?php if ($_smarty_tpl->tpl_vars['d']->value['url']!=''){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['d']->value['url'];?>
" target="_blank">
 <?php }else{ ?>
 <a href="#">
 <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['d']->value['url']!=''){?>
<h2><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</h2>
<?php }?>
        <p><?php echo $_smarty_tpl->tpl_vars['d']->value['content'];?>
</p>

           <?php if ($_smarty_tpl->tpl_vars['d']->value['phone']!=''){?>
        <p>电话：<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
</p>
<?php }?>
      </a>
    </li>

   <?php }} ?> 
   </ul>




    <div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div> 
</div>




<?php }?>




          
          
<div id="aside">
   <?php $_template = new Smarty_Internal_Template("require_sider.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>