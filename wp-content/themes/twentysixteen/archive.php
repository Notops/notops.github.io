<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php
if (get_post_format() == 'link') {
?>
	<script type="text/javascript">

		$(document).ready(function () {
			$('div.plus').click(function () {
				$('div.ans' + $(this).attr('id')).toggle('slow');
			});
		});
	</script>
<? } ?>
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		<?if  (get_post_format() != 'link') {?>
			<div class="sys-top-links" style="padding-bottom:10px;">
				<a href="#" onclick="window.print();">Версия для печати</a>
			</div>
		<? }?>
		<?php if ( have_posts() ) : ?>
			<?php
			if (get_post_format() == 'link') {
			?>
			<table><tbody>
			<?}?>
			<?php
			// Start the Loop.
			if ((get_post_format() == 'gallery') ||(get_post_format() === false)) {
			?>
				<table class="sys-table">
					<tbody>
			<?}?>

			<? if (get_post_format() == 'image') {
				print_r('<div>
						<span style="color:#008080;">
							<strong>
								<em>
									<span style="font-size: 18px;">Специалисты клиники и графики работы</span>
								</em>
							</strong>
						</span>
					</div>
					<div class="personal">');
			}
			if(get_post_format() == 'link') {
				query_posts($query_string . '&order=DESC&posts_per_page=10');
			} else
			if (get_post_format() == 'chat') {
				query_posts($query_string . '&order=DESC&posts_per_page=3000');
			} else {
				query_posts($query_string . '&order=ASC&posts_per_page=3000');
			}
			//var_dump( get_post_format() );
			while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
					 get_template_part( 'template-parts/content', get_post_format() );
			// End the loop.
			endwhile;
	// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		if (get_post_format() == 'link') { ?>
			</tbody></table>
			<?php if (function_exists('wp_corenavi')) wp_corenavi();?>
			<?php echo do_shortcode('[contact-form-7 id="208" title="Онлайн-консультация"]'); ?>
		<?}
		if ((get_post_format() == 'gallery') ||(get_post_format() === false) ) {
			print_r('</tbody>');
			print_r('</table>');
		}
		if (get_post_format() == 'image') {
			print_r('</div>
					<div class="clear">  </div>
					<div align="center">
						<strong>I  </strong>
						<strong>смена: 8:00 – 14:00        </strong>
						<strong> II </strong>
						<strong>смена: 14:00 – 20:00</strong>
					</div>');
		}

		?>

		<div style="padding-top:20px;">
			<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
			<div class="yashare-auto-init" data-yashareType="button" data-yashareQuickServices="vkontakte,facebook,twitter"></div>
		</div>
		<div class="sys-top-links" style="padding-top:10px;">
			<a href="#top">Наверх</a>
		</div>

<?php get_footer(); ?>
