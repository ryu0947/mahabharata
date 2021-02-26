<?php get_header(); ?>
    <main>
      <section class="news-article js-animation">
        <div class="container outer">
          <h2 class="news__title"><?php echo get_the_title('category'); ?></h2>
          <article class="news-article__inner">
           <?php 
             if(have_posts()):
               while(have_posts()): 
                the_post();
           ?>
             <div class="news-article__img">
               <?php the_post_thumbnail('article'); ?>
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
                  src="<?php echo get_template_directory_uri(); ?>/images/prev.png"
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
                  src="<?php echo get_template_directory_uri(); ?>/images/next.png"
                  alt="次へ"
                  class="page-navigation__img"
                />
              </div>
            </div>
          <?php 
             endwhile;
            endif;
          ?>
          </article>
        </div>
      </section>
     <?php get_footer(); ?>