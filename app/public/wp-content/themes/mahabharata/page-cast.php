  <?php get_header(); ?>
  <main>
    <section class="cast outer js-animation">
      <h2 class="cast__title"><?php echo get_the_title(); ?></h2>
      <div class="cast__bg">
        <div class="container">
          <ul class="cast__list">
            <?php
            $cast_group = SCF::get("cast");
            foreach ($cast_group as $cast) :
              $img = wp_get_attachment_image_src($cast['cast-img'], 'full');
              $name = get_post_meta(19, $cast['cast-name'], true);
              $part = get_post_meta(19, $cast['cast-part'], true);
              $job = get_post_meta(19, $cast['cast-job'], true);
              $intro = get_post_meta(19, $cast['cast-intro'], true);

              if (empty($img && $name && $part && $job && $intro)) :
            ?>
                <li class="cast__item">
                  <img src="<?php echo $img[0]; ?>" alt="<?php echo $cast['cast-name']; ?>" class="cast__img" />
                  <div class="cast__item-inner">
                    <div class="cast__info">
                      <p class="cast__part"><?php echo $cast['cast-part']; ?></p>
                      <h3 class="cast__name"><?php echo $cast['cast-name']; ?></h3>
                      <p class="cast__job">
                        <?php echo $cast['cast-job']; ?>
                      </p>
                    </div>
                    <p class="cast__text">
                      <?php echo nl2br($cast['cast-intro']); ?>
                    </p>
                  </div>
                </li>
            <?php
              endif;
            endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="cast__area js-animation">
        <div class="container">
          <ul class="cast__sub-list">
            <?php
            $subCast_group = SCF::get("sub-cast");
            foreach ($subCast_group as $subCast) :
              $img = wp_get_attachment_image_src($subCast['sub-cast-img'], 'full');
              $name = get_post_meta(19, $cast['cast-name'], true);
              $part = get_post_meta(19, $cast['cast-part'], true);
              $job = get_post_meta(19, $cast['cast-job'], true);
              $intro = get_post_meta(19, $cast['cast-intro'], true);

              if (empty($img && $name && $part && $job && $intro)) :
            ?>
              <li class="cast__sub-item">
                <img src="<?php echo $img[0]; ?>" alt="<?php echo $subCast['sub-cast-name']; ?>" class="cast__sub-img" />
                <div class="cast__sub-item-inner">
                  <div class="cast__info">
                    <p class="cast__part"><?php echo $subCast['sub-cast-part']; ?></p>
                    <h3 class="cast__name"><?php echo $subCast['sub-cast-name']; ?></h3>
                    <p class="cast__job"><?php echo $subCast['sub-cast-job']; ?></p>
                  </div>
                  <p class="cast__text--center">
                    <?php echo nl2br($subCast['sub-cast-intro']); ?>
                  </p>
                </div>
              </li>
            <?php 
           endif;
          endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="cast__bg--center">
        <div class="container outer js-animation">
          <ul class="cast__text-list">
            <?php
            $credit_group = SCF::get("credit");
            foreach ($credit_group as $credit) :
              $part = get_post_meta(19, $cast['cast-part'], true);
              $name = get_post_meta(19, $cast['cast-name'], true);
              $job = get_post_meta(19, $cast['cast-job'], true);

              if(empty($part && $name && $job)):
            ?>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part"><?php echo $credit['credit-part']; ?></p>
                    <h3 class="cast__name"><?php echo $credit['credit-name']; ?></h3>
                    <p class="cast__job">
                      <?php echo $credit['credit-job']; ?>
                    </p>
                  </div>
                </div>
              </li>
            <?php 
             endif;
           endforeach; ?>
          </ul>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>