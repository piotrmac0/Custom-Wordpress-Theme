
<div class="posts_container">

<!-- ARTCILES ITEM -->
<div class="post_item">
          <div class="item_firstcol">
              <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="airdropitem" width="100" height="100">
              <button class="claim"> <a href="<?php the_permalink(); ?>">MORE</a></button>
          </div>
          <div class="item_secondcol">
              <h2 class="post_title"> <?php the_title(); ?> </h2>
              <p class="post_cat"></p>
              <p class="post_excerpt">
                  <?php the_excerpt(); ?>
              </p>
          </div>
  </div>


</div>