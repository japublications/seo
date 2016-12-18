<!-- Carousel -->
<?php $wl_theme_options = get_option('enigma_options_pro'); 
$side_interval = $wl_theme_options['side_interval']; ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" <?php if($wl_theme_options['side_pause']=="yes") { echo "data-pause='hover'"; } ?> data-interval="<?php echo $side_interval; ?>">
	<?php $all_posts = wp_count_posts( 'weblizar_slider')->publish;
	$args = array( 'post_type' => 'weblizar_slider','posts_per_page' =>$all_posts);        
	$slider = new WP_Query( $args );
	if( $slider->have_posts() )
	{ $t=1; ?>
	<div class="carousel-inner">
	<?php while ( $slider->have_posts() ) : $slider->the_post();  ?>
		<div class="item <?php if($t==1) { echo 'active'; } ?>">
				<?php if(has_post_thumbnail()):
					$defalt_arg =array('class'=>"img-responsive");
					the_post_thumbnail('home_slider_thumb', $defalt_arg); 
				endif; ?>
			<div class="container">
				<div class="carousel-caption">
					<div class="carousel-text">	
					<?php if(the_title('','','')) { ?>
					<h1 class="animated bounceInRight"><?php the_title(); ?></h1>
					<?php } ?>
					<ul class="list-unstyled carousel-list">
						<?php if(get_post_meta( get_the_ID(),'slider_desciption', true )) { ?>
						<li class="animated bounceInLeft"><?php echo get_post_meta( get_the_ID(),'slider_desciption', true ); ?></li>
						<?php } ?>
						</ul>
						<?php if(get_post_meta( get_the_ID(),'slider_button_text', true )) { ?>
						<a href="<?php echo get_post_meta( get_the_ID(),'slider_button_link', true );  ?>" class="enigma_blog_read_btn animated bounceInUp" <?php if(get_post_meta( get_the_ID(),'slider_button_target', true )) { echo "target='_blank'"; }?> ><?php echo get_post_meta( get_the_ID(),'slider_button_text', true ); ?></a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php $t++; endwhile; ?>
	</div>
	<ol class="carousel-indicators">
			<?php for($i=0; $i<$t-1; $i++) { ?>
			<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i==0) { echo 'class="active"'; } ?> ></li>
			<?php } ?>
	</ol><?php      
	} else { ?>        
	<div class="carousel-inner">
		<?php for($i=1; $i<=3; $i++) { ?>
		<div class="item <?php if($i==1) { echo 'active'; } ?>">
			<img src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/slide/slider-bg-<?php echo $i; ?>.jpg" >
			<div class="container">
				<div class="carousel-caption">
					<div class="carousel-text">
					   <h1 class="animated bounceInRight">Responsive Theme</h1>
					   <ul class="list-unstyled carousel-list">
							<li class="animated bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet</li>
						</ul>
						<a href="#" class="enigma_blog_read_btn animated bounceInUp">Read More</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>
	<!-- Indicators -->
	<ol class="carousel-indicators">
	<?php for($i=0; $i<3; $i++) { ?>
			<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i==0) { echo 'class="active"'; } ?> ></li>
	<?php } ?>
	</ol> 
  <?php } if($all_posts >= "2") { ?>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev" ><span class="glyphicon glyphicon-chevron-left" ></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  <?php } ?>
</div><!-- /.carousel --><!-- / Slider-->