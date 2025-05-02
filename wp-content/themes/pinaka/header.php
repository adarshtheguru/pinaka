<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Pinaka</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL; ?>/assets/css/main.css">
</head>

<body>
	<header>
		<div class="container pos-rel">
			<div class="row">
				<div id="comp-logo">
					<div class="pull-left col-2 col-xs-9 brand-logo">
						<a href="javascript:;" class="goto-home"><img
								src="<?php echo THEMEURL; ?>/app/images/logo.svg" class="img-responsive"
								data-event-category="Header" data-event-action="Click" data-event-name="Logo"></a>
					</div>
					<div class="col-10 col-xs-3 pull-right">
						<div class="pull-right menu-icon-mobile">
							<span class="bar1"></span>
							<span class="bar2"></span>
							<span class="bar3"></span>
						</div>
						<div class="col-12 lower">
							 <div class="nav-links">
								<?php
									wp_nav_menu(array(
									    'theme_location' => 'header-menu',
									    'menu_class'     => 'main-menu',
									    'container'      => 'nav',
									    'container_class'=> 'main-nav flex space-x-6',
									));
									?>
							</div>

      </div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-container">
				<a href="javascript:;" class="frmclose" data-event-category="Section" data-event-action="Click"
					data-event-name="Form Close">X</a>
			</div>
		</div>
	</header>
