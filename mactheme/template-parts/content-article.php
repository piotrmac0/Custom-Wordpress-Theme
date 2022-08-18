
<div class="single_container">

    <div class="singlepost_headline">
            <div class="singlepost_headline_img">
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="airdropitem" width="100" height="100">
            </div>
            <div class="singlepost_title_div">

                <h2 class="singlepost_title"> <?php the_title(); ?></h2>

                <div class="singlepost_meta">
                    <p class="singlecontent_p"> <?php the_date(); ?> </p>
                    <?php the_tags(' <span class="postmeta_p"> ', ' </span> <span class="postmeta_p"> ', ' </span> ' ); ?>
                </div>
                
            </div>
    </div>

    <div class="singlepost_content">
            <?php 
                the_content();
            ?>

         
    </div>

</div>


