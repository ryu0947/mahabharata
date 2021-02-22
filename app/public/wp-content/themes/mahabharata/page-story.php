  <?php get_header(); ?>
    <main>
      <section class="outer story">
         <?php 
            $filed_group = SCF::get('synopsis');
            echo count ($filed_group);
              foreach($filed_group as $filed) {
               $img = wp_get_attachment_image_src($filed['synopsis-img'], 'full');
         ?>
          <article class="synopsis js-animation" style="background: url(<?php echo $img[0]; ?>)no-repeat center/cover;">
            <div class="container">
              <div class="synopsis__left">
                <p class="synopsis__text">
                <?php echo $filed['synopsis-text']; ?>
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
       <?php } ?>
      </section>
    <?php get_footer(); ?>