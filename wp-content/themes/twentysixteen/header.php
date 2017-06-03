<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-language" content="ru" />
	<meta name="url" content="http://www.art-s.perm.ru" />
	<meta name="robots" content="all" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" media="print" href="<?=get_template_directory_uri() ;?>/css/print.css" />
</head>

<body>
<a name="top"></a>		<div id="all">
	<div id="header">
		<a href="/"><img src="<?=get_template_directory_uri() ;?>/images/logo.png" width="186" height="250" class="png logo" alt="ART`S - Клиника современной стоматологии" title="ART`S - Клиника современной стоматологии" /></a>
		<a href="/priem" class="appointment"><div class="appointment-padding">Записаться на приём</div></a>
		<div class="address"><span>г. Пермь, ул. Мильчакова 30а</span> <span>тел (342) 229-84-73</span></div>
	</div>

	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td>
				<div class="td-left">
					<div id="menu">
					<?php
						$menuParameters = array(
							'menu'            => 'Top',
							'container'       => false,
							'menu_class'      => 'menu',
							'echo'            => false,
							'items_wrap'      => '%3$s',
							'depth'           => 1,
							'link_before'     => "<div class='menu-lnk-padding'>",
							'link_after'      => "</div>",
						);
					echo strip_tags(wp_nav_menu( $menuParameters ), '<a><div>' );
					?>
<!--
						<a href="/" class="menu-lnk" target="_self"><div class="menu-lnk-padding">О клинике</div></a>
						<a href="/uslugi" class="menu-lnk" target="_self"><div class="menu-lnk-padding">Услуги</div></a>
						<a href="/skidka" class="menu-lnk" target="_self"><div class="menu-lnk-padding">Скидки и предложения</div></a>
						<a href="/otsyw" class="menu-lnk" target="_self"><div class="menu-lnk-padding">Отзывы о клинике</div></a>
						<a href="/contacts" class="menu-lnk" target="_self"><div class="menu-lnk-padding">Контакты</div></a>
						<a href="/price" class="menu-lnk" target="_self"><div class="menu-lnk-padding">Цены</div></a>
						<a href="/personal" class="menu-lnk" target="_self"><div class="menu-lnk-padding">Персонал</div></a>
						<a href="/otvety" class="menu-lnk" target="_self"><div class="menu-lnk-padding">Онлайн-консультация</div></a>
						<a href="/lis" class="menu-lnk" target="_self"><div class="menu-lnk-padding">Лицензии клиники</div></a>
						-->
						<div class="clear"></div>
					</div>
				</div>
				<div class="td-right">
					<div id="content">
					<? if (is_front_page()) {?>
						<div class="main_links">
							<?php
							if ( have_posts() ) : // если имеются записи в блоге.
								query_posts('cat=5&order=ASC');   // указываем ID рубрик, которые необходимо вывести.
								while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
									?>
									<?php
									$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true);
									?>
									<?if ((get_the_id() != 88) && (get_the_id() != 100)){ //исключить директора ?>
									<a class="main-link" href="<?php the_permalink(); ?>">
										<div class="img">
											<img width="120" height="116" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?php echo $large_image_url[0]; ?>">
										</div>
										<span class="name"><?php the_title(); ?></span>
									</a>
									<?php }?>
								<?php
								endwhile;  // завершаем цикл.
							endif;
							/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
							wp_reset_query();
							?>
						</div>
					<? }?>