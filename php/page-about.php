<?php
/*
Template Name: aboutページ
*/
get_header();
?>


<!-- ページタイトル -->
<div class="page-title">
  <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
  <h1 class="page-ttl">私たちについて</h1>
  <figure class="section_title_blob-l"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs_2.svg" alt=""></figure>

</div>

<main>
  <!-- パンくずリスト -->
  <div class="breadcrumb inner">
    <ol class="breadcrumbs">
    <?php
    if ( function_exists( 'bcn_display' ) ) {
    bcn_display();
    }
    ?>
    </ol>
  </div>

  <!-- about_container -->
  <section class="about_container">
    <div class="inner">
      <p class="about_text">
        一般社団法人全国精神科栄養士協会は、精神科患者様の栄養ニーズを考え、患者様のQOL向上のために活動しています。<br class="is-sp">
        <br class="is-sp">
        研修会を通して精神科で働く管理栄養士・栄養士のスキルアップを図ったり、全国規模での知識共有ができる意見交換会を開催したりといった活動を通して、精神科栄養の発展や、精神科で働く管理栄養士・栄養士の地位向上を目指しています。
        <br>
        <br class="is-sp">
        また、日本精神医学会認定栄養士制度への協力、日本精神神経医学会通信教育への協力も行っています。
      </p>
      <figure class="about_img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 80.webp" alt="" class="is-pc" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 128.webp" alt="" class="is-sp" />
      </figure>
    </div>
  </section>

  <!-- 関連研修会 -->
  <section class="wwd_container">
    <div class="inner">
      <h2 class="wwd-ttl section_title">
        <div class="section-ttl-en">WHAT WE DO</div>
        <div class="section-ttl-ja">活動内容</div>
      </h2>
      <div class="wwd_media">
        <figure class="wwd_media_img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/seminer_pc.png" alt="研修会・セミナー・意見交換会の写真" class="is-pc" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/seminer_sp.png" alt="研修会・セミナー・意見交換会の写真" class="is-sp" />
        </figure>
        <div class="wwd_media_body">
          <h3 class="wwd_media_ttl">研修会・セミナー・意見交換会</h3>
          <p class="wwd_media_txt">
            ６～7 月頃に全国精神科栄養士研修会を、2～3
            月頃に、下記のような精神疾患患者様特有の栄養問題にスポットをあて、NNPセミナーを開催しています。<br/>
            ・統合失調症患者が極端に太ったり痩せたりするのはなぜ？<br />
            ・認知症患者の拒食はどうやって対応するの？<br />
            ・なぜ水をたくさん飲むの？<br />
            ・なぜ便秘やイレウスが多いの？<br />
            ・地域移行支援での食事管理はどうするの？
            <br />
            <br />
            NNPセミナーの特徴でもある活発な意見交換・ディスカッションや、その後の懇親会を通して、全国に仲間を作り、精神科領域の栄養管理に関する疑問や悩みを解決することができます。
          </p>
        </div>
      </div>
      <div class="wwd_cards_area">
        <div class="wwd_card">
          <figure class="wwd_card_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/magazine0.png" alt="" class="" />
          </figure>
          <div class="wwd_card_body card_body_min">
            <h3 class="wwd_card_ttl">機関誌の発行</h3>
            <p class="wwd_card_txt">
              年に1回、機関誌「NNP」を発行しています。
            </p>
          </div>
        </div>
        <div class="wwd_card">
          <figure class="wwd_card_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/magazin_pc.png" alt="" class="is-pc" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/magazine_sp.png" alt="研修会・セミナー・意見交換会の写真" class="is-sp" />
          </figure>
          <div class="wwd_card_body card_body_min">
            <h3 class="wwd_card_ttl">栄養関連誌への投稿</h3>
            <p class="wwd_card_txt">
              臨床栄養「精神科病院の頁」への投稿をしています。
            </p>
          </div>
        </div>
        <div class="wwd_card">
          <figure class="wwd_card_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/seminer1.png" alt="" />
          </figure>
          <div class="wwd_card_body card_body_lg">
            <h3 class="wwd_card_ttl">講師の派遣</h3>
            <p class="wwd_card_txt">
              各都道府県の精神科栄養士団体からの要請を受けて講師の派遣をおこないます。
            </p>
          </div>
        </div>
        <div class="wwd_card">
          <figure class="wwd_card_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/eiyou_nintei.png" alt="" />
          </figure>
          <div class="wwd_card_body card_body_lg">
            <h3 class="wwd_card_ttl">認定栄養士制度</h3>
            <p class="wwd_card_txt">
              (公社)日本精神科病院協会と連携し日本精神科医学会認定栄養士制度への協力(全国精神科栄養士研修会は認定栄養士更新の単位認定研修会に指定されています)
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 関連研修会 -->
  <section class="overview_container">
    <div class="inner">
      <h2 class="overview-ttl section_title">
        <div class="section-ttl-en">OVERVIEW</div>
        <div class="section-ttl-ja">団体概要</div>
      </h2>
      <table class="overview_tbl">
        <tr>
          <th>団体名</th>
          <td>一般社団法人全国精神科栄養士協会</td>
        </tr>
        <tr>
          <th>住所</th>
          <td>〒108-0074<br>東京都港区高輪4-23-6　ハイホーム高輪708
          </td>
        </tr>
        <tr>
          <th>事務局FAX</th>
          <td>050-3730-7423</td>
        </tr>
        <tr>
          <th>定款</th>
          <td><a class="pdf-link opacity">PDFタイトルを入れます２行テスト２行テスト２行テスト２行テスト２行テスト２行テスト</a></td>
        </tr>
        <tr>
          <th>役員一覧</th>
          <td><a href="#" class="pdf-link opacity">PDFタイトルを入れます</a></td>
        </tr>
        <tr>
          <th>総会資料</th>
          <td><a href="#" class="pdf-link opacity">PDFタイトルを入れます</a></td>
        </tr>
      </table>
    </div>
  </section>

  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//top-entry
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <section class="top-entry">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>admission" class="top-entry_container inner">
      <div class="bg-dark_green">
        <div class="top-entry_txt">全国に仲間を作り、<br class="is-sp">精神科領域の栄養管理に関する<br>疑問や悩みを解決しませんか？</div>
        <div class="cmn-button-white_area">
          <div class="cmn-button-white_entry">入会する<span class="arrow-right-white_entry icon_entry"></span>
          </div>
        </div>
      </div>
    </a>
  </section>

  <?php get_footer(); ?>