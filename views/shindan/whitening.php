<!-- wp:html -->
<div id="whitening_shindan_top" class="clinic_shindan_whitening shadow">
  <div class="diagnose_tit">
    <p class="text-base"><span class="marker-red">あなたにピッタリな<span class="text-lg font-bold">ホワイトニング</span></span><br>が分かる<span class="text-lg font-bold">診断</span>がこちら↓</p>
  </div>
  <div id="shindan_container" class="">
    <div id="questions-container" class="diagnose_container">
      <?php include(get_stylesheet_directory() . '/views/components/shindan/whitening/questions/q1.php'); ?>
      <?php include(get_stylesheet_directory() . '/views/components/shindan/whitening/questions/q2.php'); ?>
    </div>
    <?php include(get_stylesheet_directory() . '/views/components/shindan/whitening/cta.php'); ?>
  </div>

  <script>
    (function() {
      const container = document.querySelector('.clinic_shindan_whitening');
      let currentQuestionIndex = 1;
      const totalQuestions = 2; // ここで質問の総数を設定
      let selectedOptions = {};

      document.addEventListener("DOMContentLoaded", function() {
        // 全ての質問を一旦非表示にする
        container.querySelectorAll('.question').forEach(question => {
          question.style.display = 'none';
        });

        // 最初の質問のみ表示
        showQuestion(currentQuestionIndex);
        container.querySelectorAll('.option').forEach((option, index) => {
          option.addEventListener('click', function(e) {
            // 現在の質問のIDを取得
            const questionId = this.closest('.question').id;
            // data-selected-answer属性の値を取得
            const selectedAnswer = this.dataset.selectedAnswer;

            // 選択したオプションのdata属性を保存
            selectedOptions[questionId] = selectedAnswer;
            
            // #whitening_shindan_topにスムーズスクロール
            const shindanContainer = document.getElementById('whitening_shindan_top');
            if (shindanContainer) {
              shindanContainer.scrollIntoView({ behavior: 'smooth' });
            }


            // 全てのオプションから選択スタイルをリセット
            document.querySelectorAll(`#${questionId} .option`).forEach(button => {
              button.style.border = "none"; // 既存の選択スタイルをリセット
            });

            // クリックされたボタンにボーダースタイルを適用
            this.style.border = "4px solid";
            this.style.borderColor = "#007aff";
            this.style.backgroundColor = "#fff";

            // 次の質問へ移動する関数を呼び出す（存在する場合）
            goToNextQuestion();

            // 選択したオプションをコンソールに表示して確認
            console.log(selectedOptions);
          });
        });
      });

      function showQuestion(index) {
        const currentQuestion = container.querySelector('.question:not([style*="display: none"])');
        if (currentQuestion) {
          // 現在の質問をフェードアウト
          currentQuestion.style.animation = 'fadeOut 0.5s forwards';
          setTimeout(() => {
            currentQuestion.style.display = 'none';
            fadeInNewQuestion(index);
          }, 500); // 1秒後に次の質問を表示
        } else {
          fadeInNewQuestion(index);
        }
      }

      function fadeInNewQuestion(index) {
        // 現在の質問を表示
        const newQuestion = container.querySelector(`#question${index}`);
        if (newQuestion) {
          newQuestion.style.display = 'block';
          newQuestion.style.animation = 'fadeIn 1s forwards'; // 新しい質問をフェードイン
        }
      }

      function goToNextQuestion() {
        updateAnswersDisplay(); // ここで回答を更新
        if (currentQuestionIndex < totalQuestions) {
          currentQuestionIndex++;
          showQuestion(currentQuestionIndex);
        } else {
          showResults(); // 結果表示関数を呼び出す
        }
      }

      function showResults() {
        // 回答に基づいて表示するCTAを決定
        container.querySelector("#questions-container").style.display = 'none'; // 質問を非表示

        // 結果セクションをフェードインで表示
        const resultsSection = container.querySelector("#shindan_whitening");
        resultsSection.style.display = 'block';
        resultsSection.style.opacity = 0; // アニメーションのために透明度を0に設定
        setTimeout(() => {
          resultsSection.style.animation = 'fadeIn 0.5s forwards'; // フェードインアニメーションを適用
        }, 500); // 1秒後に次の質問を表示

      }

      function updateAnswersDisplay() {
        // 選択されたオプションに基づいてテキストを更新
        container.querySelector('#answer1').textContent = selectedOptions['question1'] || '未回答';
        container.querySelector('#answer2').textContent = selectedOptions['question2'] || '未回答';
      }
    })();
  </script>
</div>
<!-- /wp:html -->
