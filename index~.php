
<?php get_header(); 
/*
Template Name: トップページ
*/
?>


<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//メインビジュアル
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<main>
  <section class="mv">
    <div class="mv-inner">
      <h2 class="mv-title">
        <span class="mv-sp">Kyushu Club Youth</span><br />Football
        Federation
      </h2>
      <div class="mv-img is-pc">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/4192162_m.png" alt="" />
      </div>
      <div class="mv-img is-sp">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/4192162_sp.png" alt="" />
      </div>
      <figure class="twitter-news is-pc"><a href=""></a></figure>
    </div>
  </section>

  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//NEWS
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <section class="top-news">
    <div class="top-news-inner inner">
      <div class="top-ttl-wrapper">
        <h3 class="top-news-ttl">
          NEWS<span class="is-pc">お知らせ</span>
        </h3>
      </div>


      <!-- PCのNEWS表示 -->
      <ul class="top-news-list is-pc">
        <!-- 記事のループ処理開始 -->
        <?php
        $args = [
          'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿は'post')
          'posts_per_page' => 3, // 表示件数
        ];
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <li class="top-news-item">
              <a href="<?php the_permalink(); ?>">
                <div class="top-news-article">
                  <div class="top-news-cat-wrapper">
                    <div class="top-news-cat-info">
                      <?php
                      $category = get_the_category();
                      echo $category[0]->cat_name;
                      ?></div>
                  </div>
                  <div class="top-news-post">
                    <div class="top-news-date"><?php the_time(get_option('date_format')); ?></div>
                    <p class="top-news-name">
                    <?php the_title(); // ex) 本日の◯◯イベントは雨天の為、明日に延期いたします 
                    ?></p>
                    </p>
                  </div>
                  <span class="news-arrow"></span>
                </div>
              </a>
            </li>
          <?php endwhile;
        else : ?>
          <p>まだ記事がありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>

      <?php rewind_posts(); ?>
      <!-- SPのNEWS表示 -->

      <ul class="top-news-list is-sp">
        <!-- 記事のループ処理開始 -->
        <?php
        $args = [
          'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿は'post')
          'posts_per_page' => 3, // 表示件数
        ];
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <li class="top-news-item">
          <a href="#">
            <div class="top-news-article">

              <div class="sp-top-news-top">
                <div class="top-news-cat-info">                      <?php
                      $category = get_the_category();
                      echo $category[0]->cat_name;
                      ?></div>
                <div class="top-news-date"><?php the_time(get_option('date_format')); ?></div>
              </div>
              <div class="sp-top-news-bottom">
                <p class="top-news-name">
                <?php the_title(); 
                    ?>
                </p>
                <span class="news-arrow"></span>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile;
        else : ?>
          <p>まだ記事がありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
      <a href="">
        <div class="btn-soccer news-button">お知らせ一覧</div>
      </a>
    </div>
  </section>
  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//TOURNAMENT
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <section class="top-tournament">
    <div class="top-tournament-inner inner wow fadeInUp">
      <div class="top-ttl-wrapper-tournament">
        <h3 class="top-tornament-ttl">TOURNAMENT</h3>
        <span class="top-tornament-subttl">大会情報</span>
      </div>
      <div class="tournament-container">
        <a href="" class="tm-Btn tm-btn-u18">
          <span class="tm-Btn-Text1">九州クラブユース</span>
          <span class="tm-Btn-Text2">U-18</span>
          <span class="tm-Btn-Text3">選手権</span>
        </a>
        <a href="" class="tm-Btn tm-btn-u15">
          <span class="tm-Btn-Text1">九州クラブユース</span>
          <span class="tm-Btn-Text2">U-15</span>
          <span class="tm-Btn-Text3">選手権</span>
        </a>
        <a href="" class="tm-Btn tm-btn-dev">
          <span class="tm-Btn-Text1">九州クラブユース</span>
          <span class="tm-Btn-Text2">デベロップ</span>
          <span class="tm-Btn-Text3">大会</span>
        </a>
        <a href="" class="tm-Btn tm-btn-u13">
          <span class="tm-Btn-Text1">九州クラブユース</span>
          <span class="tm-Btn-Text2">U-13</span>
          <span class="tm-Btn-Text3">大会</span>
        </a>
        <a href="" class="tm-Btn tm-btn-u18t">
          <span class="tm-Btn-Text1">九州クラブユース</span>
          <span class="tm-Btn-Text2">U-18</span>
          <span class="tm-Btn-Text3">TownClubCUP</span>
        </a>
        <a href="" class="tm-Btn tm-btn-u17">
          <span class="tm-Btn-Text1">九州クラブユース</span>
          <span class="tm-Btn-Text2">U-17</span>
          <span class="tm-Btn-Text3">大会</span>
        </a>
        <a href="" class="tm-Btn tm-btn-u14">
          <span class="tm-Btn-Text1">九州クラブユース</span>
          <span class="tm-Btn-Text2">U-14</span>
          <span class="tm-Btn-Text3">大会</span>
        </a>
        <a href="" class="tm-Btn tm-btn-training">
          <span class="tm-Btn-Text1">女子</span>
        </a>
      </div>
      <a href="">
        <div class="btn-soccer tournament-button">大会情報一覧</div>
      </a>
    </div>
  </section>

  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//ABOUT & TEAM
//＠＠＠  ＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <section class="top-introduction">
    <div class="top-about inner wow fadeInLeft">
      <figure class="top-about-img is-pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-about.png" alt="" />
      </figure>
      <div class="top-about-right">
        <h3 class="top-about-ttl">ABOUT</h3>
        <p class="top-about-subttl">九州クラブユースサッカー連盟とは</p>
        <p class="top-about-text">
          九州内のU-18（高校生年齢）とU-15（中学生年齢）
          のクラブチームを構成メンバーとした任意団体です。クラブチームの普及と育成に取り組んでいます。
        </p>
        <a href="">
          <div class="btn-soccer top-about-button">連盟について</div>
        </a>
      </div>
    </div>

    <!-- SP用セクションタイトル画像 -->
    <div class="sp-top-team-header is-sp">
      <h3 class="sp-team-ttl">TEAM</h3>
      <p class="sp-team-subttl">加盟チーム</p>
    </div>
    <!-- SP用セクションタイトル画像ここまで -->

    <div class="top-team inner wow fadeInRight">
      <div class="top-team-l is-pc">
        <h3 class="top-team-ttl">TEAM</h3>
        <p class="top-team-subttl">加盟チーム</p>
        <a href="">
          <div class="btn-soccer tournament-button">受賞クラブ紹介</div>
        </a>
      </div>
      <div class="top-team-r">
        <a class="top-team-r1 top-team-block">FUKUOKA<span>福岡県</span></a>
        <a class="top-team-r2 top-team-block">SAGA<span>佐賀県</span></a>
        <a class="top-team-r3 top-team-block">NAGASAKI<span>長崎県</span></a>
        <a class="top-team-r4 top-team-block">KUMAMOTO<span>熊本県</span></a>
        <a class="top-team-r5 top-team-block">OITA<span>大分県</span></a>
        <a class="top-team-r6 top-team-block">MIYAZAKI<span>宮崎県</span></a>
        <a class="top-team-r7 top-team-block">KAGOSHIMA<span>鹿児島県</span></a>
        <a class="top-team-r8 top-team-block">OKINAWA<span>沖縄県</span></a>
      </div>
      <a href="">
        <div class="btn-soccer tournament-button is-sp">受賞クラブ紹介</div>
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>