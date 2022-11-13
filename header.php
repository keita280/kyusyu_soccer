<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <title><?php bloginfo('name'); ?></title>

  <!-- favicon -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
  <!-- fontowsome -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <!-- googlefont -->

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet" />

  <!-- fontawsome -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <script src="https://kit.fontawesome.com/4ce81d460b.js" crossorigin="anonymous"></script>

  <?php wp_head();?>
</head>



<body class="">
  <header class="is-pc">
    <div class="header_inner">
      <div class="header_top inner">
        <!-- PC用のh１ -->
        <h1>
          <a href="<?php echo esc_url(home_url()); ?>" alt="ヘッダーのロゴリンク">
            <img src="<?php echo get_template_directory_uri(); ?>/img/header_logo_pc.png" alt="ロゴ画像" class="is-pc logo-pc" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/header_logo_sp.png" alt="ロゴ画像" class="is-sp logo-sp" />
          </a>
        </h1>
      </div>

      <nav class="header_bottom is-pc">
        <ul class="header_bottom_menu inner">
          <li class="header_bottom_list">
            <a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>">HOME</a>
          </li>
          <li class="header_bottom_list">
            <a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/about/">連盟概要</a>
          </li>
          <li class="header_bottom_list">
            <a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>">加盟チーム</a>
          </li>
          <li class="header_bottom_list">
            <a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/tournament/">大会情報</a>
          </li>
          <li class="header_bottom_list">
            <a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/entry/">加盟登録</a>
          </li>
          <li class="header_bottom_list">
            <a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/archive/">お知らせ</a>
          </li>
          <li class="header_bottom_list">
            <a class="header_bottom_link" href="">関連リンク</a>
          </li>
          <li class="header_bottom_list">
            <a class="header_bottom_link" href="<?php echo esc_url(home_url()); ?>/contact/">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
    </header>

    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@ -->
    <!-- ハンバーガー -->
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@ -->
    <header class="pc-header is-sp">
      <div class="humberger" id="toggle">
        <div id="toggle-box">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <p class="humberger-text" id="humberger-text">MENU</p>
      </div>
      <div id="nav-content">
        <nav>
          <ul>
            <li ontouchstart="">
              <a class="nav-content-link" href="#">HOME</a>
            </li>
            <li ontouchstart="">
              <a class="nav-content-link" href="#">連盟概要</a>
            </li>
            <li ontouchstart="">
              <a class="nav-content-link" href="#">加盟チーム</a>
            </li>
            <li ontouchstart="">
              <a class="nav-content-link" href="#">大会情報</a>
            </li>
            <li ontouchstart="">
              <a class="nav-content-link" href="#">加盟登録</a>
            </li>
            <li ontouchstart="">
              <a class="nav-content-link" href="#">お知らせ</a>
            </li>
            <li ontouchstart="">
              <a class="nav-content-link" href="#">関連リンク</a>
            </li>
            <li ontouchstart="">
              <a class="nav-content-link" href="#">お問い合わせ</a>
            </li>
          </ul>
        </nav>
        <a class="nav-twiitter">
          <img src="<?php echo get_template_directory_uri(); ?>/img/twitter-humberger.png" alt="" />
        </a>
        <div class="nav-logo">
          <div class="nav-logo-ttl">九州クラブユースサッカー連盟</div>
          <div class="nav-logo-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/nav-logo.png" alt="" /></a>
          </div>
        </div>
      </div>

      <h1 class="h1-pc">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/header_logo_sp.png" alt="" />
        </a>
      </h1>

  </header>
