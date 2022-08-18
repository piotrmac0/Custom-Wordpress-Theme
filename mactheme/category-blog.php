<body>


     <!-- Header / Navbar  -->
     <?php 
            get_header();
    ?>

    <!-- Archive container -->
    <div class="single_container">
            <?php 
                if ( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                        /*the_content();*/
                        get_template_part('template-parts/content', 'archive');
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