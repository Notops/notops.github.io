<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="td-right">
	<div id="content">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		<div class="sys-top-links" style="padding-bottom:10px;">
			<a href="#" onclick="window.print();">Версия для печати</a>
		</div>		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// End of the loop.
		endwhile;
		?>
		<div style="padding-top:20px;">
			<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
			<div class="yashare-auto-init" data-yashareType="button" data-yashareQuickServices="vkontakte,facebook,twitter"></div>
		</div>
		<div class="sys-top-links" style="padding-top:10px;">
			<a href="#top">Наверх</a>
		</div>
	</div><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
