<?php get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">	
	<div class="row enigma_blog_wrapper">
	<div class="col-md-12 testi-page">	
		<?php the_post(); ?>
	<div class="col-md-12 space">
	<div class="col-md-4">
			<?php if(has_post_thumbnail()): 
			the_post_thumbnail('home_test_thumb'); 
			endif; ?>
	</div>
	<div class="col-md-8">
			<p><?php echo get_post_meta( get_the_ID(),'description_meta_save', true ); ?></p>
			<h3><?php the_title(); ?></h3>
			<?php if(get_post_meta( get_the_ID(),'designation_meta_save', true )!=''){ ?>
			<h5>( <?php echo get_post_meta( get_the_ID(),'designation_meta_save', true ); ?> )</h5>
			<?php } ?>
	</div>
	</div>
					<div class="enigma_heading_title2" style="text-align:center;">
						<h3><?php _e('Other Testimonials', 'weblizar'); ?></h3>		
					</div>
<?php 		
		$data = array( 'post_type' => 'weblizar_testimonial','post__not_in' => array($post->ID)); 	
		$testi = new WP_Query( $data );		 
		if( $testi->have_posts() ){
		while ( $testi->have_posts() ) : 
		$testi->the_post(); ?>
		<div class="col-md-6 space">
		<div class="col-md-3">
			<?php if(has_post_thumbnail()): 
			the_post_thumbnail('home_test_thumb'); 
			endif; ?>
	</div>
	<div class="col-md-9">
			<p><?php echo get_post_meta( get_the_ID(),'description_meta_save', true ); ?></p>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if(get_post_meta( get_the_ID(),'designation_meta_save', true )!=''){ ?>
			<h5>( <?php echo get_post_meta( get_the_ID(),'designation_meta_save', true ); ?> )</h5>
			<?php } ?>
		</div>
	</div>
		<?php endwhile;
		} ?>
	</div>	
	</div> <!-- row div end here -->	
</div><!-- container div end here -->
<?php get_footer(); ?>