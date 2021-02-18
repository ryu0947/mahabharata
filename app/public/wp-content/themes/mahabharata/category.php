 <?php get_header(); ?>
    <main>
      <section class="news js-animation">
        <div class="container outer">
          <h2 class="news__title">NEWS</h2>
          <div class="news__list">
            <?php 
              if(have_posts()): 
                while(have_posts()): the_post();
            ?>
            <article class="news__item">
              <a href="<?php the_permalink(); ?>">
                <div class="news__item-inner">
                  <div class="news__img">
                    <?php the_post_thumbnail(); ?>
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
            ?>
          </div>
        </div>
      </section>
    <?php get_footer(); ?>