  <?php get_header(); ?>
    <main>
      <section class="inquiry js-animation">
        <div class="container outer">
          <h2 class="inquiry__title"><?php echo get_the_title(); ?></h2>
          <div class="inquiry__inner">
              <?php the_content(); ?>
          </div>
        </div>
      </section>
    <?php get_footer(); ?>