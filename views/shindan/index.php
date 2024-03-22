<!-- wp:html -->
<div class="diagnose shadow">
  <div class="diagnose_tit">
    あなたに合う矯正方法を診断！
    <div class="label">
      カンタン４問
    </div>
  </div>
  <div id="modal" class="">
    <section class="">
      <div id="question-number" class="diag-question-balloon">
        <p></p>
      </div>
      <p id="question" class=""></p>
      <div id="options" class=""></div>
    </section>
  </div>
  <div id="cta_modal" class="" style="display:none;">
    <!-- インビザライン -->
    <section id="invisalign" style="display:none;">
      <div class="result_message">
        <p class="lh-20 mx-20 wrap-keep">
          <span class="color-gray">アンケートの回答ありがとうございます!</span><br>
          <span class="marker-yellow bold semilarge">目立たず歯列全体を治療</span>できる<span class="bold large">『インビザライン』</span>はいかがですか?
        </p>
      </div>
      <div class="content_img mb-20">
        <img class="lazyload" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/invisalign.webp'); ?>" alt="" style="width: 100%; height: auto;">
        <p class="mb-1 mx-10 color-gray text-left text-xs">※1 インビザライン・ライトパッケージの料金。<br>
          ※1 上記に記載している料金以外に、再診料やリテーナー費用、症状によっては追加治療の費用が別途かかります。<br>
          ※2 2022年9月時点における「インビザライン・システム」および「インビザライン Goシステム」の合計</p>
      </div>
      <div class="cta_button">
        <p class="cta_text_before">
          ＼まずは自分に合った治療かどうかをチェック!／
        </p>
        <div class="btn poyo">
          <a href="/media/diagnose/invisalign_cta/" class="btn_booking">
            <img data-track data-value="インビザラインCTAクリック" class="lazyload" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/btn_dia_iv.webp'); ?>" alt="まずは気軽にご相談ください">
          </a>
        </div>
        <p class="my-20 mx-10 color-gray text-left text-xs">※Q1で選択した症状が強い場合は適応外になる場合がございます。<br>
          ※骨格に問題のある歯並びは矯正歯科治療のみでは修正が困難な場合がございます。<br>
          ※実際に治療を勧めるものではありません。ご自身に合った治療法については、歯科医師にご相談ください。<br>
          ※保険適用外の自由診療となります。<br>
          ※実際の治療法を確定するものではありません。ご自身に合った治療法については、歯科医師にご相談ください。</p>
      </div>
    </section>

    <!-- キレイライン -->
    <section id="kireilign" style="display:none;">
      <div class="result_message semilarge color-gray ">
        <p class="lh-20 mx-20 wrap-keep">
          <span class="color-gray">アンケートの回答ありがとうございます!</span><br>
          <span class="marker-yellow bold semilarge">気軽な値段で始められる</span><span class="bold large">『キレイライン矯正』</span>はいかがですか?
        </p>
      </div>
      <div class="content_img mb-20">
        <img class="lazyload" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/kireilign.webp'); ?>" alt="" style="width: 100%; height: auto;">
      </div>
      <div class="cta_button">
        <p class="cta_text_before">
          ＼まずは自分に合った治療かどうかをチェック!／
        </p>
        <div class="btn poyo">
          <a href="/media/diagnose/kireilign_cta/" class="btn_booking">
            <img data-track data-value="キレイラインCTAクリック" class="lazyload" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/btn_dia_kl.webp'); ?>" alt="まずは気軽にご相談ください">
          </a>
        </div>
        <p class="my-20 mx-10 color-gray text-left text-xs">※Q1で選択した症状が強い場合は適応外になる場合がございます。<br>
          ※骨格に問題のある歯並びは矯正歯科治療のみでは修正が困難な場合がございます。<br>
          ※実際に治療を勧めるものではありません。ご自身に合った治療法については、歯科医師にご相談ください。<br>
          ※保険適用外の自由診療となります。<br>
          ※実際の治療法を確定するものではありません。ご自身に合った治療法については、歯科医師にご相談ください。</p>
    </section>

    <!-- ワイヤー矯正 -->
    <section id="wire" style="display:none;">
      <div class="result_message">
        <p class="lh-20 mx-20 wrap-keep">
          <span class="color-gray">アンケートの回答ありがとうございます!</span><br>
          <span class="marker-yellow bold semilarge">リーズナブルに歯列全体を治療</span>できる<span class="bold large">『ワイヤー矯正』</span>はいかがですか?
        </p>
      </div>
      <div class="content_img mb-20">
        <img class="lazyload" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/wire.webp'); ?>" alt="" style="width: 100%; height: auto;">
      </div>
      <div class="cta_button">
        <p class="cta_text_before">
          ＼まずは自分に合った治療かどうかをチェック!／
        </p>
        <div class="btn poyo">
          <a href="/media/diagnose/wire_cta/" class="btn_booking">
            <img data-track data-value="ワイヤCTAクリック" class="lazyload" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/shindan/btn_dia_wire.webp'); ?>" alt="まずは気軽にご相談ください">
          </a>
        </div>
        <p class="my-20 mx-10 color-gray text-left text-xs">※Q1で選択した症状が強い場合は適応外になる場合がございます。<br>
          ※骨格に問題のある歯並びは矯正歯科治療のみでは修正が困難な場合がございます。<br>
          ※実際に治療を勧めるものではありません。ご自身に合った治療法については、歯科医師にご相談ください。<br>
          ※保険適用外の自由診療となります。<br>
          ※実際の治療法を確定するものではありません。ご自身に合った治療法については、歯科医師にご相談ください。</p>
      </div>
    </section>
  </div>
