<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="oneperson">
	<div class="img">
		<?php
		$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true);
		?>

		<a title="<?php the_title();?>" href="<?php echo $large_image_url[0]; ?>" data-lightzap="lightbox">
			<img src="<?php echo $large_image_url[0]; ?>" alt="">
		</a>
	</div>
	<div class="info">
		<span class="name"><?php the_title();?></span>
		<?php the_content();?>
		<?php if (strpos(get_the_title(),'Павлюк') === false) {?>
			<a class="add" href="/priem/?spec='<?php the_title();?>'">Записаться</a>
		<? } ?>
	</div>
</div>
