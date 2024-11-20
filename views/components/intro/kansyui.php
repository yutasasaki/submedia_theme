<section class="accordion">
  <input id="block-01" type="checkbox" class="toggle">
  <label class="Label" for="block-01">監修者紹介</label>
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
          <span itemprop="jobTitle">現役歯科衛生士</span><br>
          <strong><span itemprop="name" class="swl-fz u-fz-l"><?php echo get_bloginfo('name'); ?>編集部</span></strong><br>
          <strong>プロフィール</strong>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list" itemprop="description">
          <!-- wp:list-item -->
          <li><a href="https://www.jdha.or.jp/training/school.html" target="_blank">歯科衛生士学校</a>を卒業後、総合病院の口腔外科で勤務。</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>歯科クリニックでの勤務をしつつ、<a href="https://www.jdha.or.jp/aboutdh/" target="_blank">歯科衛生士</a>の経験を活かし、当メディアに参画し監修/編集業務を担当。</li>
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
    "name": "現役歯科衛生士",
    "jobTitle": "歯科衛生士",
    "image": "<?php echo esc_url(get_stylesheet_directory_uri() . '/images/customize/kansyui.webp'); ?>",
    "description": "歯科衛生士学校を卒業後、総合病院の口腔外科で勤務。歯科クリニックでの勤務をしつつ、歯科衛生士の経験を活かし、当メディアに参画し監修/編集業務を担当。",
    "knowsAbout": "歯科矯正, 顎口腔外科, 口腔科学",
    "affiliation": {
      "@type": "MedicalOrganization",
      "name": "現役歯科衛生士"
    }
  }
</script>