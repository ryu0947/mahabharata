  <?php get_header(); ?>
  <main>
    <section class="inquiry">
      <div class="container outer">
        <h2 class="inquiry__title"><?php echo get_the_title(); ?></h2>
        <div class="inquiry__inner inquiry__center">
          <?php echo get_the_content(); ?>
        </div>
      </div>
    </section>
    <section class="news js-animation">
      <div class="container outer">
        <?php $news_term = get_term_by('slug', 'news', 'category'); ?>
        <h2 class="news__title"><?php echo $news_term->name; ?></h2>
        <div class="news__list top">
          <?php
          $news_posts = get_news_pages();

          if ($news_posts->have_posts()) :
            while ($news_posts->have_posts()) :
              $news_posts->the_post();
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
        <button class="news__btn"><a href="<?php echo esc_url(home_url('category/news')); ?>">ニュース一覧へ</a></button>
      </div>
    </section>
    <?php get_footer(); ?>