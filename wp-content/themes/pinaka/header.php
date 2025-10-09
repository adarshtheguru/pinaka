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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">
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
						<!-- <div class="pull-right menu-icon-mobile hidden-xs">
							<span class="bar1"></span>
							<span class="bar2"></span>
							<span class="bar3"></span>
						</div> -->
						<div class="hamburger pull-right">
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
						<div class="service-list">
							<h2 class="title"><a href="<?php echo site_url('/service'); ?>">Services</a></h2>
							<div class="service-list-menu">
								<div class="service-menu-wrap">
									<h3 class="title">Performance</h3>
									<ul>
										<li>
											<a href="<?php echo site_url('/services/media-strategy'); ?>"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4.86134C0.0506776 4.86396 0.101355 4.8692 0.151693 4.8692C3.559 4.86953 9.96596 4.86953 13.3733 4.86953C13.4219 4.86953 13.4709 4.86953 13.5443 4.86953C12.3196 3.68693 11.1156 2.52432 9.92005 1.37023C10.2323 1.06803 10.5306 0.77959 10.8197 0.5C12.5434 2.1641 14.2756 3.83705 16 5.5018C14.28 7.16262 12.5498 8.83328 10.8237 10.5C10.5425 10.2214 10.2479 9.92968 9.94589 9.63042C11.1247 8.49207 12.3305 7.32782 13.5365 6.16357C13.5307 6.15276 13.525 6.14194 13.5195 6.13112C13.475 6.13112 13.4304 6.13112 13.3859 6.13112C9.97004 6.13112 3.55458 6.13113 0.138768 6.13145C0.0925123 6.13145 0.0462562 6.1367 0.000340283 6.13932C0.000340283 5.71322 0 5.28744 0 4.86134Z" fill="url(#paint0_linear_2267_333)"/>
<defs>
<linearGradient id="paint0_linear_2267_333" x1="3" y1="5.5" x2="16" y2="5.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#003E63"/>
<stop offset="1" stop-color="#0D669C"/>
</linearGradient>
</defs>
</svg> 
Media Strategy</a>
										</li>
										<li>
											<a href="<?php echo site_url('/services/digital-social-advertising'); ?>"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4.86134C0.0506776 4.86396 0.101355 4.8692 0.151693 4.8692C3.559 4.86953 9.96596 4.86953 13.3733 4.86953C13.4219 4.86953 13.4709 4.86953 13.5443 4.86953C12.3196 3.68693 11.1156 2.52432 9.92005 1.37023C10.2323 1.06803 10.5306 0.77959 10.8197 0.5C12.5434 2.1641 14.2756 3.83705 16 5.5018C14.28 7.16262 12.5498 8.83328 10.8237 10.5C10.5425 10.2214 10.2479 9.92968 9.94589 9.63042C11.1247 8.49207 12.3305 7.32782 13.5365 6.16357C13.5307 6.15276 13.525 6.14194 13.5195 6.13112C13.475 6.13112 13.4304 6.13112 13.3859 6.13112C9.97004 6.13112 3.55458 6.13113 0.138768 6.13145C0.0925123 6.13145 0.0462562 6.1367 0.000340283 6.13932C0.000340283 5.71322 0 5.28744 0 4.86134Z" fill="url(#paint0_linear_2267_333)"/>
<defs>
<linearGradient id="paint0_linear_2267_333" x1="3" y1="5.5" x2="16" y2="5.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#003E63"/>
<stop offset="1" stop-color="#0D669C"/>
</linearGradient>
</defs>
</svg> 
Digital Social Marketing</a>
										</li>
									</ul>
								</div>
								<div class="service-menu-wrap">
									<h3 class="title">Organic Marketing</h3>
									<ul>
										<li>
											<a href="<?php echo site_url('/services/new-age-organic-search'); ?>"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4.86134C0.0506776 4.86396 0.101355 4.8692 0.151693 4.8692C3.559 4.86953 9.96596 4.86953 13.3733 4.86953C13.4219 4.86953 13.4709 4.86953 13.5443 4.86953C12.3196 3.68693 11.1156 2.52432 9.92005 1.37023C10.2323 1.06803 10.5306 0.77959 10.8197 0.5C12.5434 2.1641 14.2756 3.83705 16 5.5018C14.28 7.16262 12.5498 8.83328 10.8237 10.5C10.5425 10.2214 10.2479 9.92968 9.94589 9.63042C11.1247 8.49207 12.3305 7.32782 13.5365 6.16357C13.5307 6.15276 13.525 6.14194 13.5195 6.13112C13.475 6.13112 13.4304 6.13112 13.3859 6.13112C9.97004 6.13112 3.55458 6.13113 0.138768 6.13145C0.0925123 6.13145 0.0462562 6.1367 0.000340283 6.13932C0.000340283 5.71322 0 5.28744 0 4.86134Z" fill="url(#paint0_linear_2267_333)"/>
<defs>
<linearGradient id="paint0_linear_2267_333" x1="3" y1="5.5" x2="16" y2="5.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#003E63"/>
<stop offset="1" stop-color="#0D669C"/>
</linearGradient>
</defs>
</svg> Organic Search</a>
										</li>
										<li>
											<a href="<?php echo site_url('/services/social-media-managment'); ?>"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4.86134C0.0506776 4.86396 0.101355 4.8692 0.151693 4.8692C3.559 4.86953 9.96596 4.86953 13.3733 4.86953C13.4219 4.86953 13.4709 4.86953 13.5443 4.86953C12.3196 3.68693 11.1156 2.52432 9.92005 1.37023C10.2323 1.06803 10.5306 0.77959 10.8197 0.5C12.5434 2.1641 14.2756 3.83705 16 5.5018C14.28 7.16262 12.5498 8.83328 10.8237 10.5C10.5425 10.2214 10.2479 9.92968 9.94589 9.63042C11.1247 8.49207 12.3305 7.32782 13.5365 6.16357C13.5307 6.15276 13.525 6.14194 13.5195 6.13112C13.475 6.13112 13.4304 6.13112 13.3859 6.13112C9.97004 6.13112 3.55458 6.13113 0.138768 6.13145C0.0925123 6.13145 0.0462562 6.1367 0.000340283 6.13932C0.000340283 5.71322 0 5.28744 0 4.86134Z" fill="url(#paint0_linear_2267_333)"/>
<defs>
<linearGradient id="paint0_linear_2267_333" x1="3" y1="5.5" x2="16" y2="5.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#003E63"/>
<stop offset="1" stop-color="#0D669C"/>
</linearGradient>
</defs>
</svg> Social Media Marketing</a>
										</li>
									</ul>
								</div>
								<div class="service-menu-wrap">
									<h3 class="title">Tech & Development</h3>
									<ul>
										<li>
											<a href="<?php echo site_url('/services/website-design-development'); ?>"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4.86134C0.0506776 4.86396 0.101355 4.8692 0.151693 4.8692C3.559 4.86953 9.96596 4.86953 13.3733 4.86953C13.4219 4.86953 13.4709 4.86953 13.5443 4.86953C12.3196 3.68693 11.1156 2.52432 9.92005 1.37023C10.2323 1.06803 10.5306 0.77959 10.8197 0.5C12.5434 2.1641 14.2756 3.83705 16 5.5018C14.28 7.16262 12.5498 8.83328 10.8237 10.5C10.5425 10.2214 10.2479 9.92968 9.94589 9.63042C11.1247 8.49207 12.3305 7.32782 13.5365 6.16357C13.5307 6.15276 13.525 6.14194 13.5195 6.13112C13.475 6.13112 13.4304 6.13112 13.3859 6.13112C9.97004 6.13112 3.55458 6.13113 0.138768 6.13145C0.0925123 6.13145 0.0462562 6.1367 0.000340283 6.13932C0.000340283 5.71322 0 5.28744 0 4.86134Z" fill="url(#paint0_linear_2267_333)"/>
<defs>
<linearGradient id="paint0_linear_2267_333" x1="3" y1="5.5" x2="16" y2="5.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#003E63"/>
<stop offset="1" stop-color="#0D669C"/>
</linearGradient>
</defs>
</svg> Website Development</a>
										</li>
										<li>
											<a href="<?php echo site_url('/services/website-design-development'); ?>"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4.86134C0.0506776 4.86396 0.101355 4.8692 0.151693 4.8692C3.559 4.86953 9.96596 4.86953 13.3733 4.86953C13.4219 4.86953 13.4709 4.86953 13.5443 4.86953C12.3196 3.68693 11.1156 2.52432 9.92005 1.37023C10.2323 1.06803 10.5306 0.77959 10.8197 0.5C12.5434 2.1641 14.2756 3.83705 16 5.5018C14.28 7.16262 12.5498 8.83328 10.8237 10.5C10.5425 10.2214 10.2479 9.92968 9.94589 9.63042C11.1247 8.49207 12.3305 7.32782 13.5365 6.16357C13.5307 6.15276 13.525 6.14194 13.5195 6.13112C13.475 6.13112 13.4304 6.13112 13.3859 6.13112C9.97004 6.13112 3.55458 6.13113 0.138768 6.13145C0.0925123 6.13145 0.0462562 6.1367 0.000340283 6.13932C0.000340283 5.71322 0 5.28744 0 4.86134Z" fill="url(#paint0_linear_2267_333)"/>
<defs>
<linearGradient id="paint0_linear_2267_333" x1="3" y1="5.5" x2="16" y2="5.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#003E63"/>
<stop offset="1" stop-color="#0D669C"/>
</linearGradient>
</defs>
</svg> UX/UI Designs</a>
										</li>
									</ul>
								</div>
								<div class="service-menu-wrap">
									<h3 class="title">PR Services</h3>
									<ul>
										<li>
											<a href="<?php echo site_url('/services/public-relations-influencer'); ?>"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4.86134C0.0506776 4.86396 0.101355 4.8692 0.151693 4.8692C3.559 4.86953 9.96596 4.86953 13.3733 4.86953C13.4219 4.86953 13.4709 4.86953 13.5443 4.86953C12.3196 3.68693 11.1156 2.52432 9.92005 1.37023C10.2323 1.06803 10.5306 0.77959 10.8197 0.5C12.5434 2.1641 14.2756 3.83705 16 5.5018C14.28 7.16262 12.5498 8.83328 10.8237 10.5C10.5425 10.2214 10.2479 9.92968 9.94589 9.63042C11.1247 8.49207 12.3305 7.32782 13.5365 6.16357C13.5307 6.15276 13.525 6.14194 13.5195 6.13112C13.475 6.13112 13.4304 6.13112 13.3859 6.13112C9.97004 6.13112 3.55458 6.13113 0.138768 6.13145C0.0925123 6.13145 0.0462562 6.1367 0.000340283 6.13932C0.000340283 5.71322 0 5.28744 0 4.86134Z" fill="url(#paint0_linear_2267_333)"/>
<defs>
<linearGradient id="paint0_linear_2267_333" x1="3" y1="5.5" x2="16" y2="5.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#003E63"/>
<stop offset="1" stop-color="#0D669C"/>
</linearGradient>
</defs>
</svg> Public Relations & Influencer</a>
										</li>
										
									</ul>
								</div>
								<div class="service-menu-wrap">
									<h3 class="title">Brand Design</h3>
									<ul>
										<li>
											<a href="https://houseofhues.co" target="_blank"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4.86134C0.0506776 4.86396 0.101355 4.8692 0.151693 4.8692C3.559 4.86953 9.96596 4.86953 13.3733 4.86953C13.4219 4.86953 13.4709 4.86953 13.5443 4.86953C12.3196 3.68693 11.1156 2.52432 9.92005 1.37023C10.2323 1.06803 10.5306 0.77959 10.8197 0.5C12.5434 2.1641 14.2756 3.83705 16 5.5018C14.28 7.16262 12.5498 8.83328 10.8237 10.5C10.5425 10.2214 10.2479 9.92968 9.94589 9.63042C11.1247 8.49207 12.3305 7.32782 13.5365 6.16357C13.5307 6.15276 13.525 6.14194 13.5195 6.13112C13.475 6.13112 13.4304 6.13112 13.3859 6.13112C9.97004 6.13112 3.55458 6.13113 0.138768 6.13145C0.0925123 6.13145 0.0462562 6.1367 0.000340283 6.13932C0.000340283 5.71322 0 5.28744 0 4.86134Z" fill="url(#paint0_linear_2267_333)"/>
<defs>
<linearGradient id="paint0_linear_2267_333" x1="3" y1="5.5" x2="16" y2="5.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#003E63"/>
<stop offset="1" stop-color="#0D669C"/>
</linearGradient>
</defs>
</svg> Branding</a>
										</li>
										<li>
											<a href="<?php echo site_url('/services/graphic-designs-motion-graphic'); ?>"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4.86134C0.0506776 4.86396 0.101355 4.8692 0.151693 4.8692C3.559 4.86953 9.96596 4.86953 13.3733 4.86953C13.4219 4.86953 13.4709 4.86953 13.5443 4.86953C12.3196 3.68693 11.1156 2.52432 9.92005 1.37023C10.2323 1.06803 10.5306 0.77959 10.8197 0.5C12.5434 2.1641 14.2756 3.83705 16 5.5018C14.28 7.16262 12.5498 8.83328 10.8237 10.5C10.5425 10.2214 10.2479 9.92968 9.94589 9.63042C11.1247 8.49207 12.3305 7.32782 13.5365 6.16357C13.5307 6.15276 13.525 6.14194 13.5195 6.13112C13.475 6.13112 13.4304 6.13112 13.3859 6.13112C9.97004 6.13112 3.55458 6.13113 0.138768 6.13145C0.0925123 6.13145 0.0462562 6.1367 0.000340283 6.13932C0.000340283 5.71322 0 5.28744 0 4.86134Z" fill="url(#paint0_linear_2267_333)"/>
<defs>
<linearGradient id="paint0_linear_2267_333" x1="3" y1="5.5" x2="16" y2="5.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#003E63"/>
<stop offset="1" stop-color="#0D669C"/>
</linearGradient>
</defs>
</svg> Graphic & Motion Designs</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- <div class="layer layerA">
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
                        </div> -->
					</div>
				</div>
			</div>
		</nav>
	</header>