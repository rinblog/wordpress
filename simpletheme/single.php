<?php get_template_part( "singleheader" ); ?>

<main>
   <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    
        <article class="content">
            <div class="single_post_thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    
    <?php
    endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
