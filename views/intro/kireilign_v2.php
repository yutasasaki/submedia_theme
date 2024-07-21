<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/first_intro.php'); ?>

<!-- wp:shortcode -->
<?php echo do_shortcode('[show_shindan]'); ?>
<!-- /wp:shortcode -->

<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/recommend_kireilign.php'); ?>

<!-- wp:paragraph -->
<p>※なお、情報の信頼性を担保するため、本記事は歯科医師監修のもと執筆しています。</p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
<?php echo do_shortcode('[show_kansyui]'); ?>
<!-- /wp:shortcode -->

<!-- wp:shortcode -->
<?php echo do_shortcode('[show_carousel_check]'); ?>
<!-- /wp:shortcode -->

<?php include(get_stylesheet_directory() . '/views/components/cta/kireilign.php'); ?>

<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/points.php'); ?>


<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/seimitsu.php'); ?>

<!-- wp:shortcode -->
<?php echo do_shortcode('[show_carousel_first]'); ?>
<!-- /wp:shortcode -->



<!-- wp:shortcode -->
<?php echo do_shortcode('[show_carousel_deppa]'); ?>
<!-- /wp:shortcode -->


<!-- wp:paragraph -->
<h2 id="recommend"><?php echo esc_attr($atts['area']); ?>でオススメの矯正歯科一覧</h2>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p id="clinic_list">先ほど説明したポイントを押さえている<?php echo esc_attr($atts['area']); ?>の矯正歯科一覧です。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>一番良いと思ったところに、ぜひ話を聞きに行ってみてください！</p>
<!-- /wp:paragraph -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elms = document.getElementsByClassName('splide');
    for (var i = 0; i < elms.length; i++) {
      new Splide(elms[i]).mount();
    }
  });
</script>