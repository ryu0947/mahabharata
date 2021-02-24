  <?php get_header(); ?>
    <main>
      <section class="inquiry">
        <div class="container outer">
          <h2 class="inquiry__title"><?php echo get_the_title(); ?></h2>
          <div class="inquiry__inner inquiry__center">
            <?php the_content(); ?>
          </div>
        </div>
      </section>
      <section class="news js-animation">
        <div class="container outer">
          <h2 class="news__title">NEWS</h2>
          <div class="news__list top">
            <article class="news__item">
              <a href="#">
                <div class="news__item-inner">
                  <div class="news__img">
                    <img
                      src="images/news1.jpg"
                      alt="「完全版マハーバーラタ」2020年7月・東京講演！！"
                    />
                  </div>
                  <div class="news__content">
                    <time class="news__time">2019.11.30</time>
                    <p class="news__text">
                      「完全版マハーバーラタ」2020年7月・東京講演！！
                    </p>
                  </div>
                </div>
              </a>
            </article>
          </div>
          <button class="news__btn"><a href="#">ニュース一覧へ</a></button>
        </div>
      </section>
  <?php get_footer(); ?>