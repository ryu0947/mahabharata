  <?php get_header(); ?>
  <main>
    <section class="comments js-animation">
      <div class="container outer">
        <h2 class="comments__title"><?php echo get_the_title(); ?></h2>
        <div class="comments__caption">
          <?php the_content(); ?>
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
      <?php 
        if(!get_post_meta(23, 'comments', true)):
      ?>
        <ul class="comments__list">
          <?php
          $comments_group = SCF::get('comments');
          foreach ($comments_group as $comments) :
          ?>
            <li class="comments__item">
              <div class="comments__info">
                <h3 class="comments__name"><?php echo $comments['comments-name']; ?></h3>
                <p class="comments__job"><?php echo $comments['comments-job']; ?></p>
              </div>
              <p class="comments__text--black">
                <?php echo $comments['comments-text']; ?>
              </p>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      </div>
    </section>
    <?php get_footer(); ?>