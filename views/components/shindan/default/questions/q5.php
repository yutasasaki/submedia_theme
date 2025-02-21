<!-- question1.php -->
<div id="question5" class="question">
  <div id="question-number" class="diag-question-balloon" style="background-color:<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>; color:<?php echo get_theme_mod('submedia_main_text_color_setting', '#009EF3'); ?>">
    <p>Q5</p>
  </div>
  <p class="question-text font-semibold mb-8">あなたの性別は？</p>
  <img style="border:4px solid; border-color:<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>;" class="w-full h-auto mx-auto rounded-xl mb-2" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/banner/gender.webp'); ?>" alt="あなたの性別について">
  <div class="options grid grid-cols-1 gap-2">
    <button class="option bg-white w-full click_diagnose" data-question="5" data-answer="female" data-selected-answer="女性の方">女性</button>
    <button class="option bg-white w-full click_diagnose" data-question="5" data-answer="male" data-selected-answer="男性の方">男性</button>
    <button class="option bg-white w-full click_diagnose" data-question="5" data-answer="N/A" data-selected-answer="性別は回答しない">回答しない</button>
  </div>
</div>