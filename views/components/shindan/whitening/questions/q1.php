<!-- question1.php -->
<div id="question1" class="question">
  <div id="question-number" class="diag-question-balloon">
    <p>Q1</p>
  </div>
  <p class="question-text font-semibold mb-8">どれくらい白くしたいですか？</p>
  <img class="w-full h-auto mx-auto rounded-xl mb-2" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/whitening/q1.webp'); ?>" alt="どれくらい白くしたいですか？">
  <div class="options grid grid-cols-1 gap-2">
    <button class="option bg-white w-full click_diagnose" data-question="1" data-answer="high" data-selected-answer="輝く白さ"><strong>輝く白さ</strong>にしたい</button>
    <button class="option bg-white w-full click_diagnose" data-question="1" data-answer="mid" data-selected-answer="自然な白さ"><strong>自然な白さ</strong>にしたい</button>
    <button class="option bg-white w-full click_diagnose" data-question="1" data-answer="normal" data-selected-answer="普通の歯の色"><strong>普通の歯の色</strong>にしたい</button>
  </div>
</div>