<!-- question1.php -->
<div id="question2" class="question">
  <div id="question-number" class="diag-question-balloon" style="background-color:<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>; color:<?php echo get_theme_mod('submedia_main_text_color_setting', '#009EF3'); ?>">
    <p>Q2</p>
  </div>
  <p class="question-text font-semibold mb-8">気になっている歯並びは？</p>
  <div class="options grid grid-cols-2 gap-2">
    <button class="option bg-white m-0 h-32 click_diagnose" data-question="2" data-answer="gatagata" data-selected-answer="ガタガタの歯並びが気になる">
      <img class="w-32 h-auto mx-auto" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/teethtype/gatagata.webp'); ?>" alt="">
      <p>ガタガタ・八重歯</p></button>
    <button class="option bg-white m-0 h-32 click_diagnose" data-question="2" data-answer="deppa" data-selected-answer="出っ歯が気になる">
      <img class="w-32 h-auto mx-auto" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/teethtype/deppa.webp'); ?>" alt="">
      <p>出っ歯</p></button>
    <button class="option bg-white m-0 h-32 click_diagnose" data-question="2" data-answer="sukippa" data-selected-answer="すきっ歯が気になる">
      <img class="w-32 h-auto mx-auto" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/teethtype/sukippa.webp'); ?>" alt="">
      <p>すきっ歯</p></button>
    <button class="option bg-white m-0 h-32 click_diagnose" data-question="2" data-answer="zure" data-selected-answer="歯の中心のズレが気になる">
      <img class="w-32 h-auto mx-auto" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/teethtype/zure.webp'); ?>" alt="">
      <p>中心のずれ</p></button>
    <button class="option bg-white m-0 h-32 click_diagnose" data-question="2" data-answer="ukeguchi" data-selected-answer="受け口が気になる">
      <img class="w-32 h-auto mx-auto" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/teethtype/ukeguchi.webp'); ?>" alt="">
      <p>受け口</p></button>
    <button class="option bg-white m-0 h-32 click_diagnose" data-question="2" data-answer="kamiawase" data-selected-answer="噛み合わせが深いのが気になる">
      <img class="w-32 h-auto mx-auto" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/teethtype/deepbite.webp'); ?>" alt="">
      <p>深い噛み合わせ</p></button>
    <button class="option bg-white m-0 h-32 click_diagnose" data-question="2" data-answer="maeba" data-selected-answer="前歯が閉じない">
      <img class="w-32 h-auto mx-auto" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/teethtype/tojinai.webp'); ?>" alt="">
      <p>前歯が閉じない</p></button>
    <button class="option bg-white m-0 h-32 click_diagnose" data-question="2" data-answer="etc" data-selected-answer="個別に歯科医に相談したい">
      <img class="w-32 h-auto mx-auto" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/teethtype/etc.webp'); ?>" alt="">
      <p>その他</p></button>
  </div>
</div>