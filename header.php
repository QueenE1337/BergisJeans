<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name') ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href=<?php bloginfo('stylesheet_url') ?>>
	<script src="https://use.fontawesome.com/8718023d1d.js"></script>
	<?php wp_head(); ?>
</head>

<body>

<header>
	<button id="hamburgerButton" type="button" onclick="toggleHamburger()">
		<span></span>
		<span></span>
		<span></span>
	</button>

	<a id="headerLogo" href="<?php echo home_url(); ?>"><img src="http://bergisjeans.dev/wp-content/uploads/2017/11/bergisLogo.png" alt="logo"></a> <!-- "logo" with a link to the front page -->

	<nav>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> <!-- Printing out the header menu -->
	</nav>
</header>


<script type="text/javascript">
	function toggleHamburger(){
		console.log("test");
		document.getElementById("hamburgerButton").classList.toggle("clicked");
	}
</script>
