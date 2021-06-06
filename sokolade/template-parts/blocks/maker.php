<div class="maker">
  <div class="white-h2 h2-2"><h2><?php the_field('header');?></h2></div>
  <div class="m-blocks">
      <div class="m-left" >
        <img src="<?php the_field('creator_profile_image');?>" alt="">
      </div>
      <div class="m-right" style="background-image: url(<?php the_field('stock_image');?>);">
        <h2 class="about-maker"><?php the_field('image_text_header');?></h2>
        <p><?php the_field('image_text');?>
        </p>
      </div>
  </div>
</div>