<?php get_header(); ?>

<main class="wrap">
  <section class="content-area content-thin col-md-9" style="float:left;">

      <article class="article-loop">
        <!--div>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          By: <?php the_author(); ?>
        </div-->

        <div class="container">
        <div class="row" style="margin-bottom: 100px;">
        

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
            <div class="col-lg-4 col-sm-6 portfolio-item " >
        


             <div class="card h-50">

                <div class="card-body">
                <!--h4 class="card-title"><?php the_title(); ?></h4-->
                <h4 class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                 <?php the_title(); ?></a></h4>
                 <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>

            </div>
<?php endwhile; else : ?>

        
        </div>
        </div>
        <!--?php the_excerpt(); ?-->
      </article>

      <article>
        <p>No s'ha trobat cap post en esta categoria</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
