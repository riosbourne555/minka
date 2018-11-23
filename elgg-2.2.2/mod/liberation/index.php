<?php

if (elgg_is_logged_in())
{
//forward ('activity');  // funcion original que al loguearte te lleva a activity, fue sustituida por la que sigue.
forward ("super_dashboard/{$entity->guid}"); // esta funcion fue creada para que al logearse vaya al dashboard
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minka | Red Colaborativa</title>
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="mod/liberation/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="mod/liberation/css/style_0.css" />
    <!-- Owl Carousel Assets -->
    <link href="mod/liberation/css/owl.carousel.css" rel="stylesheet">
    <link href="mod/liberation/css/owl.theme.css" rel="stylesheet">


    <!-- Pixeden Icon Font -->
    <link rel="stylesheet" href="mod/liberation/css/Pe-icon-7-stroke.css">

    <!-- Font Awesome -->
    <link href="mod/liberation/css/font-awesome.min.css" rel="stylesheet">


    <!-- PrettyPhoto -->
    <link href="mod/liberation/css/prettyPhoto.css" rel="stylesheet">
    
    <!-- Favicon -->
    

    <!-- Style -->
    <link href="mod/liberation/css/style.css" rel="stylesheet">

    <link href="mod/liberation/css/animate.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="mod/liberation/css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
		<style>
		.black_overlay{
			display: none;
			position: absolute;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 200%;
			background-color: black;
			z-index:1001;
			-moz-opacity: 0.8;
			opacity:.80;
			filter: alpha(opacity=80);
		}
		.white_content {
			display: none;
			position: absolute;
			top: 14%;
			left: 28%;
			width: 41%;
			height: 90%;
			padding: 16px;
			
			
			z-index:1002;
			overflow: auto;
		}
	</style>


</head>

<body>
    <!-- PRELOADER -->
    <div class="spn_hol">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

 <!-- END PRELOADER -->

	    <div id="light" class="white_content">
    <center>
    <a href = "javascript:void(0)"
       onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"
       style="color:white; font-weight:bold;">
	Cerrar
    </a>
    </center>
    
     <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        
			
				<section class="main">
				<form class="form-4"  action="action/login" method="post">
				    
				    <?php
				    $ts = time();
				    $token = generate_action_token($ts);
				    ?>
				    
				    <h1>Ingresar</h1>
				    <p>
				        <label for="login">Usuario</label>
				        <input type="text" name="username" placeholder="Mi Usuario" required>
				    </p>
				    <p>
				        <label for="password">Clave</label>
				        <input type="password" name='password' placeholder="Mi Clave" required> 
				    </p>
				    
				<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>"/>
				<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />
				    <p>
				        <input type="submit" name="submit" value="Continue">
				    </p>       
				</form>​
			</section>
						
                    </div>
    
    
    </div>
	
		<div id="fade" class="black_overlay"></div>



 <!-- =========================
     START ABOUT US SECTION
============================== -->
    <section class="header parallax home-parallax page" id="HOME">
        <h2></h2>
        <div class="section_overlay">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="mod/liberation/images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- NAV -->
                            <li><a href="/">INICIO</a> </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container- -->
            </nav>

            <div class="container home-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                                <!-- LOGO -->
                            <img src="mod/liberation/images/logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="home_text">
                            <!-- TITLE AND DESC -->
                            <h1>Red</h1>
                            <p>Colaborativa para el sector Vitivinícola</br></p>

                            <div class="download-btn">
                            <!-- BUTTON -->
                                <a class="btn home-btn wow fadeInLeft" href="javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Ingresar</a>
                               
			        <a class="tuor btn wow fadeInRight" href="/register">¡ Regístrate !</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-4">
                        <div class="home-iphone">
                            <img src="mod/liberation/images/home.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END HEADER SECTION -->




    <section class="about page" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                 
                    <div class="section_title">
                        <h2>¿De que se trata Minka?</h2>
                        <p>Es un Software Online que permite obtener información del sector Vitivinícola a partir de los datos compartidos, también brinda la posibilidad de dar asesoramiento Online y gestionar los datos de tu propia actividad.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="inner_about_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->
                            <img src="mod/liberation/images/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- TITLE -->
                        <div class="inner_about_title">
                            <h2>Ventajas<br> de la Red Colaborativa</h2>
                            <p>Minka te acerca a Productores, Agrónomos, Enólogos e Investigadores del sector Vitivinícola, y a toda la información actualizada que ellos generan.</p>
                        </div>
                        <div class="inner_about_desc">

                            <!-- SINGLE DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1s">
                                <!-- ICON -->
                                <div><i class="pe-7s-timer"></i></div>
                                <!-- HEADING DESCRIPTION -->
                                <h3>Información al día</h3>
                                <p>Los nuevos métodos, investigaciones y experiencias te serviran en la mejorar de tus practicas habituales.</p>
                            </div>
                            <!-- END SINGLE DESC -->


                            <!-- SINGLE DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1.5s">
                                <!-- ICON -->
                                <div><i class="pe-7s-target"></i></div>
                                <!-- HEADING DESCRIPTION -->
                                <h3>Gestiona tus datos Online</h3>
                                <p>Minka mantendra tus datos a salvo para que los administres cuando quieras.</p>
                            </div>
                            <!-- END SINGLE DESC -->


                            <!-- SINGLE DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="2s">
                                <!-- ICON -->
                                <div><i class="pe-7s-stopwatch"></i></div>
                                <!-- HEADING DESCRIPTION -->
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit.</p>
                            </div>
                            <!-- END SINGLE DESC -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

  </section>
    


    
    
    <section class="download page" id="DOWNLOAD">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- DOWNLOAD NOW SECTION TITLE -->
                    <div class="section_title">
                        <h2>Open an account now!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    </div>
                    <!--END DOWNLOAD NOW SECTION TITLE -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="download_screen text-center wow fadeInUp" data-wow-duration="1s">
                        <img src="mod/liberation/images/download_screen.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END DOWNLOAD -->



<!-- =========================
     SCRIPTS 
============================== -->


    <script src="mod/liberation/js/jquery.min.js"></script>
    <script src="mod/liberation/js/bootstrap.min.js"></script>
    <script src="mod/liberation/js/owl.carousel.js"></script>
    <script src="mod/liberation/js/jquery.fitvids.js"></script>
    <script src="mod/liberation.js/smoothscroll.js"></script>
    <script src="mod/liberation/js/jquery.parallax-1.1.3.js"></script>
    <script src="mod/liberation/js/jquery.prettyPhoto.js"></script>
    <script src="mod/liberation/js/jquery.ajaxchimp.min.js"></script>
    <script src="mod/liberation/js/jquery.ajaxchimp.langs.js"></script>
    <script src="mod/liberation/js/wow.min.js"></script>
    <script src="mod/liberation/js/waypoints.min.js"></script>
    <script src="mod/liberation/js/jquery.counterup.min.js"></script>
    <script src="mod/liberation/js/script.js"></script>



</body>

</html>