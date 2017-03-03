<?php

if (elgg_is_logged_in())
{
forward ('activity');
}
?>
<!DOCTYPE HTML>
<!--
	
-->
<html>
	<head>
		<title>Minka | Red Colaborativa</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="mod/vrawa/js/jquery.min.js"></script>
		<script src="mod/vrawa/js/jquery.dropotron.min.js"></script>
		<script src="mod/vrawa/js/jquery.scrollgress.min.js"></script>
		<script src="mod/vrawa/js/skel.min.js"></script>
		<script src="mod/vrawa/js/skel-layers.min.js"></script>
		<script src="mod/vrawa/js/init.js"></script>
		 <link rel="stylesheet" type="text/css" href="mod/vrawa/css/form_style.css" />
			<link rel="stylesheet" href="mod/vrawa/css/skel.css" />
			<link rel="stylesheet" href="mod/vrawa/css/style.css" />
			<link rel="stylesheet" href="mod/vrawa/css/style-wide.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="mod/vrawa/css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="#">Minka | </a> Red Colaborativa</h1>
				<nav id="nav">
					<ul>
						<li><a href="register/">Regístrate</a></li>
						
						<li><a href="forgotpassword/" class="button">¿Olvisdate tu Clave?</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				
				<span class="logo"><img src="mod/vrawa/images/Logo1.png" alt="" /></span>
				<!--<h2>Minka</h2>-->
                                
			<section class="main">
				<form class="form-3" action="action/login" method="post">
<?php
$ts = time();
$token = generate_action_token($ts);
?>
				    <p class="clearfix">
				        <label for="login">Usuario</label>
				        <input type="text" name="username" id="login" placeholder="Usuario">
				    </p>
				    <p class="clearfix">
				        <label for="password">Clave</label>
				        <input type="password" name="password" id="password" placeholder="Clave"> 
				    </p>

<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>"/>
<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />
    
				    <p class="clearfix">
                                      <center>
				        <input type="submit" name="submit" value="Entrar">
                                          </center>
				    </p>       
				</form>​
			</section>
				
			</section>

		<!-- Main -->
			<section id="main" class="container">
		
				<section class="box special">
					<header class="major">
						<h2>Minka es un Sistema Colaborativo para el sector Vitivinícola
</br>
¿Que esperas para usarlo?
</h2>
					
					</header>
					<span class="image featured"><img src="mod/vrawa/images/pic01.jpg" alt="" /></span>
				</section>
						
				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-bolt accent2"></span>
							<h3>Poder</h3>
							<p>Es momento de tener poder sobre la información de tu actividad. ¡Con el conjunto de datos, conocimiento e información de todos lo actores del sector haremos crecer la Vitivinicultura! </p>
						</section>
						<section>
							<span class="icon major fa-area-chart accent3"></span>
							<h3>Informes</h3>
							<p>Los datos Compartidos por todos permiten generar informes de gran utilidad para el sector Vitivinícola</p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon major fa-cloud accent4"></span>
							<h3>Tus Datos Online</h3>
							<p>Todos los datos de tu actividad estaran disponible "Online" para cuando los necesites</p>
						</section>
						<section>
							<span class="icon major fa-lock accent5"></span>
							<h3>Seguridad</h3>
							<p>Minka cuida tus datos privados, puede ser accedido por los de más solo lo que Publicas en caracter de "Colaborativo"</p>
						</section>
					</div>
				</section>
					
				<div class="row">
					<div class="6u">

						<section class="box special">
							<span class="image featured"><img src="mod/vrawa/images/pic01.jpg" alt="" /></span>

							<h3>Featured Post #1</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo... </p>

							<ul class="actions">
								<li><a href="#" class="button alt">Leer Más</a></li>
							</ul>
						</section>
						
					</div>
					<div class="6u">

						<section class="box special">
							<span class="image featured"><img src="mod/vrawa/images/pic01A.jpg" alt="" /></span>

							<h3>Featured Post #2</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo...</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Leer Más</a></li>
							</ul>
						</section>

					</div>
				</div>

			</section>
			
		<!-- CTA -->
			<section id="cta">
				
				<h2>Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a?</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit!</p>
			      
				
			</section>
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					
				</ul>
				<ul class="copyright">
					<li>&copy; Elgg . All rights reserved.</li><li>Designed by: <a href="http://www.swsocialweb.com">SW Social Web</a></li>
				</ul>
			</footer>

	</body>
</html>