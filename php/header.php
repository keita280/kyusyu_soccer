<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>"/>
    <meta name="robots" content="noindex">
    <!-- 本番納品前にnoindex消すの忘れないこと！！！ -->
    <title><?php bloginfo('name');?></title>

    <!-- reset css -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css"> -->
    <!-- favicon -->
    <link rel="icon" href="./img/favicon.png">
    <!-- fontowsome -->
    <!-- <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"> -->
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Damion&family=Noto+Serif+JP&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">




    <!-- jquery & iScroll -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script> -->

    <!-- original -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"> -->
    <?php wp_head(); ?>

    
  </head>
  
  
<body class="">
  <?php wp_body_open(); ?>
  <header class="accordion" id="header"> 
    <div class="header_inner">
      <div class="header_top">
          <h1 class="header_top_left is-pc opacity"><a href="<?php echo esc_url(home_url()); ?>">一般社団法人　全国精神科栄養士協会 ｜ Nutrition Needs in Psychiatry</a></h1>
          <h1 class="header_top_left is-sp"><a href="<?php echo esc_url(home_url()); ?>">一般社団法人　全国精神科栄養士協会<br>Nutrition Needs in Psychiatry</a></h1>
          <nav class="header_top_right is-pc">
            <ul class="header_top_right_menu">
              <li class="header_top_right_list"><a href="<?php echo esc_url(home_url()); ?>/message/" class="header_top_right_link  underline">ご挨拶</a></li>
              <li class="header_top_right_list"><a href="<?php echo esc_url(home_url()); ?>/change/" class="header_top_right_link">会員情報の変更・退会</a></li>
              <li class="header_top_right_list"><a href="<?php echo esc_url(home_url()); ?>/contact/" class="header_top_right_link">お問い合わせ</a></li>
            </ul>
          </nav>
      </div>
      <nav class="header_bottom is-pc">
        <ul class="header_bottom_menu">
          <li class="header_bottom_list"><a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/about/">私たちについて</a></li>
          <li class="header_bottom_list"><a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/category/training/">新着情報</a></li>
          <li class="header_bottom_list"><a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/schedule/">研修会・イベント一覧</a></li>
          <li class="header_bottom_list"><a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/refernce_pass/page/">資料室</a></li>
          <li class="header_bottom_list"><a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/strong/">私たちの強み</a></li>
          <li class="join"><a class="header_bottom_link btn-green" href="<?php echo esc_url(home_url()); ?>/admission">入会案内</a></li>
        </ul>
      </nav>

    </div>
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@ -->
    <!-- ハンバーガー -->
  <!-- @@@@@@@@@@@@@@@@@@@@@@@@@ -->
  <div class="hamburger is-sp  js-accordion-title" id="hamburger">
    <span class="is-sp"></span>
    <span></span>
    <span></span>
  </div>
  
  <nav class="accordion-item is-sp" id="accordion-item">
    <ul class="accordion-item_menu">
      <li class="accordion-item_list"><a class="accordion-item_link" href="<?php echo esc_url(home_url()); ?>/about/">私たちについて<span class="arrow-right"></span></a></li>
      <li class="accordion-item_list"><a class="accordion-item_link" href="<?php echo esc_url(home_url()); ?>/category/training/">新着情報<span class="arrow-right"></span></a></li>
      <li class="accordion-item_list"><a class="accordion-item_link" href="<?php echo esc_url(home_url()); ?>/schedule/">研修会・イベント一覧<span class="arrow-right"></span></a></li>
      <li class="accordion-item_list"><a class="accordion-item_link" href="<?php echo esc_url(home_url()); ?>/refernce_pass/page/">資料室<span class="arrow-right"></span></a></li>

      <li class="accordion-item_list"><a class="accordion-item_link" href="<?php echo esc_url(home_url()); ?>/strong">私たちの強み<span class="arrow-right"></span></a></li>
      <li class="accordion-item_list"><a class="accordion-item_link" href="<?php echo esc_url(home_url()); ?>/admission">入会案内<span class="arrow-right"></span></a></li>
    </ul>
    <ul class="accordion-item_sub-menu">
      <li class="accordion-item_sub-list"><a href="<?php echo esc_url(home_url()); ?>/message" class="accordion-item_sub-link">ご挨拶</a></li>
      <li class="accordion-item_sub-list"><a href="<?php echo esc_url(home_url()); ?>/change" class="accordion-item_sub-link">会員情報の変更・退会</a></li>
      <li class="accordion-item_sub-list"><a href="<?php echo esc_url(home_url()); ?>/contact" class="accordion-item_sub-link">お問い合わせ</a></li>
    </ul>
  </nav>
</header>
