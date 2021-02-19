<?php get_header(); ?>
    <main>
      <section class="news-article js-animation">
        <div class="container outer">
        <?php 
          if(have_posts()):
            while(have_posts()): the_post();
        ?>
          <h2 class="news__title">NEWS</h2>
          <article class="news-article__inner">
            <div class="news-article__img">
              <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="news-article__head">
              <time><?php the_time('Y.m.d'); ?></time>
              <h1 class="news-article__head-title">
              <?php the_title(); ?>
              </h1>
            </div>
            <div class="news-article__body">
              <?php the_content(); ?>
            </div>
            <div class="page-navigation">
              <div class="page-navigation__item">
                <img
                  src="images/prev.png"
                  alt="前へ"
                  class="page-navigation__img"
                />
                <div class="post-prev">
                  <time>2019.9.28</time>
                  <p class="post-title">前のニュース投稿のタイトル</p>
                </div>
              </div>
              <div class="page-navigation__item">
                <div class="post-next">
                  <time>2019.10.01</time>
                  <p class="post-title">次のニュース投稿のタイトル</p>
                </div>
                <img
                  src="images/next.png"
                  alt="次へ"
                  class="page-navigation__img"
                />
              </div>
            </div>
          </article>
          <?php 
             endwhile;
            endif;
          ?>
        </div>
      </section>
     <?php get_footer(); ?>