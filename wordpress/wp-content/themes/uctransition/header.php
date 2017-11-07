<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
	<meta charset="<? bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>
		<? bloginfo('name'); ?> | 
		<? is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Handlee" rel="stylesheet">
	<? wp_head(); ?>
</head>

<body <? body_class(); ?>>
	
	<div class="container-fluid">

		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<? echo home_url(); ?>"><img src="http://www.steve-denton.com/uctransitionimg/navbar-logo.png" alt="CCD Logo"></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<? bootstrap_nav(); ?>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>

		<!-- site header -->
		<? if ( is_front_page() ) {} else { ?>
		<header class="site-header text-center parallax-container" data-parallax="scroll" data-speed="0.4" natural-height="1080" natural-width="1920">
			<h1><a href="<? echo home_url(); ?>"><? bloginfo('name'); ?></a></h1>
			<h2><? bloginfo('description'); ?></h2>
		</header>
		<? } ?>

