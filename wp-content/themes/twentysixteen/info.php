<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="main-banners">
	<div id="slider" class="slider">
		<div id="slider-navi" class="navi"></div>
		<div id="slider-items" class="items">
			<div class="left"><a href="art-s.perm.ru" class="slider_link" style="background-image:url(<?=get_template_directory_uri() ;?>/images/crop_slider_1454496905.jpg);"></a></div>
			<div class="left"><a href="http://art-s.perm.ru/module/priem" class="slider_link" style="background-image:url(<?=get_template_directory_uri() ;?>/images/crop_slider_1440427747.jpg);"></a></div>
			<div class="left"><a href="http://art-s.perm.ru/module/priem" class="slider_link" style="background-image:url(<?=get_template_directory_uri() ;?>/images/slider_1413347097.jpg);"></a></div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#slider").scrollable({ circular: true, items: "#slider-items", easing: "linear" }).navigator({ navi: "#slider-navi" }).autoscroll(6000);
		});
	</script>
</div>
<div class="kroshki-hleba">
	<a href="/" class="kroshka">Главная</a>
</div>

<div class="sys-top-links" style="padding-bottom:10px;"><a href="/#" target="_blank">Версия для печати</a></div>

<h2 class="reasons">
	Наши врачи</h2>
<div class="slider_p" id="slider">
	<a class="arrowleft" href="#" onclick="PrevSliderItem(); return false;"><!-- --></a> <a class="arrowright" href="#" onclick="NextSliderItem(); return false;"><!-- --></a>
	<div class="items-list">
		<div class="items-container">
			<?php
			if ( have_posts() ) : // если имеются записи в блоге.
				query_posts('cat=3&order=ASC');   // указываем ID рубрик, которые необходимо вывести.
				while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
					?>
					<?php
					$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true);
					?>
					<?if (get_post_thumbnail_id() != 31) { //исключить директора ?>
					<div class="oneitem">
						<div class="img">
							<a data-lightzap="lightbox" href="<?php echo $large_image_url[0]; ?>" title="<?php the_title(); ?>">
								<img alt="" src="<?php echo $large_image_url[0]; ?>" />
							</a>
						</div>
						<div class="info">
							<span class="name"><?php the_title(); ?></span>
							<?php the_content(); ?>
							<a class="add" href="module/priem/?id=<?php echo get_post_thumbnail_id();?>">Записаться</a>
						</div>
					</div>
						<? }?>
					<?php
				endwhile;  // завершаем цикл.
			endif;
			/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
			wp_reset_query();
			?>
			<div class="clear">
				&nbsp;</div>
		</div>
		<div class="clear">
			&nbsp;</div>
	</div>
	<div class="clear">
		&nbsp;</div>
</div>
<h2 class="reasons">
	10 причин Почему нас рекомендуют</h2>
