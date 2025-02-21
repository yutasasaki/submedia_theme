<!-- question1.php -->
<div id="question2" class="question">
  <div id="question-number" class="diag-question-balloon">
    <p>Q2</p>
  </div>
  <p class="question-text font-semibold mb-8">価格は気にしますか？</p>
  <img class="w-full h-auto mx-auto rounded-xl mb-2" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/prt/q2.webp'); ?>" alt="価格は気にしますか？">
  <div class="options grid grid-cols-2 gap-2">
    <button class="option bg-white w-full click_diagnose" data-question="2" data-answer="high" data-selected-answer="高くても構わない">高くても構わない</button>
    <button class="option bg-white w-full click_diagnose" data-question="2" data-answer="middle" data-selected-answer="平均的な価格であればいい">平均的な価格であればいい</button>
    <button class="option bg-white w-full click_diagnose" data-question="2" data-answer="low" data-selected-answer="安ければ治療品質は気にしない">安ければ治療品質は気にしない</button>
  </div>
</div>