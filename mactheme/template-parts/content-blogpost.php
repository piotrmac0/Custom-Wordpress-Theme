
<div class="single_container">

<div class="singlepost_headline">

            <div class="singlepost_headline_img">
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="airdropitem" width="120" height="120">
            </div>

        <div class="singlepost_title_div">

            <h2 class="singlepost_title"> <?php the_title(); ?></h2>

            <div class="singlepost_meta">
                <p class="singlecontent_p"> <?php the_date(); ?> </p>
                <?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );

foreach( $categories as $category ) {
 echo '<div class="postmeta_p"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';   
} ?>

            </div> <!-- class="postmeta_p" -->
            
        </div>
</div>

<div class="singlepost_content">
        <?php 
            the_content();
        ?>

     
</div>

</div>
