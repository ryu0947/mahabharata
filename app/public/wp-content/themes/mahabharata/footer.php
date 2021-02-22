<section class="schedule js-animation">
        <div class="container outer">
          <div class="schedule__inner">
            <h2 class="schedule__title">SCHEDULE</h2>
            <ul class="schedule__list">
              <?php 
                $schedule_group = SCF::get('schedule', 29);
                foreach($schedule_group as $schedule):
              ?>
                <li class="schedule__item">
                  <span class="schedule__text"><?php echo $schedule['day']; ?></span>
                  <span class="schedule__text"><?php echo $schedule['time']; ?></span>
                  <span class="schedule__text"><?php echo $schedule['location']; ?></span>
                  <span class="schedule__text"
                    ><a href="#" class="schedule__link"
                      >チケット予約受付中</a
                    ></span
                  >
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="schedule_link-area">
            <button class="schedule__btn--brown">
              <a href="#">お問い合わせはこちら</a>
            </button>
            <button class="schedule__btn">
              <a href="#">チケット予約サイトへ</a>
            </button>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="container">
        <div class="footer__inner">
          <div class="copyright">
            <small
              >Copyright &copy; 2020 完全版マハーバーラタ All Rights
              Reserved.</small
            >
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
