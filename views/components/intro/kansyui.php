<section class="accordion">
  <input id="block-01" type="checkbox" class="toggle">
  <label class="Label" for="block-01">監修医師紹介</label>
  <div class="content">
    <div class="wp-block-group flex gap-4" itemscope itemtype="https://schema.org/Person">
      <!-- wp:image -->
      <figure class="wp-block-image">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/customize/kansyui.webp'); ?>" class="custom_pic" width="96" height="96" itemprop="image">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group {"className":"u-mb-ctrl u-mb-10","layout":{"type":"constrained"}} -->
      <div class="wp-block-group u-mb-ctrl u-mb-10">
        <!-- wp:paragraph -->
        <p>
          <span itemprop="jobTitle">歯科医師</span><br>
          <strong><span itemprop="name" class="swl-fz u-fz-l">見立 英史</span></strong><br>
          <span itemprop="alternateName">Mitate Eiji</span><br><strong>プロフィール</strong>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list" itemprop="description">
          <!-- wp:list-item -->
          <li>金沢医科大学医学部 顎口腔外科講師</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>九州大学歯学部卒業</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>日本口腔外科学会指導医・専門医</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>日本口腔科学会指導医・認定医</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>産業歯科医師</li>
          <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
</section>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "見立 英史",
    "alternateName": "Mitate Eiji",
    "jobTitle": "歯科医師",
    "image": "<?php echo esc_url(get_stylesheet_directory_uri() . '/images/customize/kansyui.webp'); ?>",
    "description": "金沢医科大学医学部 顎口腔外科講師 九州大学歯学部卒業 日本口腔外科学会指導医・専門医 日本口腔科学会指導医・認定医 産業歯科医師",
    "knowsAbout": "歯科矯正, 顎口腔外科, 口腔科学",
    "affiliation": {
      "@type": "MedicalOrganization",
      "name": "金沢医科大学医学部"
    }
  }
</script>