<ol class="reasons">
	<li>
		<div class="img">
			<img alt="" src="<?=get_template_directory_uri() ;?>/images/garan.png" /></div>
		<span class="name">3 года гарантии</span>
		<div class="txt">
			Клиника современной стоматологии АРТ С дает гарантию 3 года на проведенные работы при соблюдении пациентом рекомендаций по уходу за зубами (проведении профессиональной гигиены полости 1 раз в пол-года) и выполнении рекомендуемого плана лечения.</div>
		<div class="clear">
			&nbsp;</div>
	</li>
	<li>
		<div class="img">
			<img alt="img" src="<?=get_template_directory_uri() ;?>/images/nopain.jpg" /></div>
		<span class="name">Безболезненное лечение</span>
		<div class="txt">
			Самые современные методы анестезии и &nbsp;анестетики последнего поколения гарантируют полное отсутствие боли при лечении, удалении и профессиональной чистке зубов.</div>
		<div class="clear">
			&nbsp;</div>
	</li>
	<li>
		<div class="img">
			<img alt="img" src="<?=get_template_directory_uri() ;?>/images/opit.jpg" /></div>
		<span class="name">Опыт врачей стоматологов 10 &ndash; 15 лет.</span>
		<div class="txt">
			Огромный опыт наших врачей подтверждается многочисленными сертификатами медицинских учебных центров Перми, Москвы и Санкт-Петербурга.</div>
		<div class="clear">
			&nbsp;</div>
	</li>
	<li>
		<div class="img">
			<img alt="img" src="<?=get_template_directory_uri() ;?>/images/mat.jpg" /></div>
		<span class="name">Эффективные и долговечные материалы</span>
		<div class="txt">
			&nbsp;Для пломбирования зубов используются высокоэстетичные светокомпозиты, позволяющие делать &laquo;невидимую&raquo; реставрацию. А для пломбирования каналов &ndash; система &laquo;Термафилл&raquo; и &quot;Гуттакор&quot; &nbsp;с очень высокой плотностью и герметичностью, что исключает возможность &nbsp;воспаления.</div>
		<div class="clear">
			&nbsp;</div>
	</li>
	<li>
		<div class="img">
			<img alt="img" src="<?=get_template_directory_uri() ;?>/images/diag.jpg" /></div>
		<span class="name">Точная диагностика</span>
		<div class="txt">
			Компьютерная радиовизиография и панорамный снимок всех зубов позволяют поставить максимально точный диагноз и провести соответствующее лечение.</div>
		<div class="clear">
			&nbsp;</div>
	</li>
	<li class="clear">
		&nbsp;</li>
	<li>
		<div class="img">
			<img alt="img" src="<?=get_template_directory_uri() ;?>/images/bezop.png" /></div>
		<span class="name">Гарантия безопасности</span>
		<div class="txt">
			Мы уделяем огромное внимание безопасности процесса лечения. Надежная система стерилизации инструментов и оборудования, программы &quot;Анти-ВИЧ и &quot;Анти-гепатит&quot; &nbsp;исключают любую возможность заражения пациента.</div>
		<div class="clear">
			&nbsp;</div>
	</li>
	<li>
		<div class="img">
			<img alt="img" src="<?=get_template_directory_uri() ;?>/images/oper.png" /></div>
		<span class="name">Оперативное протезирование</span>
		<div class="txt">
			Благодаря наличию собственной зуботехнической лаборатории мы сократили срок протезирования до 5 дней!</div>
		<div class="clear">
			&nbsp;</div>
	</li>
	<li>
		<div class="img">
			<img alt="img" src="<?=get_template_directory_uri() ;?>/images/service.jpg" /></div>
		<span class="name">Сервис и комфортная атмосфера</span>
		<div class="txt">
			В ожидании приема Вам предложат чай, кофе, новые журналы, а администраторы клиники, по вашему желанию, напомнят о предстоящем визите к врачу для контрольного осмотра.</div>
	</li>
	<li>
		<div class="img">
			<img alt="img" src="<?=get_template_directory_uri() ;?>/images/dostu.png" /></div>
		<span class="name">Доступные цены и акции</span>
		<div class="txt">
			В клинике действует гибкая система скидок. Для записавшихся через сайт- скидка 10% на первый прием, при лечении всей семьей- семейная скидка 10%. Для наших постоянных пациентов- интересные специальные предложения.&nbsp;</div>
		<div class="clear">
			&nbsp;</div>
	</li>
	<li>
		<div class="img">
			<img alt="img" src="<?=get_template_directory_uri() ;?>/images/dms.jpg" /></div>
		<span class="name">Обслуживание по полисам Добровольного Медицинского Страхования</span>
		<div class="txt">
			Мы работаем с такими &nbsp;страховыми компаниями &nbsp;Добровольного медицинского страхования, как Согласие, Согаз, Спасские ворота, Адонис, Ингосстрах.</div>
		<div class="clear">
			&nbsp;</div>
	</li>
</ol>
<div style="text-align: center;">
	&nbsp;</div>
<div style="text-align: center;">
	<span style="font-size:16px; color:#4e4e4e;"><span style="line-height: 1.2;">Клиника современной стоматологии ART &#39;S &ndash; это комфорт и гарантия качества лучшей стоматологии Перми.</span></span></div>
<div style="text-align: justify;">
	&nbsp;</div>
<div style="text-align: center;">
	<span style="font-size:16px;color:#4e4e4e;"><span style="line-height: 1.2;">Для того чтобы проконсультироваться и записаться на прием, позвоните нам по телефону <strong>(342) 229-84-73</strong>.</span></span></div>
<div style="text-align: justify;">
	&nbsp;</div>
<div style="text-align: center;">
	<span style="font-size:16px;color:#4e4e4e;">Наш адрес: Пермь, ул. Мильчакова, 30а</span></div>



<div class="sys-top-links" style="padding-top:10px;"><a href="#top">Наверх</a></div>
<div style="padding-top:20px;">
	<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
	<div class="yashare-auto-init" data-yashareType="button" data-yashareQuickServices="vkontakte,facebook,twitter"></div>
</div>
</div>
</div>
<?php get_footer(); ?>
