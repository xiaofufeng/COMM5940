<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bolt - Bootstrap Agency Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php bloginfo("template_url") ?>/img/favicon.png" rel="icon">
  <link href="<?php bloginfo("template_url") ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php bloginfo("template_url") ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php bloginfo("template_url") ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php bloginfo("template_url") ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Bolt
    Template URL: https://templatemag.com/bolt-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="80" data-target="#thenavbar">

  <!-- Fixed navbar -->
  <div id="thenavbar" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#"><i class="fa fa-bolt"></i></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          
          <?php
						   wp_nav_menu(array(
							  'menu'              => 'primary',
							  'theme_location'    => 'primary',
							  'depth'             => 2,
							  'container'         => 'div',
							  'container_class'   => 'collapse navbar-collapse',
							  'container_id'      => 'bs-example-navbar-collapse-1',
							  'menu_class'        => 'nav navbar-nav',
							  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							  'walker'            => new wp_bootstrap_navwalker())
						   );
						  ?>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>