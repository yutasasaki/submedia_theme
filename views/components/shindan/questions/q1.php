<!-- question1.php -->
<div id="question1" class="question">
  <div id="question-number" class="diag-question-balloon" style="background-color:<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>; color:<?php echo get_theme_mod('submedia_main_text_color_setting', '#009EF3'); ?>">
    <p>Q1</p>
  </div>
  <p class="question-text font-semibold mb-8">矯正の費用はなるべく抑えたい？</p>
  <img style="border:4px solid; border-color:<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>;" class="w-full h-auto mx-auto rounded-xl mb-24" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/banner/price.webp'); ?>" alt="治療の価格">
  <div class="options grid grid-cols-1 gap-4">
    <button class="option bg-white w-full click_diagnose" data-question="1" data-answer="reasonable" data-selected-answer="矯正の費用はなるべく安くしたい">できれば安くしたい！</button>
    <button class="option bg-white w-full click_diagnose" data-question="1" data-answer="priceless" data-selected-answer="矯正の費用は高くても気にしない">高くても気にしない！</button>
  </div>
</div>