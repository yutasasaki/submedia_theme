<?php
/**
 * The custom footer for guide-saitamashintoshin page
 */
?>
  <footer>
    <p class="pagetop"><a href="#"><i class="fas fa-chevron-up"></i></a></p>
    <div class="footer_wrap">
      <div class="f_info">
        <div class="f_info_in"> <a href="<?php echo esc_url(home_url('/')); ?>">
            <p class="f_logo"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/img/common/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" width="380"></p>
          </a>
          <p class="add"><?php bloginfo('name'); ?></p>
          <p class="add">〒330-0071<br>
            埼玉県さいたま市浦和区上木崎1丁目13−1</p>
          <p class="add">JR東北線さいたま新都心駅から10分<br>与野駅から徒歩5分</p>
          <p class="tel"><a href="tel:048-711-1422"><i class="fas fa-phone-alt"></i>048-711-1422</a></p>
          <p class="mail"><a href="https://plus.dentamap.jp/apl/netuser/?id=5655" target="_blank"><i class="fas fa-mobile-alt"></i>WEB予約はこちら</a></p>
          <p class="hour">平日<br>
            AM 09：30 ～ 13：30、<br class="sp">PM 15：00 ～ 20：00<br>
            土日祝<br>
            AM 09：30 ～ 13：30、<br class="sp">PM 14：30 ～ 19：30<br>
          </p>
          <p> <br class="sp">
            （年中無休）</p>
        </div>
        <!-- /f_info_in -->
      </div>
      <!-- /f_info -->
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6223.002768455087!2d139.63106955838282!3d35.8879348415021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018c17e3001ac09%3A0x3811a2d71bc2694a!2z44Oh44OH44Kj44Kx44Ki5q2v56eR44Kv44Oq44OL44OD44Kv44GV44GE44Gf44G-5paw6YO95b-D!5e0!3m2!1sja!2sjp!4v1618893694574!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <!-- /map -->
    </div>
    <!-- /footer_wrap -->
    <div class="f_photo"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/img/common/mv20.jpg'); ?>" alt="<?php bloginfo('name'); ?>"></div>
    <div class="group">
      <p>広域医療法人社団 <span>伸詠会</span></p>
      <ul>
        <li><a href="https://www.medicare-oyama.com/" target="_blank">小山</a></li>
        <li><a href="https://www.medicare-dental.com/" target="_blank">茅ケ崎</a></li>
        <li><a href="https://www.medicare-shimotsuma.com/" target="_blank">下妻</a></li>
        <li><a href="https://medicare-funabashi.com/" target="_blank">新船橋</a></li>
        <li><a href="https://www.medicare-saitamashintoshin.com/">さいたま新都心</a></li>
        <br class="sp">
        <li><a href="https://medicare-shinkomatsu.com/" target="_blank">新小松</a></li>
        <li><a href="https://www.nagano-miwa.com/" target="_blank">長野三輪</a></li>
        <li><a href="https://www.medicare-shibata.com/" target="_blank">新発田</a></li>
      </ul>

      <a class="houjin-banner" href="https://www.shineikai.net/" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/img/common/shineikai_banner.jpg'); ?>" alt="法人ページはこちら">
      </a>

    </div>
    <!-- /group -->
  </footer>
  <ul class="sp_fix">
    <li><a href="tel:048-711-1422"><i class="fas fa-phone-alt"></i>TEL</a></li>
    <li><a href="https://plus.dentamap.jp/apl/netuser/?id=5655" target="_blank"><i class="fas fa-mobile-alt"></i>WEB予約</a></li>
    <li><a href="<?php echo esc_url(home_url('/access.html')); ?>"><i class="fas fa-map-marker-alt"></i>ACCESS</a></li>
  </ul>
  <!-- /sp_fix -->
  <?php wp_footer(); ?>
</body>
</html>