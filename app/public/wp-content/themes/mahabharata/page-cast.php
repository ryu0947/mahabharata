  <?php get_header(); ?>
    <main>
      <section class="cast outer js-animation">
        <h2 class="cast__title"><?php echo get_the_title(); ?></h2>
        <div class="cast__bg">
          <div class="container">
            <ul class="cast__list">
                <?php 
                  $cast_group = SCF::get("cast");
                  foreach($cast_group as $filed_name => $filed_value){ 
                    $img = wp_get_attachment_image_src($filed_value['cast-img'], 'full');
                ?>
              <li class="cast__item">
                <img src="<?php echo $img[0]; ?>" alt="<?php echo $filed_value['cast-name']; ?>" class="cast__img" />
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part"><?php echo $filed_value['cast-part']; ?></p>
                    <h3 class="cast__name"><?php echo $filed_value['cast-name']; ?></h3>
                    <p class="cast__job">
                      <?php echo $filed_value['cast-job']; ?>
                    </p>
                  </div>
                  <p class="cast__text">
                    <?php echo nl2br($filed_value['cast-intro']); ?>
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
              <li class="cast__sub-item">
                <img
                  src="images/cast2.jpg"
                  alt="白井さち子"
                  class="cast__sub-img"
                />
                <div class="cast__sub-item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">白井さち子</h3>
                    <p class="cast__job">(バレエ、コンテンポラリーダンス)</p>
                  </div>
                  <p class="cast__text--center">
                    7歳よりクラシックバレエを始める。<br />
                    82年より6年間橘バレエ学校に在籍。<br />
                    牧阿佐美に師事。<br />
                    日本女子体育短期大学舞踊コース卒。<br />
                    在籍中、太田順造にパントマイムを師事。
                  </p>
                </div>
              </li>
              <li class="cast__sub-item">
                <img
                  src="images/cast2.jpg"
                  alt="白井さち子"
                  class="cast__sub-img"
                />
                <div class="cast__sub-item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">白井さち子</h3>
                    <p class="cast__job">(バレエ、コンテンポラリーダンス)</p>
                  </div>
                  <p class="cast__text--center">
                    7歳よりクラシックバレエを始める。<br />
                    82年より6年間橘バレエ学校に在籍。<br />
                    牧阿佐美に師事。<br />
                    日本女子体育短期大学舞踊コース卒。<br />
                    在籍中、太田順造にパントマイムを師事。
                  </p>
                </div>
              </li>
              <li class="cast__sub-item">
                <img
                  src="images/cast2.jpg"
                  alt="白井さち子"
                  class="cast__sub-img"
                />
                <div class="cast__sub-item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">白井さち子</h3>
                    <p class="cast__job">(バレエ、コンテンポラリーダンス)</p>
                  </div>
                  <p class="cast__text--center">
                    7歳よりクラシックバレエを始める。<br />
                    82年より6年間橘バレエ学校に在籍。<br />
                    牧阿佐美に師事。<br />
                    日本女子体育短期大学舞踊コース卒。<br />
                    在籍中、太田順造にパントマイムを師事。
                  </p>
                </div>
              </li>
              <li class="cast__sub-item">
                <img
                  src="images/cast2.jpg"
                  alt="白井さち子"
                  class="cast__sub-img"
                />
                <div class="cast__sub-item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">白井さち子</h3>
                    <p class="cast__job">(バレエ、コンテンポラリーダンス)</p>
                  </div>
                  <p class="cast__text--center">
                    7歳よりクラシックバレエを始める。<br />
                    82年より6年間橘バレエ学校に在籍。<br />
                    牧阿佐美に師事。<br />
                    日本女子体育短期大学舞踊コース卒。<br />
                    在籍中、太田順造にパントマイムを師事。
                  </p>
                </div>
              </li>
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