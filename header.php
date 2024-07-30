<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2family=Noto+Sans+JP:wght@100..900&family=Yuji+Syuku&display=swap" rel="stylesheet">
  <title>株式会社拓電</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="l-header__title">
      <a href="<?php echo esc_url(home_url('/')); ?>">株式会社拓電</a>
    </div>
    <nav class="pc-only">
      <ul>
        <li><a href="<?php echo esc_url(home_url('business')); ?>">業務内容</a></li>
        <li><a href="<?php echo get_post_type_archive_link('achievement'); ?>">施工実績</a></li>
        <li><a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a></li>
        <li><a href="<?php echo esc_url(home_url('company')); ?>">会社概要</a></li>
        <li class="l-header__buttonArea">
          <a href="<?php echo esc_url(home_url('recruit-contact')); ?>" class="l-header__button lightblue">
            <img src="<?php echo get_template_directory_uri(); ?>/img/footer/footer-mail.svg" alt="">
            求人エントリーはこちら
          </a>
          <a href="<?php echo esc_url(home_url('work-contact')); ?>" class="l-header__button blue">
            <img src="<?php echo get_template_directory_uri(); ?>/img/header/person.svg" alt="">
            お仕事の依頼はこちら
          </a>
        </li>
      </ul>
    </nav>
    <div class="l-header__icon sp-only">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </div>
  </header>
  <div class="l-header__nav--sp sp-only">
    <nav>
      <div class="l-header__navArea--sp">
        <ul>
          <li class="item"><a href="<?php echo esc_url(home_url('business')); ?>">業務内容</a></li>
          <li class="item"><a href="<?php echo get_post_type_archive_link('achievement'); ?>">施工実績</a></li>
          <li class="item"><a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a></li>
          <li class="item"><a href="<?php echo esc_url(home_url('company')); ?>">会社概要</a></li>
          <li class="l-header__buttonArea--sp">
            <a href="<?php echo esc_url(home_url('recruit-contact')); ?>" class="l-header__button--sp lightblue">
              <img src="<?php echo get_template_directory_uri(); ?>/img/footer/footer-mail.svg" alt="">
              求人エントリーはこちら
            </a>
            <a href="<?php echo esc_url(home_url('work-contact')); ?>" class="l-header__button--sp blue">
              <img src="<?php echo get_template_directory_uri(); ?>/img/header/person.svg" alt="">
              お仕事の依頼はこちら
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>