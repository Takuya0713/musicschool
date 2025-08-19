<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>きたむらミュージックスクール | 「音楽で生きる」を叶える ミュージックスクール</title>
  <meta name="description" content="「音楽で生きる」を叶える ミュージックスクール「きたむらミュージックスクール」の公式ホームページです。">
  <link rel="icon" href="<?php echo get_template_directory_uri(  ); ?>/images/common/favicon.ico" id="favicon">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(  ); ?>/images/common/apple-touch-icon-180x180.png">
  <?php wp_head(); ?>
</head>

<body>
  <!-- ヘッダー -->
  <header class="l-header">
    <div class="inner">
      <?php if (is_front_page(  ) || is_search()) : ?>
      <h1 class="l-header__logo">
        <?php else : ?>
          <div class="l-header__logo">
        <?php endif; ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-sp.svg" alt="きたむらミュージックスクール">
              </picture>
            </a>
            <?php if (is_front_page() || is_search()) : ?>
    </div>
      </h1>
      <?php else : ?>
    </div>
    <?php endif; ?>

    <button class="l-header__nav-open c-hamburger pc-none">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <nav class="l-header__nav" aria-label="ヘッダーナビゲーション">
      <ul>
        <li>
          <a href="./plan.html">料金</a>
        </li>
        <li>
          <a href="./blog-list.html">ブログ</a>
        </li>
        <li>
          <a href="./result-list.html">卒業実績</a>
        </li>
      </ul>
      <a href="./contact-form.html" class="c-button c-button--head">お問い合わせ</a>
    </nav>
    </div>
  </header>