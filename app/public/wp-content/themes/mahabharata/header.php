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
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" /> -->
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <nav class="nav container">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#">トップ<span class="en">TOP</span></a>
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
      <div class="fv">
        <div class="container">
          <div class="fv__inner">
            <p class="fv__desc">
              世界最長の叙事詩をピーター・ブルック以来の全編舞台化
            </p>
            <h1 class="fv__title">完全版マハーバーラタ</h1>
            <div class="fv__flex">
              <div class="fv__row">
                <p class="fv__info">2020年7月4日〜7日</p>
                <p class="fv__info">なかのZERO大ホール</p>
              </div>
              <div class="fv__row">
                <p class="fv__text">
                  小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br />
                  アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
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
    </header>