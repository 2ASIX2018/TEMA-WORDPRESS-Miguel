<?php get_header(); ?>

<section class="container micontenedor">
<article>

<?php

    global $post;

     if (have_posts()) { 
        while (have_posts()) {
         
            the_post(); 
                
      ?>

        <div>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        <p class="card-text"><?php the_content(); ?></p>        

          By: <?php the_author(); ?>
        </div>

      <!--div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
           <h4 class="card-title"><?php the_title(); ?></h4>
           <p class="card-text"><?php the_content(); ?></p>
        </div>
      </div-->


<h3>Comentarios</h3>

<?php
            
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        }
    }
?>

</article>
</section>

<?php get_footer(); ?>
