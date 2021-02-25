  <?php get_header(); ?>
    <main>
      <section class="error js-animation">
        <div class="container outer">
          <h2 class="error__title">ページが見つかりません</h2>
          <p class="error__text"><a href="<?php echo esc_url(home_url('/')); ?> ">トップページへ戻る</a></p>
        </div>
      </section>
    <?php get_footer(); ?>