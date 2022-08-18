<body>
     <!-- Header / Navbar  -->
     <?php 
            get_header();
    ?>


    <div class="single_container">
            <?php 
                if ( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                        /*the_content();*/
                        get_template_part('template-parts/content', 'blogpost');
                    }
                }
            ?>

            <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>
            
            <?php wp_link_pages(); ?>
              
    </div>

  <!--  FOOTER   -->
  <?php
                        get_footer(); 
                    ?>


</body>
</html>