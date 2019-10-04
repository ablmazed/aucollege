<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset')?>">
 
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico in the root directory -->

  <meta name="theme-color" content="#fafafa">
  <?php wp_head(); ?>
  
</head>

<body <?php body_class();?>>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
<div clas="wrapper">
  <header class="headsection">
    <div class="container">  

      <div class="header">

          
        <div class="logo">
          <img src="<?php echo get_template_directory_uri();?>/img/1.jpg">
          <h2>An Education Site</h2>
        </div>
         <div class="menu">
          <ul class="menusection"><li><a href="front-page.php">
            <?php wp_nav_menu();?></a></li></ul>
        </div>
       
      </div>

    </div><!-- End Container -->
  </header><!-- End Header -->