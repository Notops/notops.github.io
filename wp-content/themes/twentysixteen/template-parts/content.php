<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php
$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true);
?>
<tr>
	<td>
		<span class="sys-title">
			<a href="<?php echo get_the_permalink();?>"><?php the_title();?></a>
		</span>
		<p class="sys-text">
			<?php if( has_post_thumbnail() ) {?>
				<img src="<?php echo $large_image_url[0]; ?>" width="100px" alt=""  style=" float:left; margin: 7px 7px 7px 0;">
			<?php } ?>
			<?php the_content('');?>
		</p>
	</td>
</tr>