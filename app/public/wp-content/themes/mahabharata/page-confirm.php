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
  <?php get_footer(); ?>