<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Playground
 */

?>

	<footer>
		<div class="footer__content flex items-center justify-center container py-3 px-5">
			<p><?= bloginfo('name') ?> <?= date('Y') ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<!-- Mainmenu mobile -->
<?php get_template_part('template-parts/components/mainmenu-mobile'); ?>
<!-- /Mainmenu mobile -->

<?php wp_footer(); ?>

</body>
</html>
