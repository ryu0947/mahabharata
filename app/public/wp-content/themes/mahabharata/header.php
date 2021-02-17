<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="robots" content="noindex,nofollow">
    <title>
      <?php bloginfo('name'); ?>
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700&display=swap"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <nav class="nav container">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ<span class="en">TOP</span></a>
          </li>
          <li class="nav__item">
            <a href="#">ニュース<span class="en">NEWS</span></a>
          </li>
          <li class="nav__item">
            <a href="#">ストーリー<span class="en">STORY</span></a>
          </li>
          <li class="nav__item">
            <a href="#">著名人コメント<span class="en">COMMENTS</span></a>
          </li>
          <li class="nav__item">
            <a href="#">キャスト<span class="en">CAST</span></a>
          </li>
          <li class="nav__item">
            <a href="#">お問い合わせ<span class="en">INQUIRY</span></a>
          </li>
        </ul>
      </nav>
      <?php if(is_front_page() ): ?>
      <div class="fv">
        <div class="container">
          <div class="fv__inner">
            <p class="fv__desc">
              <?php the_field('common_text', 33); ?>
            </p>
            <h1 class="fv__title">
              <?php the_field('common_title', 33); ?>
            </h1>
            <div class="fv__flex">
              <div class="fv__row">
                <p class="fv__info"><?php the_field('performance_date', 33); ?></p>
                <p class="fv__info"><?php the_field('performance_venue', 33); ?></p>
              </div>
              <div class="fv__row">
                <p class="fv__text">
                <?php the_field('top_main_text', 33); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-position container">
        <button class="fv__btn">
          <a href="#">チケット予約サイトへ</a>
        </button>
      </div>
    <?php elseif(is_page('story') ): ?>
        <div class="fv-child story">
        <div class="container">
          <div class="fv-child__inner">
            <div class="fv-child__flex">
              <div class="fv-child__row">
                <p class="fv-child__desc">
                  <?php the_field('common_text', 33); ?>
                </p>
                <h2 class="fv-child__title">
                  <?php echo get_the_title(33); ?>
                </h2>
              </div>
              <div class="fv-child__row">
                <p class="fv-child__info">2020年7月4日〜7日</p>
                <p class="fv-child__info">なかのZERO大ホール</p>
              </div>
            </div>
            <div class="btn-position">
              <button class="fv-child__btn--story">
                <a href="#">チケット予約サイトへ</a>
              </button>
            </div>
            <ul class="breadcrumb__list">
              <li class="breadcrumb__item--story">
                <a href="index.html">ホーム</a><span>&gt;</span>
              </li>
              <li class="breadcrumb__item--story">STORY</li>
            </ul>
            <div class="fv-child__intro js-animation">
              <h1 class="fv-child__heading"><?php echo get_the_title(); ?></h1>
              <div class="fv-child__lead">
                  <?php echo get_the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="fv-child">
        <div class="container">
          <div class="fv-child__inner">
            <div class="fv-child__flex">
              <div class="fv-child__row">
                <p class="fv-child__desc">
                  世界最長の叙事詩をピーター・ブルック以来の全編舞台化
                </p>
                <h2 class="fv-child__title"><?php echo get_the_title(33); ?></h2>
              </div>
              <div class="fv-child__row">
                <p class="fv-child__info">2020年7月4日〜7日</p>
                <p class="fv-child__info">なかのZERO大ホール</p>
              </div>
            </div>
            <div class="btn-position">
              <button class="fv-child__btn">
                <a href="#">チケット予約サイトへ</a>
              </button>
            </div>
          </div>
        </div>
      </div>
     <?php endif; ?>
    </header>