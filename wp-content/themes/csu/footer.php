	<?php global $minti_data; ?>
	
	<?php if($minti_data['switch_footerwidgets'] == 1 && get_post_meta( get_the_ID(), 'minti_footerwidgets', true ) != 'hide') { ?>
		<?php $footercolumns = (!empty($minti_data['select_footercolumns'])) ? $minti_data['select_footercolumns'] : '4';
		
			if($footercolumns == '1'){
				$footercolumns_class = 'sixteen';
			} else if($footercolumns == '2'){
				$footercolumns_class = 'eight';
			} else if($footercolumns == '3'){
				$footercolumns_class = 'one-third';
			} else if($footercolumns == '4'){
				$footercolumns_class = 'four';
			} 

		?>

		<footer id="footer" class="green_background gold_border_top">
			<div class="container">
				<div class="<?php echo esc_attr($footercolumns_class); ?> columns"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets 1')); ?></div>
				<?php if($footercolumns == '2' || $footercolumns == '3' || $footercolumns == '4') { ?>
				<div class="<?php echo esc_attr($footercolumns_class); ?> columns"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets 2')); ?></div>
				<?php } ?>
				<?php if($footercolumns == '3' || $footercolumns == '4') { ?>
				<div class="<?php echo esc_attr($footercolumns_class); ?> columns"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets 3')); ?></div>
				<?php } ?>
				<?php if($footercolumns == '4') { ?>
				<div class="<?php echo esc_attr($footercolumns_class); ?> columns"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets 4')); ?></div>	
				<?php } ?>
			</div>
		</footer>
	<?php } ?>
	
	<?php if($minti_data['switch_copyright'] == 1 && get_post_meta( get_the_ID(), 'minti_footercopyright', true ) != 'hide') { ?>
	<div id="copyright" class="clearfix dark_green_background">
		<div class="container">
			
			<div class="sixteen columns">
				<div class="vc_col-sm-5 copyright_menu">
					<ul class="inline_wrapper white_text">
						<li class="inline_item"><a href="#">Site Map</a></li>
						<li class="inline_item"><a href="#">Privacy Information</a></li>
						<li class="inline_item"><a href="#">Disclaimer</a></li>
						<li class="inline_item"><a href="#">Equal Opportunity</a></li>
						<li class="inline_item"><a href="#">Search CSU</a></li>
						<li class="inline_item"><a href="#">Careers</a></li>
					</ul>
				</div>
				<div class="vc_col-sm-4 copyright_note white_text">
					<p>Continuing Education <strong>CSU Online</strong> is a division of the <a href="http://engagement.colostate.edu/" target="_blank">Office of Engagement</a></p>
				</div>
				<div class="vc_col-sm-3 copyright_logo">
					<img src="/wp-content/themes/csu/assets/svgs/logo_CSU_footer.svg" />
				</div>
			</div>
			
		</div>
	</div><!-- end copyright -->
	<?php } ?>
		
	</div><!-- end wrapall / boxed -->
	
	<?php if(isset($minti_data['select_backtotop']) && $minti_data['select_backtotop'] != 'hide') { ?>
	<div id="back-to-top"><a href="#"><i class="fa fa-chevron-up"></i></a></div>
	<?php } ?>
	
	<?php wp_footer(); ?>
</body>

</html>