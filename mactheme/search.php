<body>
    
     <!-- Header / Navbar  -->
     <?php 
            get_header();
    ?>

    <!--Search Archive container -->
    <h2 class="singlepost_title"> Search results</h2>
    <div class="archive_container">
    
            <?php 
                if ( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                        /*the_content();*/
                        get_template_part('template-parts/content', 'searchresults');
                    }
                }
            ?>

            <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>

    </div>

    
                <!--  FOOTER   -->
                <?php
                        get_footer(); 
                    ?>

</body>
</html>