  <?php get_header(); ?>
  <main>
    <section class="introduction js-animation">
      <div class="container outer">
        <?php
        $page_obj = get_page_by_path('introduction');
        $title = $page_obj->post_title;
        $content = $page_obj->post_content;
        ?>
        <div class="introduction__inner">
          <h2 class="introduction__title"><?php echo $title ?></h2>
          <h3 class="introduction__lead">なぜ今「マハーバーラタ」なのか？</h3>
          <div class="introduction__column">
            <?php echo $content ?>
          </div>
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
    <section class="story js-animation">
      <div class="story__bg">
        <div class="container outer">
          <?php
          $page_obj = get_page_by_path('story');
          $title = $page_obj->post_title;
          $content = $page_obj->post_content;
          ?>
          <div class="story__inner">
            <h2 class="story__title"><?php echo $title; ?></h2>
            <div class="story__text-area">
              <?php echo $content; ?>
            </div>
            <div class="btn-position--story">
              <button class="story__btn"><a href="<?php echo esc_url(home_url('story')); ?>">もっと詳しく</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="comments js-animation">
      <div class="container outer">
        <?php
        $page_obj = get_page_by_path('comments');
        $title = $page_obj->post_title;
        $content = $page_obj->post_content;
        ?>
        <h2 class="comments__title"><?php echo $title; ?></h2>
        <div class="comments__caption">
          <?php echo $content; ?>
        </div>
        <div class="comments__inner" style="background: url(<?php the_field('top-comments-img', 23); ?>)no-repeat 75% center / cover;">
          <div class="comments__text-area">
            <h3 class="comments__heading">
              <?php the_field('representative-job', 23); ?><br class="sp" />
              <strong class="comments__strong"><?php the_field('representative-name', 23); ?></strong>
            </h3>
            <p class="comments__text">
              <?php the_field('top-comments', 23); ?>
            </p>
            <div class="btn-position--comments">
              <button class="comments__btn">
                <a href="<?php echo esc_url(home_url('comments')); ?>">もっと見る</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cast outer js-animation">
      <?php
      $page_obj = get_page_by_path('cast');
      $title = $page_obj->post_title;
      ?>
      <h2 class="cast__title"><?php echo $title ?></h2>
      <div class="cast__bg">
        <div class="container">
          <ul class="cast__list">
            <?php
            $cast_group = SCF::get("cast", 19);
            foreach ($cast_group as $cast_name => $cast_value) :
              $img = wp_get_attachment_image_src($cast_value['cast-img'], 'full');
            ?>
              <li class="cast__item">
                <img src="<?php echo $img[0]; ?>" alt="<?php echo $cast_value['cast-name']; ?>" class="cast__img" />
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part"><?php echo $cast_value['cast-part']; ?></p>
                    <h3 class="cast__name"><?php echo $cast_value['cast-name']; ?></h3>
                    <p class="cast__job">
                      <?php echo $cast_value['cast-job']; ?>
                    </p>
                  </div>
                  <p class="cast__text">
                    <?php echo nl2br($cast_value['cast-intro']); ?>
                  </p>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
          <button class="cast__btn"><a href="<?php echo esc_url(home_url('cast')); ?>">もっと見る</a></button>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>