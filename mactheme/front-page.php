<body>

     <!-- Header / Navbar  -->
     <?php 
            get_header();
    ?>

    
    <!-- Header hero view-->
        <div class="header_container" style=" background-image: url(<?php echo get_theme_file_uri('assets/images/crypto1.png') ?>);">
                <h1 class="header_h1">Cryptonite.bet</h1>  
                <h2 class="header_h2">Crypto trading, researches and best airdrops</h2>
                
                <div class="header_trading">
                        <h2 class="header_h2">Trading charts</h2> 
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
                </div>
        </div>


<!-- Home content -->






<!-- AIRDROPS -->
</br></br></br>
<div class="singlepost_headline">
                <div class="singlepost_title_div">
                <h2 class="singlepost_title">Airdrops and giveaways</h2>
                </div>
</div>

<div class="archive_container">


    <?php 
        $args = array(
            'post_type' => 'airdrops',
            'post_status' => 'publish',
            'posts_per_page' => 12, 
        );
        $loop = new WP_Query( $args ); 
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
            get_template_part('template-parts/content', 'airdropsarchive'); 
        endwhile;
    
        wp_reset_postdata(); 
        ?>

</div>




<!-- ARTICLES AND NEWS archive-->
</br></br>

<div class="singlepost_headline">
                <div class="singlepost_title_div">
                <h2 class="singlepost_title">Crypto researches and insights</h2>
                </div>
</div>


<div class="archive_container">
<?php 
        $argspost = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 6, 
        );
        $looppost = new WP_Query( $argspost ); 
        
        while ( $looppost->have_posts() ) : $looppost->the_post(); 
            get_template_part('template-parts/content', 'archive'); 
        endwhile;
    
        wp_reset_postdata(); 
?>
</div>




     
      
        <!--  FOOTER   -->
            <?php
                get_footer(); 
            ?>






    <!--
    <script src="https://kit.fontawesome.com/8e89247916.js" crossorigin="anonymous"></script>
    -->
</body>
</html>