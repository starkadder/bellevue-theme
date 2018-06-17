<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo( 'name' ); ?>">
    <meta name="author" content="Tom Schweiger">

    <title>Bellevue Community Band</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Raleway Font --> 
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->								
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/band.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.min.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
  
    <?php wp_head();?>
  </head>

  <body>

    <div class="band-masthead">
      <div class="container">
        <nav class="band-nav">
<!-- Insert main menu here; -->								
<?php
   wp_nav_menu( array( 
   'theme_location' => 'main-menu', 
   'container_class' => 'main-menu-class' ) ); 
?>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="band-header">

           <h1 class="band-title">         
               <a href="<?php echo get_home_url();?>"  >
                 <?php echo get_bloginfo( 'name' ); ?>
               </a>
         </h1>
	 <p class="lead band-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>


