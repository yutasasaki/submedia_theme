<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/dentalguide/first_intro.php'); ?>

<!-- wp:html -->
<?php include(get_stylesheet_directory() . '/views/shindan/index.php'); ?>
<!-- /wp:html -->

<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/dentalguide/second_intro.php'); ?>

<!-- wp:paragraph -->
<p><sup>※こちらの記事の医療情報に関わる箇所は歯科医師が監修をしています。</sup></p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
<?php echo do_shortcode('[show_kansyui]'); ?>
<!-- /wp:shortcode -->

<!-- wp:html -->
<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/dentalguide/points.php'); ?>
<!-- /wp:html -->

<!-- wp:html -->
<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/dentalguide/carousel_syoshin.php'); ?>
<!-- /wp:html -->

<!-- wp:html -->
<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/dentalguide/seimitsu.php'); ?>
<!-- /wp:html -->

<!-- wp:html -->
<?php include(get_stylesheet_directory() . '/views/components/cta/kireilign.php'); ?>
<!-- /wp:html -->

<!-- wp:html -->
<?php include(get_stylesheet_directory() . '/views/components/intro/paragraph/dentalguide/carousel_deppa.php'); ?>
<!-- /wp:html -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elms = document.getElementsByClassName('splide');
    for (var i = 0; i < elms.length; i++) {
      new Splide(elms[i]).mount();
    }
  });
</script>

<h2><?php echo esc_attr($atts['area']); ?>のおすすめ矯正歯科一覧</h2>