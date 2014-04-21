<?php
/**
 * Template Name: homepage
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
        	<div class="intro">
    			<h2><?php the_field('intro'); ?></h2>
   			</div>

			<div id="homepage-projects">
            	<h3>my work</h3>
            
           		<?php if(get_field('homepage_image_gallery')): $i=0; ?>
                
     
                <?php while(has_sub_field('homepage_image_gallery')): $i++; ?>
                						
                        <img src="<?php $image = get_sub_field('homepage_image'); echo $image['url'] ?>" />
                           
				<?php endwhile; ?>
                <?php endif; ?>
                
    		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>



