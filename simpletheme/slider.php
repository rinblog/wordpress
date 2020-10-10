
    <div id="wide" class="slider-pro">
        <div class="sp-slides">
      <?php $args = array(
      'posts_per_page' => 5,
        );
        $my_query = new WP_Query( $args );?>
        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
            <div class="sp-slide">
      <article <?php post_class( 'slidekiji' ); ?>>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('full'); ?>
          <div class="text">
            <span class="kiji-date">
              <time
               datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
              <?php echo get_the_date(); ?>
               </time>
            </span>
            <span class="cat-data ">
               <?php if( has_category() ): ?>
                <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              <?php endif; ?>
            </span>
            <h2><?php the_title(); ?></h2>
          </div>
        </a>
      </article>
            </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
            <!--/ sp-slides-->
        </div>
        <!--/ wide-->
    </div>
<script>
$( document ).ready(function( $ ) {
  $('#wide').sliderPro({
    width: 600,//横幅
    arrows: true,//左右の矢印
    buttons: true,//ナビゲーションボタンを出す
    slideDistance:0,//スライド同士の距離
    visibleSize: '100%',//前後のスライドを表示
    slideDistance:1,//スライド同士の距離
  });
});
</script>
