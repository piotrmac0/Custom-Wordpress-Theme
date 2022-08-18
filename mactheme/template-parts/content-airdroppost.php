
<div class="single_container">

<div class="single_headline">
        <div class="singlepost_headline_img">
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="airdropitem" width="120" height="120">
        </div>
    <div class="single_title_div">
    <h2 class="single_title"><?php the_title(); ?></h2>
    </div>
</div>

<div class="single_main">

        <div class="single_info">
            <h4 class="single_info_desc"><?php the_excerpt(); ?></h4>
            <div class="single_info_links">
                    <button class="single_button"><a href="<?php the_field('website'); ?>" target="_blank">Website</a></button>
                    <button class="single_button"><a href="<?php the_field('twitter'); ?>" target="_blank">Twitter</a></button>
                    <button class="single_button"><a href="<?php the_field('chart'); ?>" target="_blank">Chart</a></button>
            </div>
            <div class="single_claim">
                <p class="single_info_reward">Reward: <?php the_field('reward'); ?> </p>
                <button class="claim"><a href="<?php the_field('claim'); ?>" target="_blank">Claim</a></button>
            </div>
        </div>

        <div class="single_content">
         
            <?php 
            the_content();
            ?>

            <button class="claim"><a href="<?php the_field('claim'); ?>" target="_blank">Claim</a> </button>
        </div>

</div>

</div>

