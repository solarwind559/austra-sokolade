<div class="buy" id="pirkt">
  <div class="white-h2 h2-3"><h2><?php the_field('header');?></h2></div>
  <div class="buy-info">

  <div class="b-left">  
    <?php if(have_rows('left_block')):?> 
      <?php while(have_rows('left_block')): the_row();?> 

            <div class="b-left-1">               
              <?php if(have_rows('block_1')):?>
                <?php while(have_rows('block_1')): the_row();?>    
                  <h3 class="white-up"><?php the_sub_field('header');?></h3>       
                    <?php if(have_rows('icon+contact')):?>
                        <?php while(have_rows('icon+contact')): the_row();?>   
                        <div class="icon-next-text txt-left">
                          <img src="<?php the_sub_field('icon');?>" alt="" class="mail">
                          <p class="buy-contacts"><?php the_sub_field('contact_address');?></p>
                        </div>
                        <?php endwhile;?>                   
                    <?php endif; ?>
                  <p class="buy-explain"><?php the_sub_field('text_area');?></p>        
                <?php endwhile;?>
              <?php endif; ?>
            </div>

            <div class="b-left-2">               
              <?php if(have_rows('block_2')):?>
                <?php while(have_rows('block_2')): the_row();?>    
                  <h3 class="white-up"><?php the_sub_field('header');?></h3>       
                    <?php if(have_rows('icon+contact')):?>
                        <?php while(have_rows('icon+contact')): the_row();?>   
                        <div class="icon-next-text txt-center">
                          <img src="<?php the_sub_field('icon');?>" alt="" class="mail">
                          <p class="buy-contacts"><?php the_sub_field('contact_address');?></p>
                        </div>
                        <?php endwhile;?>                   
                    <?php endif; ?>
                  <p class="buy-explain"><?php the_sub_field('text_area');?></p>        
                <?php endwhile;?>
              <?php endif; ?>
            </div>           
            
      <?php endwhile;?>  
    <?php endif; ?>          
  </div>

  <div class="b-right">
    <h2><?php the_field('right_block_paragraph');?>
    </h2>
  </div>
  </div>
</div>