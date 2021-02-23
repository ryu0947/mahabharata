  <?php get_header(); ?>
    <main>
      <section class="inquiry js-animation">
        <div class="container outer">
          <h2 class="inquiry__title"><?php echo get_the_title(); ?></h2>
          <div class="inquiry__inner">
              <?php the_content(); ?>
            <form action="#">
              <dl class="form">
                <div class="form__row">
                  <dt class="form__text">お名前</dt>
                  <dd class="form__area">
                    <input type="text" name="name" />
                  </dd>
                </div>
                <div class="form__row">
                  <dt class="form__text">お電話番号</dt>
                  <dd class="form__area">
                    <input type="tel" name="tel" />
                  </dd>
                </div>
                <div class="form__row">
                  <dt class="form__text">メールアドレス</dt>
                  <dd class="form__area">
                    <input type="email" name="email" />
                  </dd>
                </div>
                <div class="form__row">
                  <dt class="form__text">内容</dt>
                  <dd class="form__area">
                    <textarea name="message" cols="40" rows="10"></textarea>
                  </dd>
                </div>
              </dl>
              <input type="button" value="送信" class="submit-btn" />
            </form>
          </div>
        </div>
      </section>
    <?php get_footer(); ?>