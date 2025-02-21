<!-- question1.php -->
<div id="question3" class="question">
  <div id="question-number" class="diag-question-balloon" style="background-color:<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>; color:<?php echo get_theme_mod('submedia_main_text_color_setting', '#009EF3'); ?>">
    <p>Q3</p>
  </div>
  <p class="question-text font-semibold mb-8">治療中の見た目は気になる？</p>
  <img style="border:4px solid; border-color:<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>;" class="w-full h-auto mx-auto rounded-xl mb-2" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/banner/kininaru.webp'); ?>" alt="治療中の見た目">
  <div class="options grid grid-cols-1 gap-2">
    <button class="option bg-white w-full click_diagnose" data-question="3" data-answer="yes" data-selected-answer="治療中の見た目は気になる">気になる！</button>
    <button class="option bg-white w-full click_diagnose" data-question="3" data-answer="no" data-selected-answer="治療中の見た目はあまり気にしない">あまり気にしない！</button>
  </div>
</div>