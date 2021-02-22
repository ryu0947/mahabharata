  <?php get_header(); ?>
    <main>
      <section class="cast outer js-animation">
        <h2 class="cast__title"><?php echo get_the_title(); ?></h2>
        <div class="cast__bg">
          <div class="container">
            <ul class="cast__list">
                <?php 
                  $cast_group = SCF::get("cast");
                  foreach($cast_group as $cast_name => $cast_value){ 
                    $img = wp_get_attachment_image_src($cast_value['cast-img'], 'full');
                ?>
              <li class="cast__item">
                <img src="<?php echo $img[0]; ?>" alt="<?php echo $cast_value['cast-name']; ?>" class="cast__img" />
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part"><?php echo $cast_value['cast-part']; ?></p>
                    <h3 class="cast__name"><?php echo $cast_value['cast-name']; ?></h3>
                    <p class="cast__job">
                      <?php echo $cast_value['cast-job']; ?>
                    </p>
                  </div>
                  <p class="cast__text">
                    <?php echo nl2br($cast_value['cast-intro']); ?>
                  </p>
                </div>
              </li>
             <?php } ?>
            </ul>
          </div>
        </div>
        <div class="cast__area js-animation">
          <div class="container">
            <ul class="cast__sub-list">
            <?php 
                  $subCast_group = SCF::get("sub-cast");
                  foreach($subCast_group as $subCast_name => $subCast_value){ 
                    $img = wp_get_attachment_image_src($subCast_value['sub-cast-img'], 'full');
                ?>
              <li class="cast__sub-item">
              <img src="<?php echo $img[0]; ?>" alt="<?php echo $subCast_value['sub-cast-name']; ?>" class="cast__sub-img" />
                <div class="cast__sub-item-inner">
                  <div class="cast__info">
                    <p class="cast__part"><?php echo $subCast_value['sub-cast-part']; ?></p>
                    <h3 class="cast__name"><?php echo $subCast_value['sub-cast-name']; ?></h3>
                    <p class="cast__job"><?php echo $subCast_value['subcast-job']; ?></p>
                  </div>
                  <p class="cast__text--center">
                    <?php echo nl2br($subCast_value['sub-cast-intro']); ?>
                  </p>
                </div>
              </li>
             <?php } ?>
            </ul>
          </div>
        </div>
        <div class="cast__bg--center">
          <div class="container outer js-animation">
            <ul class="cast__text-list">
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">作・演出・振付・構成</p>
                    <h3 class="cast__name">小池博史</h3>
                    <p class="cast__job">
                      (演出家・作家・振付家・舞台美術家・写真家)
                    </p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">白井さち子</h3>
                    <p class="cast__job">(バレエ、コンテンポラリーダンス)</p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">小谷野哲郎</h3>
                    <p class="cast__job">(バリ舞踏)</p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">作・演出・振付・構成</p>
                    <h3 class="cast__name">小池博史</h3>
                    <p class="cast__job">
                      (演出家・作家・振付家・舞台美術家・写真家)
                    </p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">白井さち子</h3>
                    <p class="cast__job">(バレエ、コンテンポラリーダンス)</p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">小谷野哲郎</h3>
                    <p class="cast__job">(バリ舞踏)</p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">作・演出・振付・構成</p>
                    <h3 class="cast__name">小池博史</h3>
                    <p class="cast__job">
                      (演出家・作家・振付家・舞台美術家・写真家)
                    </p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">白井さち子</h3>
                    <p class="cast__job">(バレエ、コンテンポラリーダンス)</p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">小谷野哲郎</h3>
                    <p class="cast__job">(バリ舞踏)</p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">作・演出・振付・構成</p>
                    <h3 class="cast__name">小池博史</h3>
                    <p class="cast__job">
                      (演出家・作家・振付家・舞台美術家・写真家)
                    </p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">白井さち子</h3>
                    <p class="cast__job">(バレエ、コンテンポラリーダンス)</p>
                  </div>
                </div>
              </li>
              <li class="cast__text-item">
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">小谷野哲郎</h3>
                    <p class="cast__job">(バリ舞踏)</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
    <?php get_footer(); ?>