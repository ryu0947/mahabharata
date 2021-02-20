  <?php get_header(); ?>
    <main>
      <section class="outer story">
        <article class="synopsis synopsis-bg1 js-animation">
          <div class="container">
            <div class="synopsis__left">
              <p class="synopsis__text">
                <?php the_field('synopsis1'); ?>
              </p>
            </div>
          </div>
        </article>
        <article class="synopsis-bg2 js-animation">
          <div class="container">
            <div class="synopsis__right">
              <p class="synopsis__text">
              <?php the_field('synopsis2'); ?>
              </p>
            </div>
          </div>
        </article>
        <article class="synopsis-bg3 js-animation">
          <div class="container">
            <div class="synopsis__left">
              <p class="synopsis__text">
              <?php the_field('synopsis3'); ?>
              </p>
            </div>
          </div>
        </article>
      </section>
    <?php get_footer(); ?>