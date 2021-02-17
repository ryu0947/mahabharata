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
      <?php if(is_front_page() ): ?>
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
    <?php elseif(is_page('story') ): ?>
        <div class="fv-child story">
        <div class="container">
          <div class="fv-child__inner">
            <div class="fv-child__flex">
              <div class="fv-child__row">
                <p class="fv-child__desc">
                  世界最長の叙事詩をピーター・ブルック以来の全編舞台化
                </p>
                <h2 class="fv-child__title">完全版マハーバーラタ</h2>
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
              <h1 class="fv-child__heading">STORY</h1>
              <p class="fv-child__lead">
                マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。
                世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
              </p>
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
                <h2 class="fv-child__title">完全版マハーバーラタ</h2>
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