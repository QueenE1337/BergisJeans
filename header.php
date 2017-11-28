<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name') ?></title>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> <!-- Printing out the header menu -->
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1> <!-- "logo" with a link to the front page -->

	
	<?php wp_head() ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>

<header>


	<?php echo ('hello'); ?>

</header>
