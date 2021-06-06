<div class="blog" id="blogs">
  <div class="white-h2 h2-blog"><h2><?php the_field('header');?></h2></div>

<?php if(have_rows('blog_preview_area')):?>
  <div class="a3-block">
  <?php while(have_rows('blog_preview_area')): the_row();?>  
    <div class="a3-b-1">
      <img src="<?php the_sub_field('image');?>" alt="">
        <div class="tablet-wrap">
          <h4><?php the_sub_field('header');?></h4>
          <p><?php the_sub_field('article_text_preview');?></p>
          <a href="<?php the_sub_field('article_link');?>"><button><?php the_field('button_text');?></button></a>
        </div>
    </div>
  <?php endwhile;?>  
  </div>
<?php endif; ?>

  <a href=""><h5><?php the_field('view_all_text');?></h5></a>
  
</div>