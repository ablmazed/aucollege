<?php get_header();?>

<div class="blogpost">
  <div class="container">

   

      <?php while(have_posts()): the_post();?>
      <div class="post">
        <h2><?php the_title();?></h2>
        <?php the_post_thumbnail();?>
        <p><?php the_content();?></p>
     </div>
     <?php endwhile;?>
    
    <?php the_posts_pagination(array(
    	'screen_reader_text' => ' ',

    	'prev_text' => 'Ager Post Gulo',
		'next_text' => 'porer Post Gulo',
    )); ?>

  </div>
</div>

<?php get_footer();?>
 