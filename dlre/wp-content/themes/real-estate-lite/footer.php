<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real-estate-lite
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="col-center bottom-border">

	<div class="<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>three-col <?php else : ?>no-col<?php endif; ?>">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div>

	<div class="<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>three-col <?php else : ?>no-col<?php endif; ?>">
		<?php dynamic_sidebar( 'footer-2' ); ?>
	</div>

	<div class="<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>three-col <?php else : ?>no-col<?php endif; ?>">
		<?php dynamic_sidebar( 'footer-3' ); ?>
	</div>

	<div class="<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>three-col <?php else : ?>no-col<?php endif; ?>">
		<?php dynamic_sidebar( 'footer-4' ); ?>
	</div>
	</div><!--col center-->
	<div class="col-center">
		<div class="site-info">
		
		    <p>&copy; 2017 &nbsp;|&nbsp; David Lawrence Real Estate REAA 2008 &nbsp;|&nbsp; (03)382-6111 &nbsp;
            |&nbsp; <a href="www.davidlawrence.kiwi">www.davidlawrence.kiwi</a> &nbsp;|&nbsp; 
            <a href="mailto:office@davidlawrence.kiwi">office@davidlawrence.kiwi</a> &nbsp;|&nbsp; 
            Postal Address: 19 Lenton Street, Christchurch 8061</p>


		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
