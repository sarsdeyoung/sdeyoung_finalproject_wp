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
                
                <?php
					$args = array( 'post_type' => 'project' );
					$projects = new WP_Query( $args );
				?>

                <?php if ( $projects -> have_posts() ) : ?>

			<?php /* Start the Loop */ ?>

        <?php while ( $projects -> have_posts() ) : $projects -> the_post(); ?>

            <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <div class="thumbnails"><?php the_post_thumbnail(); ?></div>
                </a>
            <?php endif; ?>

			<?php endwhile; ?>

			<?php sarahdeyoung_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

                
    		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>



