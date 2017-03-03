<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body_attrs']  Attributes of the <body> tag
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// backward compatability support for plugins that are not using the new approach
// of routing through admin. See reportedcontent plugin for a simple example.
if (elgg_get_context() == 'admin') {
	if (get_input('handler') != 'admin') {
		elgg_deprecated_notice("admin plugins should route through 'admin'.", 1.8);
	}
	_elgg_admin_add_plugin_settings_menu();
	elgg_unregister_css('elgg');
	echo elgg_view('page/admin', $vars);
	return true;
}

// render content before head so that JavaScript and CSS can be loaded. See #4032

$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$header = elgg_view('page/elements/header', $vars);
$navbar = elgg_view('page/elements/navbar', $vars);
$content = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

$body = <<<__BODY
<div class="elgg-page elgg-page-default">
	<div class="elgg-page-messages">
		$messages
	</div>
__BODY;

if (elgg_is_logged_in()) {
	$topbar = elgg_view('page/elements/topbar', $vars);
}

$body .= <<<__BODY
	<div class="elgg-page-topbar">
		<div class="elgg-inner navigation">
			$topbar
		</div>
	</div>
__BODY;

$body .= <<<__BODY
	
	<div class="elgg-page-body">
		<div class="elgg-inner">
			$content
		</div>
	</div>
__BODY;

$head = elgg_view('page/elements/head', $vars['head']);

$params = array(
	'head' => $head,
	'body' => $body,
);

if (isset($vars['body_attrs'])) {
	$params['body_attrs'] = $vars['body_attrs'];
}


?>

<html>
<head>
<title>Agro Theme Powered By Jackson M [wZm.be]</title>
<link href="<?php echo elgg_get_site_url();?>/mod/agro_theme/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo elgg_get_site_url();?>/mod/agro_theme/assets/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo elgg_get_site_url();?>/mod/agro_theme/assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Agrom Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo elgg_get_site_url();?>/mod/agro_theme/assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo elgg_get_site_url();?>/mod/agro_theme/assets/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
</script>
<!-- //end-smoth-scrolling -->
<script src="<?php echo elgg_get_site_url();?>/mod/agro_theme/assets/js/menu_jquery.js"></script>

<!---pop-up-box---->
					<link href="<?php echo elgg_get_site_url();?>/mod/agro_theme/assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="<?php echo elgg_get_site_url();?>/mod/agro_theme/assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>		
</head>
<body>
<!--header start here-->
<div class="header">
	<div class="container">
		<div class="header-main">
			   <div class="head-left">
				   	<div class="phone">
				   		<p> Teléfono <span class="ph-numb">+54 (3825) 15-9200</span></p>
				   	</div>
				   	<div class="search">		
			              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i> </i></a>
		            </div>
	        <!---->
	              <div class="clearfix"> </div>
                </div>
			   <div class="header-right">
				   <div class="logo">
				   	   <h1><a href="index.html">MinkA</a></h1>
				   </div>

		    <div class="clearfix"> </div>
	     </div>
	     <div class="clearfix"> </div>
     </div>
   </div>
</div>
<!--header end here-->
<!--top nav start here-->
<div class="top-navg-main">
	<div class="container">
	    <div class="top-navg">
	    	           <span class="menu"> <img src="<?php echo elgg_get_site_url();?>/mod/agro_theme/assets/images/icon.png" alt=""/></span>
				<ul class="res">
				    <li><a href="<?php echo elgg_get_site_url();?>#main" class="active hvr-sweep-to-bottom">Inicio</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="<?php echo elgg_get_site_url();?>/bookmarks#main">Perfil</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="<?php echo elgg_get_site_url();?>/blog#main">Información</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="<?php echo elgg_get_site_url();?>/pages/all#main">Acciones</a></li>
					<li><a class="hvr-sweep-to-bottom" href="<?php echo elgg_get_site_url();?>/thewire#main">Publicaciones</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="<?php echo elgg_get_site_url();?>/file#main">Archivos</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="<?php echo elgg_get_site_url();?>/members#main">Miembros</a></li>
				 </ul>
					<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
		        <!-- /script-for-menu -->
		   </div>
	 </div>
</div>
<!--top nav end here-->
<!--banner start here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
		          <h4> </h4>
		          <h3 align="center"> MinkA es un sistema colaborativo para el sector vitivinícola</h3> 
			  <h2> Te permitira acceder a información útil <BR> para tu actividad</h2>
			  <h3 align="center"> ¿Que esperas para usarlo? </h3>
			  <h3 align="center"><a href="http://localhost/register">¡Regístrate!</a></h3>
		     <div class="clearfix"> </div>	
		</div>
	</div>
</div>
<div id="main">
<?php echo elgg_view("page/elements/html", $params); ?>
</div>
<div class="footer">
	<div class="container">
		<div class="footer-main">			  
			<div class="copy-right">
			<p>© 2016 Minka.com All Rights Reserved. </p>
		   </div>
		</div>
	</div>
</div>
<!--//footer--> 
</body>
</html>

<script>
jQuery(window).bind('scroll', function() {
         if (jQuery(window).scrollTop() > 29) {
             jQuery('.elgg-page-navbar').addClass('fixed');
         }
         else {
             jQuery('.elgg-page-navbar').removeClass('fixed');
         }
    });
jQuery(window).bind('scroll', function() {
         if (jQuery(window).scrollTop() > 29) {
             jQuery('.elgg-page-body').addClass('separated');
         }
         else {
             jQuery('.elgg-page-body').removeClass('separated');
         }
    });
jQuery(document).ready(function(){ 
jQuery("a.elgg-topbar-dropdown").removeAttr("href");
jQuery("li.elgg-more > a").removeAttr("href");
 });
jQuery( "li.elgg-more > a" ).click(function() {
  jQuery( ".elgg-menu-site > li > ul" ).slideToggle( "fast", function() {  
  
  });
});
jQuery( ".elgg-topbar-dropdown" ).click(function() {
  jQuery( ".elgg-menu-topbar-alt ul" ).slideToggle( "fast", function() {  

  });
});
$(document).click(function(event) { 
    if(!$(event.target).closest('li.elgg-menu-item-account').length) {
        if($('.elgg-menu-topbar-alt ul').is(":visible")) {
            $('.elgg-menu-topbar-alt ul').hide()
        }
    }        
})
$(document).click(function(event) { 
    if(!$(event.target).closest('li.elgg-more').length) {
        if($('ul.elgg-menu-site-more').is(":visible")) {
            $('ul.elgg-menu-site-more').hide()
        }
    }        
})
</script>

