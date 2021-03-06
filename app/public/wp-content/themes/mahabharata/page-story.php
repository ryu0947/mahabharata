  <?php get_header(); ?>
  <main>
    <section class="outer story">
      <?php
      $filed_group = SCF::get('synopsis');
      foreach ($filed_group as $filed) :
        $img1 = wp_get_attachment_image_src($filed['synopsis-img1'], 'full');
        $img2 = wp_get_attachment_image_src($filed['synopsis-img2'], 'full');
        $img3 = wp_get_attachment_image_src($filed['synopsis-img3'], 'full');
      ?>
        <?php
        $img_filed = get_post_meta(44, 'synopsis-img1', true);
        $text_filed = get_post_meta(44, 'synopsis-text1', true);
        if ($img_filed && $text_filed) :
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
        <?php endif; ?>
        <?php
        $img_filed = get_post_meta(44, 'synopsis-img2', true);
        $text_filed = get_post_meta(44, 'synopsis-text2', true);
        if ($img_filed && $text_filed) :
        ?>
          <article class="js-animation" style="background: url(<?php echo $img2[0]; ?>)no-repeat center/cover;">
            <div class="container">
              <div class="synopsis__right">
                <p class="synopsis__text">
                  <?php echo $filed['synopsis-text2']; ?>
                </p>
              </div>
            </div>
          </article>
        <?php endif; ?>
        <?php
        $img_filed = get_post_meta(44, 'synopsis-img3', true);
        $text_filed = get_post_meta(44, 'synopsis-text3', true);
        if ($img_filed && $text_filed) :
        ?>
          <article class="js-animation" style="background: url(<?php echo $img3[0]; ?>)no-repeat center/cover;">
            <div class="container">
              <div class="synopsis__left">
                <p class="synopsis__text">
                  <?php echo $filed['synopsis-text3']; ?>
                </p>
              </div>
            </div>
          </article>
        <?php endif; ?>
      <?php endforeach; ?>
    </section>
    <?php get_footer(); ?>