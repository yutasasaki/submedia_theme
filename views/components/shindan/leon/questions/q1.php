<!-- question1.php -->
<div id="question1" class="question">
  <div id="question-number" class="diag-question-balloon">
    <p>Q1</p>
  </div>
  <p class="question-text font-semibold mb-8">先生の治療実績は気にしますか？</p>
  <img class="w-full h-auto mx-auto rounded-xl mb-2" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan_leon/q1.webp'); ?>" alt="先生の治療実績は気にしますか？">
  <div class="options grid grid-cols-1 gap-2">
    <button class="option bg-white w-full click_diagnose" data-question="1" data-answer="reasonable" data-selected-answer="実績のある先生にお願いをしたい">実績のある先生にお願いをしたい</button>
    <button class="option bg-white w-full click_diagnose" data-question="1" data-answer="priceless" data-selected-answer="実績は気にしない">実績は気にしない</button>
  </div>
</div>