</div>
<script type="text/javascript">
  const questions = [{
      text: "Q1. あなたの歯並びで最も気になる症状はどれですか？",
      options: ["ガタガタ・八重歯", "出っ歯", "すきっ歯", "口ゴボ", "受け口", "その他"]
    },
    {
      text: "Q2. 歯列矯正に1年を通して何円までなら払おうと思いますか？",
      options: ["10万円〜30万円", "31万円〜50万円", "51万円〜70万円", "71万円〜"],
      results: ["kireilign", "wire", "invisalign", "invisalign"]
    },
    {
      text: "Q3. 過去に歯列矯正をした経験はありますか？",
      options: ["ワイヤー矯正治療をしたことがある", "マウスピース矯正治療をしたことがある", "裏側矯正治療をしたことがある", "セラミック矯正治療をしたことがある", "矯正治療をしたことはない"]
    },
    {
      text: "Q4. 最後にあなたのご年齢を教えてください。",
      options: ["20歳以下", "21歳〜30歳", "31歳〜40歳", "41歳〜50歳", "51歳〜60歳", "61歳以上"]
    }
  ];

  let currentQuestionIndex = 0;

  function loadQuestion() {
    const question = questions[currentQuestionIndex];
    const questionNumber = document.getElementById("question-number").firstChild;
    const questionText = document.getElementById("question");
    const optionsDiv = document.getElementById("options");

    // Clear previous options and remove fade-in class to reset the animation
    optionsDiv.innerHTML = '';
    optionsDiv.classList.remove('fade-in');

    questionNumber.textContent = 'Q' + (currentQuestionIndex + 1);
    questionText.textContent = question.text;

    question.options.forEach((option, optionIndex) => {
      const optionButton = document.createElement("button");
      optionButton.textContent = option;
      optionButton.setAttribute("data-track", "");
      optionButton.setAttribute("data-value", option);

      optionButton.addEventListener('click', function() {
        question.selectedOption = optionIndex;
        if (currentQuestionIndex < questions.length - 1) {
          currentQuestionIndex++;
          loadQuestion();
        } else {
          document.getElementById("modal").style.display = 'none';
          document.getElementById("cta_modal").style.display = 'inline-block';
          let treatment = questions[1].results[questions[1].selectedOption];
          document.getElementById(treatment).style.display = 'inline-block';
        }
        // Add fade-in class after setting display to ensure animation plays
        setTimeout(() => {
          optionsDiv.classList.add('fade-in');
        }, 10); // short delay to ensure the class is added after the element is visible
      });
      optionsDiv.appendChild(optionButton);
    });

    // Ensure fade-in class is added for initial load or after resetting classes
    setTimeout(() => {
      optionsDiv.classList.add('fade-in');
    }, 10);
  }


  loadQuestion();
</script>
<!-- /wp:html -->