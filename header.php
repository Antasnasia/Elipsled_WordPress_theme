<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elipsled
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Элипслед - светодиодные светильники для животноводства</title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/media.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="logo-container">
               <a href="#"> <img src="<?php bloginfo( 'template_directory' ) ?>/img/logo.png" alt="main logo" width="150" height="66" class="main-logo"></a>
            </div>
			

            <nav class="main-nav">
                <?php 
                $args = array (
'container'       => false,
'items_wrap'    => '%3$s'
                );
                wp_nav_menu($args)
                ?>
                
            </nav>

            <div class="tel-container">
                <a href="tel:+89152543992">89152543992</a>
            </div>
        </header>
     </div>