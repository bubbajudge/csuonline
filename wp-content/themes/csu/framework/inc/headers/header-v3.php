<?php global $minti_data; ?>
<?php
// Add transparent header class
$transparentClass = NULL;
if (!is_search() && !is_404() && !is_archive() && !is_author() && !is_home()) {
	if ( (get_post_meta( get_the_ID(), 'minti_titlebar', true ) == 'transparent' || get_post_meta( get_the_ID(), 'minti_titlebar', true ) == 'transparentimage') || (get_post_meta( get_the_ID(), 'minti_titlebar', true ) == 'default' && $minti_data['titlebar_layout'] == 'transparentimage')  ){
		$transparentClass = 'header-transparent';
	}
}
if (is_search() || is_404() || is_archive() || is_home()) {
	if ($minti_data['titlebar_layout'] == 'transparentimage'){
		$transparentClass = 'header-transparent';
	}
}
if(function_exists('is_woocommerce') && is_woocommerce()){
	if ($minti_data['titlebar_layout'] == 'transparentimage'){
		$transparentClass = 'header-transparent';
	}
}
if(function_exists('is_bbpress') && is_bbpress()){
	if ($minti_data['titlebar_layout'] == 'transparentimage'){
		$transparentClass = 'header-transparent';
	}
}

// Add dark header class if selected
if((rwmb_meta('minti_titlebar') != 'default' && rwmb_meta('minti_titlebar') != '') && !is_search() && !is_404() && !is_archive() && ! is_author() && !is_home() ){
	if( rwmb_meta('minti_headercolor') == 'dark' ){
		$headerClass = 'darkheader';
	} else {
		$headerClass = '';
	}
} else {
	if ($minti_data['titlebar_color'] == 'dark'){
		$headerClass =  'darkheader';
	} else {
		$headerClass =  '';
	}
}
?>

<header id="header" class="header header-v3 clearfix">
	<div class="navigation-wrap green_background">
		<div class="container">
			<div class="sixteen columns">

				<div id="logo" class="logo">
					<?php if($minti_data['media_logo']['url'] != "") { ?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($minti_data['media_logo']['url']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>" class="logo_standard" /></a>
						<?php if($minti_data['media_logo_retina']['url'] != '') { ?><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($minti_data['media_logo_retina']['url']); ?>" width="<?php echo esc_attr($minti_data['media_logo']['width']); ?>" height="<?php echo esc_attr($minti_data['media_logo']['height']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>" class="logo_retina" /></a><?php } ?>
					<?php } else { ?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html(bloginfo('name')); ?></a>
					<?php } ?>
				</div>

				<div id="slogan" class="clearfix">
					<a class="button custom_header custom_orange" href="#">Apply Now</a>
					<a class="button custom_header custom_white" href="#">Request Info</a>
					<a class="icon opacity_half" href="#"><img src="/wp-content/themes/csu/assets/svgs/icon_call.svg" /></a>
					<a class="icon opacity_half" href="#"><img src="/wp-content/themes/csu/assets/svgs/icon_email.svg" /></a>
					<a class="icon opacity_half" href="#"><img src="/wp-content/themes/csu/assets/svgs/icon_account.svg" /></a>
				</div>

			</div>
		</div>
		<div class="full_width white_background">
			<div class="container">
				<div class="sixteen columns">
				
				<div class="header-icons">
				<?php if($minti_data['switch_searchform'] != 0 || $minti_data['switch_shoppingicon'] != 0) { ?>
					<div class="header-icons-divider"></div>
				<?php } ?>
				<?php if($minti_data['switch_searchform'] == 1) { ?>
					<a href="#" id="search-btn"><i class="icon-minti-search"></i></a>
				<?php } ?>
				
				<?php if (class_exists('Woocommerce')) { ?>
					<?php if($minti_data['switch_shoppingicon'] == 1) { ?>
					<?php global $woocommerce; ?>
					<span class="cart-popup">
					<a href="<?php echo esc_url(wc_get_cart_url()); ?>" id="shopping-btn" class="cart-contents"><i class="icon-minti-cart"></i><?php if ( sizeof( $woocommerce->cart->cart_contents ) != 0 ) { ?><span><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span><?php } ?></a>
					</span>
					<?php } ?>
				<?php } ?>
				</div>	
				
					<div id="navigation" class="clearfix">
						<?php if(has_nav_menu('main_navigation')) {
							wp_nav_menu( array(
								'theme_location' => 'main_navigation',
								'container' =>false,
								'menu_id' => 'nav',
								'echo' => true,
								'menu_class' => 'menu',
								'before' => '',
								'after' => '',
								'link_before' => '',
								'link_after' => '',
								'depth' => 0
								)
							); 
						}
						?>
					</div>

					<?php if (class_exists('Woocommerce')) { ?>
						<?php if($minti_data['switch_shoppingicon'] == 1) { ?>
						<?php global $woocommerce; ?>
						<a href="<?php echo esc_url(wc_get_cart_url()); ?>" id="shopping-btn" class="cart-contents"><i class="icon-minti-cart"></i><?php if ( sizeof( $woocommerce->cart->cart_contents ) != 0 ) { ?><span><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span><?php } ?></a>
						<?php } ?>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>	
	
</header>

<div id="mobile-header">
	<div class="container">
	  <div class="content_container">	
		<div id="slogan" class=" ">
					<a class="icon opacity_half" href="#"><img src="/wp-content/themes/csu/assets/svgs/icon_call.svg" /></a>
					<a class="icon opacity_half" href="#"><img src="/wp-content/themes/csu/assets/svgs/icon_email.svg" /></a>
					<a class="icon opacity_half" href="#"><img src="/wp-content/themes/csu/assets/svgs/icon_account.svg" /></a>
					<a class="button custom_header custom_orange" href="#">Apply Now</a>
					<a class="button custom_header custom_white" href="#">Request Info</a>
		</div>
		<div class="mobile_header_divider"> </div>
		<div class="sixteen columns">
			<div id="mobile-logo" class="logo">
				<?php if($minti_data['media_logo']['url'] != "") { ?>
					<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($minti_data['media_logo']['url']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>" class="logo_standard" /></a>
					<?php if($minti_data['media_logo_retina']['url'] != '') { ?><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($minti_data['media_logo_retina']['url']); ?>" width="<?php echo esc_attr($minti_data['media_logo']['width']); ?>" height="<?php echo esc_attr($minti_data['media_logo']['height']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>" class="logo_retina" /></a><?php } ?>
				<?php } else { ?>
					<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html(bloginfo('name')); ?></a>
				<?php } ?>
			</div>
			<a href="#" id="mobile-navigation-btn"><i class="fa fa-bars"></i></a>
			<?php if (class_exists('Woocommerce')) { ?>
				<?php if($minti_data['switch_shoppingicon'] == 1) { ?>
					<?php global $woocommerce; ?>
					<a href="<?php echo esc_url(wc_get_cart_url()); ?>" id="mobile-shopping-btn" ><i class="icon-minti-cart"></i></a>
				<?php } ?>
			<?php } ?>
		</div>
	  </div>
	</div>
</div>

<div id="mobile-navigation">
	<div class="container">	
		<div class="sixteen columns">
			<?php wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_id' => 'mobile-nav')); ?>
			
			<?php if($minti_data['switch_searchformmobile'] == 1) { ?>
			<form action="<?php echo esc_url(home_url()) ?>" method="GET">
	      		<input type="text" name="s" value="" placeholder="<?php echo __('Search..', 'unicon') ?>"  autocomplete="off" />
			</form> 
			<?php } ?>	
		</div>
	</div>
</div>