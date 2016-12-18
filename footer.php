<!-- Footer Widget Secton -->
<div class="enigma_footer_widget_area">	
	<div class="container">
		<div class="row">
		<?php 
		if ( is_active_sidebar( 'footer-widget-area' ) ){ 
			dynamic_sidebar( 'footer-widget-area' );
		}else {  ?>
			<div class="col-md-3 col-sm-6 enigma_footer_widget_column">		
				<h3 class="enigma_footer_widget_title"><?php _e('Enigma','weblizar'); ?> <div class="enigma-footer-separator" id=""></div></h3>
				<h6><?php _e('Lorem ipsum dolor sit amet, no consequat ullamcorper nec, te commune constituto intellegebat eam.
					Soleat populo id nec. Est in altera vocibus, et vim iudico adolescens, mel no discere mediocritatem.
					Nec ei sale honestatis, graeco melius eruditi qui et, id nam mucius maiorum. Pri diceret ornatus cu,
					dico quas aliquando vix ea, vix impetus invidunt honestatis id. An his everti animal.','weblizar'); ?>
				</h6>
			</div>			
			<div class="col-md-3 col-sm-6 enigma_footer_widget_column">		
				<h3 class="enigma_footer_widget_title"><?php _e('Latest Post','weblizar'); ?><div class="enigma-footer-separator" id=""></div></h3>
				<div class="media enigma_recent_widget_post">
					<a class="enigma_recent_widget_post_move" href="#">
						<img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/member2.jpg"  class="enigma_recent_widget_post_img">
					</a>
					<div class="media-body">
						<h3><a href="#"><?php _e('Donec scelerisque minec lectus','weblizar'); ?></a></h3>
						<span class="enigma_recent_widget_post_date"><?php _e('Posted July 20, 2013','weblizar'); ?></span>
					</div>
				</div>				
				<div class="media enigma_recent_widget_post">					
					<a class="enigma_recent_widget_post_move" href="#">
						<img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/member2.jpg"  class="enigma_recent_widget_post_img">
					</a>
					<div class="media-body">
						<h3><a href="#"><?php _e('Donec scelerisque minec lectus','weblizar'); ?></a></h3>
						<span class="enigma_recent_widget_post_date"><?php _e('Posted July 20, 2013','weblizar'); ?></span>
					</div>
				</div>				
				<div class="media enigma_recent_widget_post">					
					<a class="enigma_recent_widget_post_move" href="#">
						<img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/member2.jpg"  class="enigma_recent_widget_post_img">
					</a>
					<div class="media-body">
						<h3><a href="#"><?php _e('Donec scelerisque minec lectus','weblizar'); ?></a></h3>
						<span class="enigma_recent_widget_post_date"><?php _e('Posted July 20, 2013','weblizar'); ?></span>
					</div>
				</div>				
			</div>			
			<div class="col-md-3 col-sm-6 enigma_footer_widget_column">		
				<h3 class="enigma_footer_widget_title"><?php _e('Flickr Photos','weblizar'); ?><div class="enigma-footer-separator" id=""></div></h3>
				<ul class="flickr-photos-list">
					<li><a href="http://farm8.staticflickr.com/7373/10412001266_483a1e4c9d_b.jpg"><img src="http://farm8.staticflickr.com/7373/10412001266_483a1e4c9d_s.jpg" alt="Jackie Martinez (#9963)"></a></li>
					<li><a href="http://farm4.staticflickr.com/3705/10278343103_dd92d24d07_b.jpg"><img src="http://farm4.staticflickr.com/3705/10278343103_dd92d24d07_s.jpg" alt="Tim Atlas - Lost in the Waiting Album Cover"></a></li>
					<li><a href="http://farm9.staticflickr.com/8552/10217169844_a83bb0c26f_b.jpg"><img src="http://farm9.staticflickr.com/8552/10217169844_a83bb0c26f_s.jpg" alt="Ortofon Concorde S-120 (#1211)"></a></li>
					<li><a href="http://farm4.staticflickr.com/3832/9391366956_eae44dee74_b.jpg"><img src="http://farm4.staticflickr.com/3832/9391366956_eae44dee74_s.jpg" alt="Horse #9119"></a></li>
					<li><a href="http://farm6.staticflickr.com/5529/9163716976_d5d1a0c052_b.jpg"><img src="http://farm6.staticflickr.com/5529/9163716976_d5d1a0c052_s.jpg" alt="5 241"></a></li>
					<li><a href="http://farm9.staticflickr.com/8266/8681566188_62b2ffa05e_b.jpg"><img src="http://farm9.staticflickr.com/8266/8681566188_62b2ffa05e_s.jpg" alt="Content Magazine x weblizar Salon Image Challenge 13 (#6456)"></a></li>
					<li><a href="http://farm9.staticflickr.com/8361/8436780884_2b2e984a1b_b.jpg"><img src="http://farm9.staticflickr.com/8361/8436780884_2b2e984a1b_s.jpg" alt="Nasty Ray (#1058)"></a></li>
					<li><a href="http://farm9.staticflickr.com/8472/8122661150_5f0dbf6c61_b.jpg"><img src="http://farm9.staticflickr.com/8472/8122661150_5f0dbf6c61_s.jpg" alt="Andrea Garcia / Fancy Made"></a></li>
					<li><a href="http://farm9.staticflickr.com/8196/8075637825_4febf52b7a_b.jpg"><img src="http://farm9.staticflickr.com/8196/8075637825_4febf52b7a_s.jpg" alt="Andrea Garcia / Fancy Made (#4427)"></a></li>
				</ul>
			</div>
			
			<div class="col-md-3 col-sm-6 enigma_footer_widget_column">		
				<h3 class="enigma_footer_widget_title"><?php _e('Contact Info','weblizar'); ?><div class="enigma-footer-separator" id=""></div></h3>
				<address>
				 <p><i class="fa fa-phone"></i>  <?php _e('25, Lorem Lis Street,','weblizar'); ?> </p>
				 <p><i class="fa fa-envelope"></i> <?php _e('Street California, US','weblizar'); ?></p>
				 <p><i class="fa fa-globe"></i> <?php _e('7878 456 3456','weblizar'); ?></p>
				<p> <i class="fa fa-clock-o"></i> <?php _e('5656 789 3456','weblizar'); ?></p>
				<p> <i class="fa fa-map-marker"></i> <a href="mailto:#">lizarweb@gmail.com</a></p>
				</address>
			</div>
			<?php } ?>
		</div>	
	</div>
</div>
<div class="enigma_footer_area">
	<div class="container">
		<div class="col-md-12">
			<?php $wl_theme_options=get_option('enigma_options_pro'); ?>
			<p class="enigma_footer_copyright_info wl_rtl"><?php if($wl_theme_options['footer_customizations']!='') { echo $wl_theme_options['footer_customizations']; } ?>&nbsp;<?php if($wl_theme_options['developed_by_text']!='') { echo $wl_theme_options['developed_by_text']; } ?>
				<a rel="nofollow" href="<?php if($wl_theme_options['developed_by_link']!='') { echo $wl_theme_options['developed_by_link']; } ?>" >
				<?php if($wl_theme_options['developed_by_weblizar_text']!='') { echo $wl_theme_options['developed_by_weblizar_text']; } ?></a>
			</p>
			<?php if($wl_theme_options['footer_section_social_media_enbled']=="on") { ?>
			<div class="enigma_footer_social_div">
				<ul class="social">
					<?php if($wl_theme_options['facebook_link']!='') { ?>
					<a href="<?php echo $wl_theme_options['facebook_link']; ?>" target="_blank"><li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></li></a>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<a href="<?php echo $wl_theme_options['twitter_link']; ?>" target="_blank"><li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></li></a>
					<?php } if($wl_theme_options['dribble_link']!='') { ?>
					<a href="<?php echo $wl_theme_options['dribble_link']; ?>" target="_blank"><li class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribble"><i class="fa fa-dribbble"></i></li></a>
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>
					<a href="<?php echo $wl_theme_options['linkedin_link']; ?>" target="_blank"><li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></li></a>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<a href="<?php echo $wl_theme_options['youtube_link']; ?>" target="_blank"><li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></li></a>
	                <?php } if($wl_theme_options['google_plus']!='') { ?>					
					<a href="<?php echo $wl_theme_options['google_plus']; ?>" target="_blank"><li class="Googleplus" data-toggle="tooltip" data-placement="top" title="Googleplus"><i class="fa fa-google"></i></li></a>
	                <?php } if($wl_theme_options['flicker_link']!='') { ?>
					<a href="<?php echo $wl_theme_options['flicker_link']; ?>" target="_blank"><li class="flicker" data-toggle="tooltip" data-placement="top" title="Flicker"><i class="fa fa-flickr"></i></li></a>
	                <?php } if($wl_theme_options['instagram_link']!='') { ?>					
					<a href="<?php echo $wl_theme_options['instagram_link']; ?>" target="_blank"><li class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></li></a>
	                <?php } ?>
				</ul>
			</div>
			<?php } ?>
		</div>
	</div>	
</div>
<?php // google_analytics code 
	if($wl_theme_options['google_analytics']!='') { echo "<script>".$wl_theme_options['google_analytics']."</script>"; } 
	//  custom css code
	if($wl_theme_options['custom_css']!='') { echo "<style>".$wl_theme_options['custom_css']."</style>"; } 
	?>
 <?php //get_template_part('style-switcher'); ?>	
<!-- /Footer Widget Secton -->
<!--Scroll To Top-->
<a href="#" title="Go Top" class="enigma_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top-->
</div>
<?php get_template_part('google', 'font'); ?>
<?php wp_footer(); ?>
</body>
</html>