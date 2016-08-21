<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twenty20people
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<?php global $redux_demo; ?>
	<header>
		<div class="ud_header ">
			
			<nav class="navbar navbar-default navbar-fixed-top">
				  <div class="container">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <ul class="list-inline ud_head-info">
				      	<li><a href="http://<?php echo $redux_demo ['text-one-link']; ?>"><?php echo $redux_demo ['text-one']; ?></a></li>
				      	<li><a href=""><?php echo $redux_demo['text-two']; ?></a></li>
				      </ul>

				      <div class="ud_right-head-res-off">
					    <ul class="list-inline ud_head-social">
					    	<li><a href="<?php echo $redux_demo['facebook-link']; ?>"><i class="fa fa-facebook-official"></i></a></li>
					    	<li><a href="<?php echo $redux_demo['twitter-link']; ?>"><i class="fa fa-twitter"></i></a></li>
					    	<li><a href="<?php echo $redux_demo['instagram-link']; ?>"><i class="fa fa-instagram"></i></a></li>
					    </ul>
					    
					    <a class="ud_resident-login" href="<?php echo $redux_demo['login-link']; ?>">resident Logins</a>
					   </div>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse ud_head-menu" id="bs-example-navbar-collapse-1">
				      	<?php
							$args = array(
								'container' =>'false',
								'menu' => 'primary',
								'menu_class' => 'nav navbar-nav'
								);
							wp_nav_menu($args);
						?>
				    </div><!-- /.navbar-collapse -->

				    <div class="ud_right-head-res">
					    <ul class="list-inline ud_head-social">
					    	<li><a href="<?php echo $redux_demo['facebook-link']; ?>"><i class="fa fa-facebook-official"></i></a></li>
					    	<li><a href="<?php echo $redux_demo['twitter-link']; ?>"><i class="fa fa-twitter"></i></a></li>
					    	<li><a href="<?php echo $redux_demo['instagram-link']; ?>"><i class="fa fa-instagram"></i></a></li>
					    </ul>
					    
					    <a class="ud_resident-login" href="<?php echo $redux_demo['login-link']; ?>">resident Logins</a>
					</div>
				  </div><!-- /.container -->
				</nav>



		</div>		
	</header>
	<div id="content">
		

