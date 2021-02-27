  <?php get_header(); ?>
    <main>
      <section class="introduction js-animation">
        <div class="container outer">
          <?php 
            $introduction_obj = get_page_by_path('introduction'); 
            $post = $introduction_obj;
            setup_postdata($post);
          ?>
          <div class="introduction__inner">
            <h2 class="introduction__title"><?php the_title(); ?></h2>
            <h3 class="introduction__lead">なぜ今「マハーバーラタ」なのか？</h3>
            <div class="introduction__column">
              <?php the_content(); ?>
              </p>
            </div>
          </div>
          <?php wp_reset_postdata();?>
        </div>
      </section>
      <section class="news js-animation">
        <div class="container outer">
         <?php $news_term = get_term_by('slug', 'news', 'category'); ?>
          <h2 class="news__title"><?php echo $news_term->name; ?></h2>
          <div class="news__list top">
              <?php 
                $news_posts = get_post_pages();
              
                if($news_posts -> have_posts()):
                  while($news_posts -> have_posts()):
                    $news_posts -> the_post();
              ?>
            <article class="news__item">
              <a href="<?php the_permalink(); ?>">
                <div class="news__item-inner">
                  <div class="news__img">
                  <?php the_post_thumbnail('news'); ?>
                  </div>
                  <div class="news__content">
                    <time class="news__time"><?php the_time('Y.m.d'); ?></time>
                    <p class="news__text">
                    <?php the_title(); ?>
                    </p>
                  </div>
                </div>
              </a>
            </article>
        <?php 
           endwhile;
          endif;
         wp_reset_postdata();
        ?>
          </div>
          <button class="news__btn"><a href="<?php echo esc_url( home_url('category/news')); ?>">ニュース一覧へ</a></button>
        </div>
      </section>
      <section class="story js-animation">
        <div class="story__bg">
          <div class="container outer">
          <?php 
            $story_obj = get_page_by_path('story'); 
            $post = $story_obj;
            setup_postdata($post);
          ?>
            <div class="story__inner">
              <h2 class="story__title"><?php the_title(); ?></h2>
              <div class="story__text-area">
                <?php the_content(); ?>
              </div>
              <div class="btn-position--story">
                <button class="story__btn"><a href="<?php echo esc_url( home_url('story') ); ?>">もっと詳しく</a></button>
              </div>
            </div>
          </div>
         <?php wp_reset_postdata();?>
        </div>
      </section>
      <section class="comments js-animation">
        <div class="container outer">
          <h2 class="comments__title">COMMENTS</h2>
          <p class="comments__caption">
            舞台関係者のみならず各界著名人からコメントが届いています！
          </p>
          <div class="comments__inner">
            <div class="comments__text-area">
              <h3 class="comments__heading">
                京都佛立ミュージアム館長<br />京都・長松寺/横浜・妙深寺<br
                  class="sp"
                />住職
                <strong class="comments__strong">長松清潤</strong>
              </h3>
              <p class="comments__text">
                「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br />
                まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み<br />
                出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。<br />
                仏教の奥義と小池作品が通底して見えるのは何故か。<br />
                40年に及ぶ創作活動で到達した究極の舞台が普遍の題材により現出されようとしている。<br />
              </p>
              <div class="btn-position--comments">
                <button class="comments__btn">
                  <a href="<?php echo esc_url( home_url('comments')); ?>">もっと見る</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="cast outer js-animation">
        <h2 class="cast__title">CAST</h2>
        <div class="cast__bg">
          <div class="container">
            <ul class="cast__list">
              <li class="cast__item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cast1.jpg" alt="小池博史" class="cast__img" />
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">作・演出・振付・構成</p>
                    <h3 class="cast__name">小池博史</h3>
                    <p class="cast__job">
                      (演出家・作家・振付家・舞台美術家・写真家)
                    </p>
                  </div>
                  <p class="cast__text">
                    茨城県日立市出身。一橋大学卒業。<br />
                    演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br />
                    1982年「パパ・タラフマラ」設立。<br />
                    演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br />
                    3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br />
                    著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。
                  </p>
                </div>
              </li>
              <li class="cast__item">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/cast2.jpg"
                  alt="白井さち子"
                  class="cast__img"
                />
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">白井さち子</h3>
                    <p class="cast__job">(バレエ、コンテンポラリーダンス)</p>
                  </div>
                  <p class="cast__text">
                    7歳よりクラシックバレエを始める。<br />
                    82年より6年間橘バレエ学校に在籍。牧阿佐美に師事。<br />
                    日本女子体育短期大学舞踊コース卒。<br />
                    在籍中、太田順造にパントマイムを師事。<br />
                    89年よりパパ・タラフマラに参加。以降国内外の公演に出演。<br />
                    後身のパフォーマーのダンス指導にもあっている。<br />
                    パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。<br />
                    これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。
                  </p>
                </div>
              </li>
              <li class="cast__item">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/cast3.jpg"
                  alt="小谷野哲郎"
                  class="cast__img"
                />
                <div class="cast__item-inner">
                  <div class="cast__info">
                    <p class="cast__part">出演</p>
                    <h3 class="cast__name">小谷野哲郎</h3>
                    <p class="cast__job">(バリ舞踏)</p>
                  </div>
                  <p class="cast__text">
                    東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。<br />
                    1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。<br />
                    学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。<br />
                    2006年、Asian Cultural
                    Councilの助成によりアメリカに滞在。<br />
                    パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。
                  </p>
                </div>
              </li>
            </ul>
            <button class="cast__btn"><a href="<?php echo esc_url( home_url('cast')); ?>">もっと見る</a></button>
          </div>
        </div>
      </section>
     <?php get_footer(); ?>