<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elipsled
 */

get_header();
?>
<section class="promo">
    <div class="wrapper promo-container">
       
        <div class="promo-content-wrapper">
            <h1 class="visually-hidden">Элипслед - лучшие светодиодные лампы для животноводства</h1>
            <h2 class="section-heading"><span class="text-underline"> У нас вы найдете лучшие <br> светодиодные лампы <br> для животоводства</span></h2>
            <p class="section-text">Оставьте нам свой номер, <br> и получите <span> бесплатный</span> рассчет <br> специально для вас!</p>
            <div class="promo-form-wrapper">
                <form action="post" class="promo-form">
                    <input type="tel" class="promo-form-tel" title="Ваш телефон" placeholder="7(XXX) XXX XX XX">
                    <input type="submit" class="promo-form-btn" value="Отправить">
                </form>
            </div>
        </div>
         <div class="promo-img-wrapper">
            <img src="<?php bloginfo( 'template_directory' ) ?>/img/promo-leds.png" alt="leds photo" class="promo-img" width="993" height="738">
        </div>
    </div>
</section>
<section class="about-us">
    <div class="about-us-wrapper">
        <h2 class="section-heading"><span class="text-underline">Расскажем вам немного о себе</span></h2>
        <p class="section-text">Мы ценим ваше время, по этому мы постараемся <br>рассказать о <span>главном вкратце!</span></p>
        <div class="about-us-img">
            <img src="<?php bloginfo( 'template_directory' ) ?>/img/About-us-lamp.png" alt="lamp picture" width="397" height="448">
        </div>
        <div class="about-us-item about-us-item-1">
            <img src="<?php bloginfo( 'template_directory' ) ?>/img/1.png" alt="number1" width="21" height="41">
            <p>Наша компания была основана в 2015 году, название ей «ЭлипсЛед». Занимаемся мы производством светильников для животноводства.</p>
        </div>
        <div class="about-us-item about-us-item-2">
            <img src="<?php bloginfo( 'template_directory' ) ?>/img/2.png" alt="number2">
            <p>Работаем мы исключительно на собственном оборудовании и только с качественным сырьем.</p>
        </div>
        <div class="about-us-item about-us-item-3">
            <img src="<?php bloginfo( 'template_directory' ) ?>/img/3.png" alt="number3">
            <p>С помощью команды наших специалистов <br>мы смогли добиться одного из самых высоких уровней качества светодиодных светильников <br>для свиноводства, КРС, выращивания грибов!</p>
        </div>
    </div>
</section>
<section class="partners">
    <div class="wrapper partners-container">
        
        <h2 class="section-heading"><span class="text-underline">Наши партнеры <br>по бизнесу</span></h2>
        <p class="section-text">Хотим рассказать вам с кем мы сотрудничаем, и кто нам <span>доверяет</span></p>
        
        <img src="<?php bloginfo( 'template_directory' ) ?>/img/partners-img/1.png" class="partners-item partners-item-1" alt="ostankino logo">
        <img src="<?php bloginfo( 'template_directory' ) ?>/img/partners-img/2.png" class="partners-item partners-item-2" alt="miratorg logo">
        <img src="<?php bloginfo( 'template_directory' ) ?>/img/partners-img/3.png" class="partners-item partners-item-3" alt="agro-belogorye logo">
        <img src="<?php bloginfo( 'template_directory' ) ?>/img/partners-img/4.png" class="partners-item partners-item-4" alt="komos group logo">
        <img src="<?php bloginfo( 'template_directory' ) ?>/img/partners-img/5.png" class="partners-item partners-item-5" alt="promagro logo">
        <img src="<?php bloginfo( 'template_directory' ) ?>/img/partners-img/6.png" class="partners-item partners-item-6" alt="rusagro logo">
    </div>
</section>
	

<?php

get_footer(); ?>
