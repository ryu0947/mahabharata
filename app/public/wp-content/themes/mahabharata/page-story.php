  <?php get_header(); ?>
    <main>
      <section class="outer story">
         <?php 
            $filed_group = SCF::get('synopsis');
              foreach($filed_group as $filed) {
               $img1 = wp_get_attachment_image_src($filed['synopsis-img1'], 'full');
               $img2 = wp_get_attachment_image_src($filed['synopsis-img2'], 'full');
               $img3 = wp_get_attachment_image_src($filed['synopsis-img3'], 'full');
         ?>
          <article class="synopsis js-animation" style="background: url(<?php echo $img1[0]; ?>)no-repeat center/cover;">
            <div class="container">
              <div class="synopsis__left">
                <p class="synopsis__text">
                  <?php echo $filed['synopsis-text1']; ?>
                </p>
              </div>
            </div>
          </article>
          <article class="js-animation" style="background: url(<?php echo $img2[0]; ?>)no-repeat center/cover;">
            <div class="container">
              <div class="synopsis__right">
                <p class="synopsis__text">
                  <?php echo $filed['synopsis-text2']; ?>
                </p>
              </div>
            </div>
          </article>
          <article class="js-animation" style="background: url(<?php echo $img3[0]; ?>)no-repeat center/cover;">
            <div class="container">
              <div class="synopsis__left">
                <p class="synopsis__text">
                  <?php echo $filed['synopsis-text3']; ?>
                </p>
              </div>
            </div>
          </article>
       <?php } ?>
      </section>
    <?php get_footer(); ?>