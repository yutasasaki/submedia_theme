<!-- wp:html -->
<style>
  .diag-question-balloon::before {
    border-top: 10px solid <?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?> !important;
  }

  #question {
    border-bottom: 2px dashed <?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?> !important;
  }
</style>
<div class="diagnose shadow">
  <div class="diagnose_tit" style="background-color:<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>; color:<?php echo get_theme_mod('submedia_main_text_color_setting', '#009EF3'); ?>">
    あなたに合う矯正方法をチェック
    <div class=" label">
      カンタン４問
    </div>
  </div>
  <div id="modal" class="">
    <div id="questions-container">
      <?php include(get_stylesheet_directory() . '/views/components/shindan/questions/q1.php'); ?>
      <?php include(get_stylesheet_directory() . '/views/components/shindan/questions/q2.php'); ?>
      <?php include(get_stylesheet_directory() . '/views/components/shindan/questions/q3.php'); ?>
      <?php include(get_stylesheet_directory() . '/views/components/shindan/questions/q4.php'); ?>
      <?php include(get_stylesheet_directory() . '/views/components/shindan/questions/q5.php'); ?>
    </div>
    <?php include(get_stylesheet_directory() . '/views/components/shindan/cta/kireilign.php'); ?>
  </div>

  <script>
    let currentQuestionIndex = 1;
    const totalQuestions = 5; // ここで質問の総数を設定
    let selectedOptions = {};
    document.addEventListener("DOMContentLoaded", function() {
      // 全ての質問を一旦非表示にする
      document.querySelectorAll('.question').forEach(question => {
        question.style.display = 'none';
      });

      // 最初の質問のみ表示
      showQuestion(currentQuestionIndex);
      document.querySelectorAll('.option').forEach((option, index) => {
        option.addEventListener('click', function(e) {
          // 現在の質問のIDを取得
          const questionId = this.closest('.question').id;
          // data-selected-answer属性の値を取得
          const selectedAnswer = this.dataset.selectedAnswer;

          // 選択したオプションのdata属性を保存
          selectedOptions[questionId] = selectedAnswer;


          // 全てのオプションから選択スタイルをリセット
          document.querySelectorAll(`#${questionId} .option`).forEach(button => {
            button.style.border = "none"; // 既存の選択スタイルをリセット
          });

          // クリックされたボタンにボーダースタイルを適用
          this.style.border = "4px solid";
          this.style.borderColor = "<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>";
          this.style.backgroundColor = "<?php echo get_theme_mod('submedia_light_color_setting', '#009EF3'); ?>";

          // 次の質問へ移動する関数を呼び出す（存在する場合）
          goToNextQuestion();

          // 選択したオプションをコンソールに表示して確認
          console.log(selectedOptions);
        });
      });
    });

    function showQuestion(index) {
      const currentQuestion = document.querySelector('.question:not([style*="display: none"])');
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
      const newQuestion = document.getElementById(`question${index}`);
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
      document.getElementById("questions-container").style.display = 'none'; // 質問を非表示

      // ここでfinalAnswerの値に基づいて、どのCTAを表示するか決定する
      if (selectedOptions['question1'] == "矯正の費用はなるべく安くしたい") {
        document.getElementById("cost_true").style.display = 'block'; // CTAを表示
      } else {
        document.getElementById("cost_false").style.display = 'block'; // CTAを表示
      }

      // 結果セクションをフェードインで表示
      const resultsSection = document.getElementById("shindan_kireilign");
      resultsSection.style.display = 'block';
      resultsSection.style.opacity = 0; // アニメーションのために透明度を0に設定
      setTimeout(() => {
        resultsSection.style.animation = 'fadeIn 0.5s forwards'; // フェードインアニメーションを適用
      }, 500); // 1秒後に次の質問を表示

    }

    function updateAnswersDisplay() {
      // 選択されたオプションに基づいてテキストを更新
      document.getElementById('answer1').textContent = selectedOptions['question1'] || '未回答';
      document.getElementById('answer2').textContent = selectedOptions['question2'] || '未回答';
      document.getElementById('answer3').textContent = selectedOptions['question3'] || '未回答';
      document.getElementById('answer4').textContent = selectedOptions['question4'] || '未回答';
      document.getElementById('answer5').textContent = selectedOptions['question5'] || '未回答';
    }
  </script>
</div>
  <!-- /wp:html -->