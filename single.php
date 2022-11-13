<?php get_header(); ?>
    <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
    <!-- //contactタイトル-->
    <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
    <main class="single-bg">
  <!-- パンくずリスト -->
  <?php if (function_exists('bcn_display')) : ?>
    <!-- breadcrumb -->
    <div class="breadcrumb cp-breadcrumb01 inner">
      <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
      ?>
    </div><!-- /breadcrumb -->
  <?php endif; ?>
      <h2 class="single-h2ttl inner">INFORMATION</h2>
      <div class="single-wrapper inner">
        <div class="single-container">
          <span class="cmn-news-cat-info info-cat-u18tcc single-info"
            >大会情報</span
          >
          <h1 class="single-h1">
            h1 2020年度 第24回九州クラブユース（U-18）サッカーTown Club CUP
          </h1>
          <div class="single-date-container">
            <div class="single-release">公開<span>2020.11.22</span></div>
            <div class="single-update">最終更新日<span>2020.11.22</span></div>
          </div>
          <div class="single-body">
            <p class="single-txt">
              本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br><br>
            </p>
            <h2 class="single-h2">h2中タイトルタイトル</h2>
            <p class="single-txt">
              本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br><br>
            </p>    
            <h2 class="single-h3">h3中タイトルタイトル</h2>
            <p class="single-txt">
              本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br><br>
            </p>    
            <h2 class="single-h4">h4中タイトルタイトル</h2>
          </div>
        </div>
        <aside class="news-aside single-aside inner">
          <div class="aside-inner">
            <h3 class="aisde-ttl">NEWS CATEGORY</h3>
            <ul class="aside-container">
              <li class="aside-li opacity"><a href="">お知らせ一覧</a></li>
              <li class="aside-li">
                <a href="" class="opacity">大会情報一覧</a>
                <ul class="aside-sub-container">
                  <li class="aside-sub-li opacity">
                    <a href="">U-18選手権</a>
                  </li>
                  <li class="aside-sub-li opacity">
                    <a href="">U-15選手権</a>
                  </li>
                  <li class="aside-sub-li opacity">
                    <a href="">U-15選手権</a>
                  </li>
                  <li class="aside-sub-li opacity">
                    <a href="">デベロップ大会</a>
                  </li>
                  <li class="aside-sub-li opacity"><a href="">U-13大会</a></li>
                  <li class="aside-sub-li opacity">
                    <a href="">U-18TownClubCUP</a>
                  </li>
                  <li class="aside-sub-li opacity"><a href="">U-17大会</a></li>
                  <li class="aside-sub-li opacity"><a href="">U-14大会</a></li>
                  <li class="aside-sub-li opacity">
                    <a href="">研修会・講習会</a>
                  </li>
                </ul>
              </li>
              <li class="aside-li opacity"><a href="">加盟登録一覧</a></li>
            </ul>
          </div>
          <form method="get" action="#" class="search_container">
            <input type="text" size="25" placeholder="キーワードで検索" />
            <input type="submit" value="" />
          </form>
        </aside>
      </div>
    </main>
    <?php get_footer(); ?>