<?php
/**
 * The custom header for guide-saitamashintoshin page
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M785QXS8');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  
  <!-- カスタムCSSの読み込み -->
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/css/reset.css'); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/css/style_sp.css'); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/css/sub.css'); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/css/latest-posts.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/js/smooth.js'); ?>"></script>
  
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</head>

<body id="sub" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WL558LVZ');
  </script>
  <!-- End Google Tag Manager -->
  <header>
    <div class="header_box"> <a href="<?php echo esc_url(home_url('/')); ?>">
        <p class="logo"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/img/common/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" width="546"></p>
      </a>
      <div class="h_cv">
        <p class="tel"><i class="fas fa-phone-alt"></i>048-711-1422</p>
        <p class="mail"><a href="https://plus.dentamap.jp/apl/netuser/?id=5655" target="_blank"><i class="fas fa-mobile-alt"></i>WEB予約はこちら</a></p>
      </div>
      <!-- /h_cv -->
    </div>
    <!-- /header_box -->
    <p class="mv"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/pages/saitamashintoshin/img/common/mv09.jpg'); ?>" alt="<?php bloginfo('name'); ?>"></p>
  </header>
  <nav>
    <input type="checkbox" id="sp_nav">
    <label for="sp_nav"> <span></span> <span></span> </label>
    <ul>
      <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ<span>TOP</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/policy.html')); ?>">当院について<span>POLICY</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/firtst.html')); ?>">初めての方へ<span>FIRST</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/doctor.html')); ?>">ドクター紹介<span>DOCTOR</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/guidance/')); ?>">診療内容<span>TREATMENT</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/clinic-info.html')); ?>">クリニック紹介<span>CLINIC</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/price.html')); ?>">料金表<span>PRICE</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/access.html')); ?>">アクセス<span>ACCESS</span></a></li>
    </ul>
  </nav>
  <?php 
  $domain_url = htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/', ENT_QUOTES, 'UTF-8');
  ?>
  <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="pankuzu">
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="<?php echo $domain_url;?>">
        <span itemprop="name">TOP</span></a>
      <meta itemprop="position" content="1" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
      <a itemprop="item" href="<?php echo $domain_url . 'guidance/'; ?>">
        <span itemprop="name">診療内容</span></a>
      <meta itemprop="position" content="2" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
      <a itemprop="item" href="<?php echo $domain_url . 'whitening/'; ?>">
        <span itemprop="name">ホワイトニング</span></a>
      <meta itemprop="position" content="3" />
    </li>
  </ul>
  <!-- /pankuzu -->