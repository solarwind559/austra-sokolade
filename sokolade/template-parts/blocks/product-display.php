<div class="products" id="veikals">
  <div class="white-h2"><h2><?php the_field('header');?></h2></div>
  <?php if(have_rows('product_template')):?>
  <div class="choc-blocks">    
    <?php while(have_rows('product_template')): the_row();?>  
      <div class="p-block-1" style="background-color:<?php the_sub_field('background_color');?>">
        <img class="choco-bar" src="<?php the_sub_field('image');?>" alt="chocolate bar">
        <h3><?php the_sub_field('header');?></h3>
        <p><?php the_sub_field('description');?>
        </p>
        <p class="greyed">
        <?php the_sub_field('ingredient_list');?>
        </p>
        <div class="price-line">
          <div class="price-weight">
            <div class="price"><?php the_sub_field('price');?></div>
            <div class="weight"><?php the_sub_field('weight');?></div>
          </div>
          <div class="p-l-icons">
            <div class="icon-1"><img src="<?php the_field('icon-1');?>" alt="icon"></div>
            <div class="icon-2"><img src="<?php the_field('icon-2');?>" alt="icon"></div>
            <div class="icon-3"><img src="<?php the_field('icon-3');?>" alt="icon"></div>
          </div>
        </div>
        <a href="<?php the_sub_field('buy_link');?>"><button><?php the_field('buy_btn_text');?></button></a>
      </div>
    <?php endwhile;?>
  </div> 
  <?php endif; ?>
</div>

