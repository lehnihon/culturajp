<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<nav class="navbar navbar-default
		<?php 
			if(!is_user_logged_in()):
				echo 'navbar-fixed-top';
			endif;
		?>">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</li>
				<li><a href="">Cadastrar</a></li>
				<li><a href="">Logar</a></li>
				<li><a href="">Sair</a></li>
			</ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div id="masthead"
		<?php 
			if(!is_user_logged_in()):
				echo 'style="padding-top:60px"';
			endif;
		?>>
		<header class="site-header container" role="banner" >
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<div class="pulse1"></div>
					<div class="pulse2"></div>
					<div class="icon"></div>
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/header_font.png"; ?>"/>
				</a>
			</div><!-- .site-branding -->
		</header><!-- #masthead -->
	</div>
	<div id="site-navigation">
		<?php get_template_part( 'navbar' ); ?>
	</div>
	<div id="content" class="site-content container">
