<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sarahdeyoung
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
        	<div id="footer-sidebar" class="secondary">
                <div id="footer-sidebar1">
                <?php
                	if(is_active_sidebar('footer-sidebar-1')){
                	dynamic_sidebar('footer-sidebar-1');
                }
                ?>
            </div>
        	<h1>All design and content by Sarah DeYoung &copy; 2014 </h1>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
