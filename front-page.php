<?php get_header();?>
<!--banner section-->
<section class="bannersection">
  <div class="container">

      <?php while(have_posts()) : the_post();?>
      <div class="banner">
        <?php the_title();?>
        <p><?php the_excerpt();?></p>

          <!-- Single button -->
          <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
      </div>
    <?php endwhile;?>
  </div>

</section>


<section class="servicesection">
  <div class="container">
    <div class="row">

        <?php $topnews = new Wp_Query(
            array(
              'post_type' => 'post',
              'posts_per_page' => '3',
              'category_name' => 'badhon'
            )
        );?>
        <?php while($topnews->have_posts()) : $topnews->the_post();?>
      <div class="col-md-4">
        <div class="service">
          <div class="serviceimg">
            <i class="fas fa-desktop"></i>
            <h2><?php the_title();?></h2>
            <p><?php the_excerpt();?></p>
          </div>
        </div>
      </div>
        <?php endwhile;?>
 
     

    </div>
  </div>
</section>


<!--End banner section-->

    <section class="bottomsection">
    <div class="container">

      <div class="bottomlist">

       <div class="row">

            <?php $topnews = new Wp_Query(
               array(
              'post_type' => 'post',
              'posts_per_page' => '2',
              'category_name' => 'badhon'
            )
        );?>
        <?php while($topnews->have_posts()) : $topnews->the_post();?>

        <div class="col-md-6">
          <div class="bottom">
            
              <?php the_post_thumbnail();?>
               <h2><?php the_title();?></h2>
                <p>
                  <?php the_excerpt();?>
                </p>
          </div>
        </div>

      <?php endwhile;?>

     

    </div><!-- End Container -->

  </div>


   </div>
  </section>


  <section class="testimonial">
    <div class="container">


      <div class="testimonialservice">
        <h2><?php the_title();?></h2>
         <?php the_post_thumbnail();?>
        <p>
          <?php the_excerpt();?>
        </p>
 
      </div>


    </div>
  </section>

 <?php get_footer();?>