<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php if (strpos(get_the_title(),'Контакты') === false) {?>

<tr>
	<td>
 	 <span class="sys-title">
			<a href="<?php echo get_permalink();?>"><?php the_title();?></a>
		</span>
		<p class="sys-text"> </p>
		<div></div>
		<p></p>
	</td>
</tr>

<?} else {?>

<tr>
	<td>
 	 <span class="sys-title">
			<a href="<?php echo get_permalink();?>"><?php the_title();?></a>
		</span>
	 <p class="sys-text"> </p>
	 <div></div>
	 <p></p>
 	</td>
</tr>
<? } ?>