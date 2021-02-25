  <?php get_header(); ?>
    <main>
      <section class="inquiry">
        <div class="container outer">
          <h2 class="inquiry__title"><?php echo get_the_title(); ?></h2>
          <div class="inquiry__inner inquiry__center">
            <?php the_content(); ?>
          </div>
        </div>
      </section>
      <section class="news js-animation">
        <div class="container outer">
          <h2 class="news__title">NEWS</h2>
          <div class="news__list top">
          <?php 
            $news_posts = array(
              'post_type' => 'post',
              'category_name' => 'news',
              'posts_per_page'=> '5',
            );

            $wp_query = new WP_Query($news_posts);
          
            if($wp_query -> have_posts()):
              while($wp_query -> have_posts()):
                $wp_query -> the_post();
          ?>
            <article class="news__item">
              <a href="<?php the_permalink(); ?>">
                <div class="news__item-inner">
                  <div class="news__img">
                  <?php the_post_thumbnail('news'); ?>
                  </div>
                  <div class="news__content">
                    <time class="news__time"><?php the_time('Y.m.d'); ?></time>
                    <p class="news__text">
                    <?php the_title(); ?>
                    </p>
                  </div>
                </div>
              </a>
            </article>
        <?php 
           endwhile;
          endif;
         wp_reset_postdata();
        ?>
          </div>
          <button class="news__btn"><a href="#">ニュース一覧へ</a></button>
        </div>
      </section>
  <?php get_footer(); ?>