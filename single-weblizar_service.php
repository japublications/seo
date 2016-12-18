<?php get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">	
	<div class="row enigma_blog_wrapper">
	<div class="col-md-12">	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?> >								
				<div class="post-content-wrap">
					<?php if(has_post_thumbnail()): ?>
					<div class="enigma_blog_thumb_wrapper_showcase">						
						<div class="enigma_blog-img">
							<?php $class=array('class'=>'enigma_img_responsive'); ?>
							<?php the_post_thumbnail('blog_2c_thumb', $class); ?>			
						</div>
						<?php if(!is_single()) { ?>
						<div class="enigma_blog_thumb_wrapper_showcase_overlay">
							<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
								<div class="enigma_blog_thumb_wrapper_showcase_icons">
									<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php endif; ?>
					<div class="enigma_fuul_blog_detail_padding">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>					
					<?php the_content( __( 'Read More' , 'weblizar' ) ); ?>					
					</div>
				</div>
			</div>			
		<div class="push-right"><hr class="blog-sep header-sep"></div>
		<?php endwhile; endif; ?>
	</div>
	</div> <!-- row div end here -->	
</div><!-- container div end here -->
<?php get_footer(); ?>