<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cryptonite.bet - Trading & Researches & airdrops</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
 
    <!--<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">   -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">



    <?php 
    wp_head();
    ?>


  </head>

  

<nav class="navbar">

<div class="logo">
    <?php
    if(function_exists('the_custom_logo')){
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
    }
    ?>
    <a href="https://cryptonite.bet">
    <img src="<?php echo $logo[0] ?>" class="header_logo_img"/>
    </a>
</div>

<div class="header_social">
        <a href="https://twitter.com/PiotrMac0" target="_blank">
        <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="https://t.me/cryptoearnxcom" target="_blank">
           <i class="fa-brands fa-telegram"></i>
        </a>
        <a href="https://discord.gg/2w8YX7zagG" target="_blank">
               <i class="fa-brands fa-discord"></i>
         </a>
</div>

<div class="header_search">
    <?php get_search_form(); ?>
</div>

<!-- MENU WP -->
<?php 
    wp_nav_menu(
        array (
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<div class="topnav" id="myTopnav"><ul class="topnavUl>%3$s</ul></div>'
        )
    );
?>

<div class="topnav" id="myTopnav">
    
    <!--
    <a href="#home" class="active">Home</a>
    <a href="#trading">Trading</a>
    <a href="#airdrops">Free crypto</a>
    <a href="#contact">Contact</a>
    </a>
    -->

</div>

</nav>