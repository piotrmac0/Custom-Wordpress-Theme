<body>


     <!-- Header / Navbar  -->
     <?php 
            get_header();
    ?>

      <!-- Archive container -->
      <div class="archive_container">
            <?php 

                if ( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                        /*the_content();*/
                        get_template_part('template-parts/content', 'archive');
                    }
                }

            ?>
    </div>

            <!--Pagination-->
            <?php
                the_posts_pagination();
            ?>

    </div>


 <!--  FOOTER   -->
 <?php
        get_footer(); 
   ?>


</body>
</html>