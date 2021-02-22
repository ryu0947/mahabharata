  <?php get_header(); ?>
    <main>
      <section class="comments js-animation">
        <div class="container outer">
          <h2 class="comments__title"><?php echo get_the_title(); ?></h2>
          <div class="comments__caption">
            <?php echo get_the_content(); ?>
          </div>
          <div class="comments__inner" style="background: url(<?php the_field('top-comments-img'); ?>)no-repeat 75% center / cover;">
            <div class="comments__text-area">
              <h3 class="comments__heading">
              <?php the_field('representative-job'); ?><br class="sp" />
                <strong class="comments__strong"><?php the_field('representative-name'); ?></strong>
              </h3>
              <p class="comments__text">
                <?php the_field('top-comments'); ?>
              </p>
              <div class="btn-position--comments">
                <button class="comments__btn">
                  <a href="#">もっと見る</a>
                </button>
              </div>
            </div>
          </div>
          <ul class="comments__list">
            <li class="comments__item">
              <div class="comments__info">
                <h3 class="comments__name">今福龍太</h3>
                <p class="comments__job">文化人類学者</p>
              </div>
              <p class="comments__text--black">
                蝶は風を受けて飛ぶ。いやむしろ、風を切って飛ぶ。いやさらにいえば、みずから風を孕み風を生み出す。
                吹きすさび循環する大風のような物語。小池舞台はそんな物語を生成する未知なる蝶の飛翔だ。
              </p>
            </li>
          </ul>
        </div>
      </section>
     <?php get_footer(); ?>