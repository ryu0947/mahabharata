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
            <div class="page-navi">
              <?php 
                $next = get_next_post();
                $prev = get_previous_post();
              ?>
            <?php if($prev): ?>
              <div class="page-navi__item">
                <a href="<?php echo get_permalink($prev->ID); ?>" class="page-navi__link"> 
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/prev.png"
                  alt="前へ"
                  class="page-navi__img"
                />
                <div class="post-prev">
                  <p class="post-title">前の記事へ</p>
                </div>
                </a>
              </div>
            <?php 
             endif;
             if($next):
            ?>
              <div class="page-navi__item">
               <a href="<?php echo get_permalink($next->ID); ?>" class="page-navi__link">
                <div class="post-next">
                  <p class="post-title">次の記事へ</p>
                </div>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/next.png"
                  alt="次へ"
                  class="page-navi__img"
                />
              </div>
              </a>
            </div>
            <?php endif; ?>
          <?php 
             endwhile;
            endif;
          ?>
          </article>
        </div>
      </section>
     <?php get_footer(); ?>