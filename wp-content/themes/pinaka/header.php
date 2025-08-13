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
<?php
$menu_items = wp_get_nav_menu_items('main-nav'); // Replace with your menu name
$menu_tree = [];

if ($menu_items) {
    // Step 2: Build Tree
    foreach ($menu_items as $item) {
        if (!$item->menu_item_parent) {
            $menu_tree[$item->ID] = [
                'title' => $item->title,
                'url'   => $item->url,
                'children' => []
            ];
        } else {
            $menu_tree[$item->menu_item_parent]['children'][] = [
                'title' => $item->title,
                'url'   => $item->url
            ];
        }
    }
}
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
						<a href="javascript:;" class="goto-home"><img src="<?php echo THEMEURL; ?>/app/images/logo.svg"
								class="img-responsive" data-event-category="Header" data-event-action="Click"
								data-event-name="Logo"></a>
					</div>
					<div class="col-10 col-xs-3 pull-right">
						<div class="pull-right menu-icon-mobile">
							<span class="bar1"></span>
							<span class="bar2"></span>
							<span class="bar3"></span>
						</div>
						<div class="col-12 lower">
							<div class="nav-links">
								<!-- <?php
									wp_nav_menu(array(
									    'theme_location' => 'header-menu',
									    'menu_class'     => 'main-menu',
									    'container'      => 'nav',
									    'container_class'=> 'main-nav flex space-x-6',
									));
									?> -->
									<div class="hamburger">
										<span class="bar1"></span>
										<span class="bar2"></span>
										<span class="bar3"></span>
									</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="hamburgerMenu">
			<div class="container">
				<div class="navBox">
					<div class="linkBox">
						<ul class="hamMenuA">
							<!-- <li>
								<a href="javascript:;">Home</a>
							</li>
							<li class="hasSubMenu">
								<a href="javascript:;">Services</a>
								<ul class="hamMenuB">
									<li>
										<a href="javascript:;">Service A</a>
									</li>
								</ul>
							</li>
							<li class="hasSubMenu">
								<a href="javascript:;">About Us</a>
								<ul class="hamMenuB">
									<li>
										<a href="javascript:;">About Us 1</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Case Study</a>
							</li> -->
							<ul class="hamMenuA">
							<?php foreach ($menu_tree as $item): ?>
								<li class="<?php echo !empty($item['children']) ? 'hasSubMenu' : ''; ?>">
									<a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['title']); ?></a>
									<?php if (!empty($item['children'])): ?>
										<ul class="hamMenuB">
											<?php foreach ($item['children'] as $child): ?>
												<li><a href="<?php echo esc_url($child['url']); ?>"><?php echo esc_html($child['title']); ?></a></li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>
							</ul>
						</ul>
					</div>
					<div class="addressBox">
						<div class="layer layerA">
                            <div class="title">Address</div>
                            <p class="address">
                                202, Vishnu Darshan Apartments,
                                Fergusson College Rd, Rge Path, Model Colony,
                                Shivajinagar, Pune, Maharashtra 411005
                            </p>
                            <a href="javascript:;" class="goldenLink">get Directions</a> &nbsp;<img src="<?php echo THEMEURL; ?>/app/images/goldenArrow.svg" alt="">
                        </div>
                        <div class="layer layerB">
                            <div class="title">Phone</div>
                            <div class="numbers">
                                <div><img width="20" src="<?php echo THEMEURL; ?>/app/images/indiaFlag.png" alt="" class="flag">&nbsp;&nbsp;<a href="tel:+917498044954" class="phone">91-7498044954</a></div>
                            </div>
                            <div class="numbers">
                                <div><img width="20" src="<?php echo THEMEURL; ?>/app/images/usaFlag.png" alt="" class="flag">&nbsp;&nbsp;<a href="tel:+13202896184" class="phone">1-3202896184</a></div>
                            </div>
                        </div>
                        <div class="layer layerC">
                            <div class="title">Email</div>
                            <a href="mailto:testtt" class="address">
                                sales@pinaka.digital
                            </a>
                        </div>
                        <div class="layer layerD">
                            <div class="title">Social with us</div>
                            <div class="icons">
                                <a href="javascript:;"> <img src="<?php echo THEMEURL; ?>/app/images/fb-b.svg" alt=""></a>
                                <a href="javascript:;"> <img src="<?php echo THEMEURL; ?>/app/images/linkedin-b.svg" alt=""></a>
                                <a href="javascript:;"> <img src="<?php echo THEMEURL; ?>/app/images/insta-b.svg" alt=""></a>
                                <a href="javascript:;"> <img src="<?php echo THEMEURL; ?>/app/images/twitter-b.svg" alt=""></a>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</nav>
	</header>