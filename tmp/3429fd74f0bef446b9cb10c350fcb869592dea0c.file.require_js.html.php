<?php /* Smarty version Smarty-3.0.6, created on 2012-10-30 21:46:25
         compiled from "C:\wamp\www\m/tpl\require_js.html" */ ?>
<?php /*%%SmartyHeaderCode:13410508fda31275b52-31259620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3429fd74f0bef446b9cb10c350fcb869592dea0c' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\require_js.html',
      1 => 1351604782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13410508fda31275b52-31259620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	<script>
		<!--
		var urlpath = '<?php echo $_smarty_tpl->getVariable('url')->value;?>
';
		-->
	</script>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/reset.css" class="cssfx"/>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/jquery.min.js"/></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/jquery-ui.js"/></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/modernizr.js"></script>
	<!--<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/jquery.corner.js"></script>-->
	<!--[if lt IE 7]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
	<script>
	Modernizr.load([
	/*{
		load: '<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/jquery-1.6.2.min.js'
	},*/
	/*{
		test : Modernizr.borderradius,
		nope : '<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/jquery.corner.js',
		complete : function (){
			$('.round').corner('5px');
		}
	}*/
	]);
	
	</script>
	<?php if ($_smarty_tpl->getVariable('login')->value!='yes'){?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/dialog/dialog.js?skin=mac"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/dialog/dialogTools.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/swf/player.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/global.js"></script>
	<?php }?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/cssfx.min.js"></script>

     <!--[if lte IE 6]>
        <script src="http://chii.in/js/pngfixed.js" type="text/javascript"></script>
        <script> DD_belatedPNG.fix('img,#lbtn,#loginarea .filed .input,#loginarea .filedBtn .subBtn,#area li,#BalloonA,#BalloonB,#regbox,#rbtn,#aside #sidetop,#aside #dasbard,#wrap,#postblog .pop,#header #tool #side #menuSideBtn,#header #nav li.current,#header #logo a,#aside #search input.btn,#aside #search,#aside .hr,#article .box .top .jiao,.contentTop');</script>
        <![endif]-->

    <?php if ($_smarty_tpl->getVariable('gallery')->value=='yes'){?>
    	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/dialog/dialog.js?skin=mac"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/dialog/dialogTools.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/gallery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/gallery.global.js"></script>
     <link href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/gallery.show.css" rel="stylesheet" type="text/css">
    <?php }?>
    
    
<?php if ($_smarty_tpl->getVariable('waterfall')->value=='yes'){?>


<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/modernizr.js"></script>
<script type='text/javascript' src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/jquery.masonry.min.js"></script>
<script type='text/javascript' src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/jquery.infinitescroll.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/digg.js"/></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/cssfx.min.js"></script>
<?php }?>



    <?php if ($_smarty_tpl->getVariable('editor')->value=='yes'){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/editor/xheditor.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/add.js"></script>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('custom')->value=='yes'){?>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/custom.js"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/colorselect/jquery.modcoder.excolor.js"></script>
    <?php }?>


	 <?php if ($_smarty_tpl->getVariable('loadedit')->value=='yes'){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/editor/xheditor.js"></script>
    <?php }?>

     <?php if ($_smarty_tpl->getVariable('layout')->value=='yes'){?>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/masonry.min.js"></script>
      <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/recommend.css" />
           
            <script>
            $(document).ready(function(){
                    $('.welcome').masonry({ itemSelector: '.box' 	});
					$('.welcome .box').hover(
                                function(){
                                $(this).find('.boxhover').fadeIn();
                                },function(){
                                $(this).find('.boxhover').fadeOut();
                });
        });
        </script>
        
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('swfupload')->value=='yes'){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/swfupload.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/multiupload.js"></script>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('addcss')->value=='yes'){?>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/image/css/add.css" />
    <?php }?>
    
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
/tpl/js/bootstrap.js"></script>