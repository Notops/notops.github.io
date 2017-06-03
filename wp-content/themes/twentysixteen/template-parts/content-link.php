<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<tr><td>
<a name="<?php the_ID();?>"></a>
<div class="plus faq-ask" id="<?php the_ID();?>">
	<strong>* Вопрос: <?php the_title();?></strong>
	<span class="sys-info"><?php the_date('d-m-Y H:i');?></span>
</div>
<div class="ans<?php the_ID();?> faq-answer">
	<strong>* Ответ: </strong><div>
		<span style="font-family: Arial, Tahoma, Verdana, sans-serif; font-size: 13px; line-height: 18.1999988555908px; background-color: rgb(255, 255, 255);">
			<?php
			the_content();
			?>
		</span>
	</div>
</div>
	</td></tr>
