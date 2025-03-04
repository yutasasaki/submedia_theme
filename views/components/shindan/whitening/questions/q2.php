<!-- question1.php -->
<div id="question2" class="question">
  <div class="bg-white rounded-lg p-2 mb-4">
    <p class="text-3xl font-semibold mb-2"><span class="marker-red">知っていますか？</span></p>
    <p class="font-semibold mb-2 text-base text-left">実は、<span class="marker-yellow">歯を本来の色より白くできるのは</span><br>
      歯科クリニックで行う<span class="marker-yellow">医療ホワイトニング</span>だけ。</p>
    <p class="font-semibold mb-2 text-base text-left">サロンやセルフで行うホワイトニングには、<br>
      <span class="marker-yellow">歯を白くする効果は無いんです。</span><br>
      <span class="text-sm">※汚れ・着色を落とすだけ</span>
    </p>
    <img class="w-full h-auto mx-auto mb-2"
      src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/whitening/q2.avif'); ?>"
      alt="医療ホワイトニングの仕組み">
    <p class="font-semibold mb-4 text-left">本来の歯よりも白くしたい方は、<br>
      <span class="marker-yellow">必ず医療ホワイトニングを選びましょう！</span>
    </p>
    <p class="font-semibold mb-2 text-sm">次の質問</p>
    <img class="animate-bounce lazyload w-10 h-10 text-center inline-block" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/caret-down.png'); ?>" alt="下に進む">
  </div>
  <div class="">
    <div id="question-number" class="diag-question-balloon">
      <p>Q2</p>
    </div>
    <p class="question-text font-semibold mb-8">どんなホワイトニングがしたいですか？</p>
    <div class="options grid grid-cols-2 gap-2">
      <button class="option bg-white w-full click_diagnose" data-question="2" data-answer="high"
        data-selected-answer="すぐに白くなる"><strong class="font-bold">すぐに白くなる</strong><span>(即効性がある)</span></button>
      <button class="option bg-white w-full click_diagnose" data-question="2" data-answer="high"
        data-selected-answer="白さが長持ちする"><strong class="font-bold">白さが長持ちする</strong><span>(持続性がある)</span></button>
      <button class="option bg-white w-full click_diagnose" data-question="2" data-answer="high"
        data-selected-answer="即効性も持続性も"><span>即効性も持続性も</span><strong class="font-bold">両方ある</strong></button>
    </div>
  </div>
</div>