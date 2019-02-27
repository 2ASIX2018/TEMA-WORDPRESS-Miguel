<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="description" content='Plantilla WPCustom'/>

    <title><?php bloginfo('name')?></title>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"  />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/bootstrap/bootstrap.min.css"  />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/3-col-portfolio.css"  />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/submenu.css"  />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/calendario.css"  />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/form.css"  />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/imgs/favicon.ico" />
    
    <?php wp_head(); ?>
</head>

<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding-top:50px;";>
      <div class="container col-md-3">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </div>

      <div class="nav-menu col-md-9">    
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' )); ?>
      </div>
</nav>

</header>
