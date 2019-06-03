<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset')?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="<?php bloginfo('description')?>">
  <link rel="icon" href="<?php echo get_theme_file_uri('/img/favicon.png');?>">
  <title>
    <?php bloginfo('name');?> |
    <?php is_front_page() ? bloginfo('description') : wp_title();?>
  </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css.map" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
  <?php wp_head(); ?>
</head>
<body>
  <header class="bg-offical">
    <div class="container">
      <nav class="site_nav">
      <?php
      $pagen_template = get_page_template_slug();
      if($pagen_template == 'city_template.php'){?>
        
        <div class="logo_text">
        <h1><a href="<?php echo site_url()?>">Japan Rugby Special</a> </h1>
        <p class="pc">Things to do in the 12 cities <br>hosting the world cup matches</p>
        </div>
        <?php

        } else{ ?>
        <a class="brandto" href="https://www.timeout.com/tokyo?cid=rugbyjp" target="_blank">
         <!-- <img src="<?php echo get_theme_file_uri('/img/produceby-to.svg');?>" alt=""/> -->
         <object width="100px;" height="100px;" data="<?php echo get_theme_file_uri('/img/produceby.svg');?>" type="image/svg+xml"></object>
        </a>
        <?php } ?>
        <!-- <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div> -->
         <span id="nav-toggle" >&#9776;</span>
         <span id="closebtn" >&times;</span>
        <?php wp_nav_menu();?>
      </nav>
    </div>
  </header>
