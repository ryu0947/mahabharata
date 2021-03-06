<section class="schedule js-animation">
  <div class="container outer">
    <div class="schedule__inner">
      <h2 class="schedule__title">SCHEDULE</h2>
      <ul class="schedule__list">
        <?php
        $schedule_group = SCF::get('schedule', 29);
        foreach ($schedule_group as $schedule) :
          $day = get_post_meta(29, $schedule['day'], true);
          $time = get_post_meta($schedule['time']);
          $location = get_post_meta($schedule['location']);
          $ticket = get_post_meta($schedule['ticket']);
          if(empty($day && $time && $location && $ticket)):
        ?>
          <li class="schedule__item">
            <span class="schedule__text"><?php echo $schedule['day']; ?></span>
            <span class="schedule__text"><?php echo $schedule['time']; ?></span>
            <span class="schedule__text"><?php echo $schedule['location']; ?></span>
            <span class="schedule__text"><a href="<?php the_field('reservation', 33); ?>" class="schedule__link"><?php echo $schedule['ticket']; ?></a></span>
          </li>
        <?php 
        endif;
       endforeach; 
       ?>
      </ul>
    </div>
    <div class="schedule_link-area">
      <button class="schedule__btn--brown">
        <a href="<?php echo esc_url(home_url('inquiry')); ?>">お問い合わせはこちら</a>
      </button>
      <button class="schedule__btn">
        <a href="<?php the_field('reservation', 33); ?>">チケット予約サイトへ</a>
      </button>
    </div>
  </div>
</section>
</main>
<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="copyright">
        <small>Copyright &copy; 2020 完全版マハーバーラタ All Rights
          Reserved.</small>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>