<?php /* Smarty version Smarty-3.0.6, created on 2012-10-30 18:56:54
         compiled from "C:\wamp\www\m/tpl\waimai.html" */ ?>
<?php /*%%SmartyHeaderCode:12847508fb2769854f7-68315779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01dd74cf02abfaa21518ee9b231dbec454f7b1d1' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\waimai.html',
      1 => 1351594283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12847508fb2769854f7-68315779',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('titlepre',$_smarty_tpl->getVariable('tagname')->value);$_template->assign('gallery','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

  <meta name="viewport" content="width=device-width" />


  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/stylesheets/foundation.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/stylesheets/app.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/css/style_common.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/css/style5.css" />
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


  

  <!-- /Top Menu -->
  <!-- End Header and Nav -->
  
  
  
  <!-- Second Band (Image Left with Text) -->
  
  <div class="shop">
    <div class="row shop-tuijian">
       <ul id="shop-ul">
          <li><img src="<?php echo $_smarty_tpl->getVariable('rewaimai')->value['simg'];?>
" style="width: 100px;height: 100px"/></li>
          <li id="shop-ul-tj">
            <h5>为您推荐<a href="../3DRestaurantMenu/index.html" target="_blank"><?php echo $_smarty_tpl->getVariable('rewaimai')->value['title'];?>
</a> </h5>
            <p>短号: <?php echo $_smarty_tpl->getVariable('rewaimai')->value['sphone'];?>
 <br>电话:<?php echo $_smarty_tpl->getVariable('rewaimai')->value['phone'];?>
</p>
          </li>
          <li id="s-recommend">
            <dl >
              <dt id="s-recommend-food">可能感兴趣的食物</dt>
              <dd>
                <ul id="s-recommend-img" class="clearfix">
                  <?php  $_smarty_tpl->tpl_vars['rd'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('retakeout')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rd']->key => $_smarty_tpl->tpl_vars['rd']->value){
?>
                     <li><img src="<?php echo $_smarty_tpl->tpl_vars['rd']->value['img'];?>
" style="width: 100px;height: 75px" /><br><span style="font-size: 10px"><?php echo $_smarty_tpl->tpl_vars['rd']->value['title'];?>
(<?php echo $_smarty_tpl->tpl_vars['rd']->value['money'];?>
)</span></li>
                     
                 <?php }} ?>    
               
 
                </ul>
              </dd>
              <dd id="s-change">换一批</dd>
            </dl>
          </li>
       </ul> 
    </div>
  </div>
  
  <!-- 购物流程引导-->
  <div class="row">
    <div class="twelve columns">
      <div id="slider">
        <img src="http://getimg.in/940x200&text=[img 1]" />
        <img src="http://getimg.in/940x200&text=[img 2]" />
        <img src="http://getimg.in/940x200&text=[img 3]" />
        <img src="http://getimg.in/940x200&text=[img 4]" />
      </div>
      
      <hr />
    </div>
  </div>
  <!-- Third Band (Image Right with Text) -->
  
  <div class="row">
  <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('waimai')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
        <div class="view view-fifth" style="width: 300px;height: 200px">
            <img src="<?php echo $_smarty_tpl->tpl_vars['d']->value['img'];?>
" width="300px"  height="200px"  style="width: 300px;height: 200px"/>
            <div class="mask">
                <h2><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
 -- <?php echo $_smarty_tpl->tpl_vars['d']->value['dtitle'];?>
 </h2>
                <p>外卖时间:<?php echo $_smarty_tpl->tpl_vars['d']->value['time'];?>
</p>
     
                <a href="#" class="info">电话:<?php echo $_smarty_tpl->tpl_vars['d']->value['showphone'];?>
</a>
            </div>
        </div> 
    <?php }} ?>    
        

  </div>
  
  


  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.forms.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.placeholder.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.foundation.topbar.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/jquery.js"></script>
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/javascripts/app.js"></script>

  <script type="text/javascript">
     $(window).load(function() {
         $('#slider').orbit();
     });
  </script>
  <br><br><br>
<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
