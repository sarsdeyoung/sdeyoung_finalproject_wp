<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sarahdeyoung
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
        
        	<div id="project-content">
                        <h1><?php the_field('project_title'); ?></h1>
                        
                        
                        <h2><?php the_field('project_type'); ?></h2>
                        
                        
                        <p><?php the_field('project_description'); ?></p>
                        
                        <?php if(get_field('project_gallery')): $i=0; ?>
                
     
                		<?php while(has_sub_field('project_gallery')): $i++; ?>
                						
                               <img src="<?php $image = get_sub_field('project_image'); echo $image['url'] ?>" />
                           
						<?php endwhile; ?>
                        <?php endif; ?>
                        
            </div>


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>