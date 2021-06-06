<div class="about-visual">
  <div class="av-left">
    <p>
    <?php the_field('paragraph');?>
    </p>
  </div>
  <div class="av-right">
    <div class="av-r-top">
      <div class="av-r-top-img" style="background-image: url(<?php the_field('image');?>);">
      </div>
      <div class="r-text"><p><?php the_field('image_text');?> <span class="special"><img src="<?php the_field('decorated_text');?>" alt=""></span></p></div>
    </div>
    <div class="av-r-bottom">
      <div class="a-block-1">
        <p><?php the_field('side_block_left');?></p>
      </div>
      <div class="a-block-2">
        <p><?php the_field('side_block_right');?></p>
      </div>
    </div>
  </div>
</div>