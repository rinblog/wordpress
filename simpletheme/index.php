<?php get_header(); ?>
<div class="main">
    <div class="contentinfo event-contentinfo">
      <div class="content-item">
		    <?php
		    if ( have_posts() ) : while ( have_posts() ) : the_post();
		    ?>

        <div class="event-box">
		      <section class="post">
            <a href="<?php the_permalink(); ?>" rel="bookmark" class="content-link">
            <div class="content-img left">
              <div class="post_thumbnail">
                <a href="<?php the_permalink(); ?>" class="object-fit-img wp-post-image">
                  <?php the_post_thumbnail(); ?>
                </a>
              </div>
              <h2>
                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
              </h2>
            </div>
            </a>
		      </section>
        </div>

		    <?php
		    endwhile;
		    endif;
		    ?>
      </div>
    </div>
</div><?php get_footer(); ?>