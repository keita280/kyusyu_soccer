<?php
/*
Template Name: low
*/
get_header();
?>


    <!-- ページタイトル -->
    <div class="page-title">
      <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
      <h1 class="page-ttl">特定商取引法に基づく表記</h1>
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



    <main>


      <!-- law_container -->
      <section class="law_container">
        <div class="inner">
          <div class="law_section">
            <h2 class="law_section_ttl">事業者名</h2>
            <p class="law_section_txt">
              一般社団法人　全国精神科栄養士協会
            </p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">代表責任者名</h2>
            <p class="law_section_txt">西宮　弘之</p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">所在地</h2>
            <p class="law_section_txt">
              〒108-0074　東京都港区高輪4-23-6　ハイホーム高輪708
            </p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">電話番号</h2>
            <p class="law_section_txt">03-5986-3171</p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">電話受付時間</h2>
            <p class="law_section_txt">平日10:00～17:00</p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">メールアドレス</h2>
            <p class="law_section_txt">info@nnp-eiyou.com</p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">ホームページ</h2>
            <p class="law_section_txt">https://www.nnp-eiyou.com</p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">取扱い役務の種類、価格</h2>
            <p class="law_section_txt">
              ・会員資格にかかる年会費<br />
              　詳細は「入会案内」ページをご確認ください。<br />
              ・研修会等受講料<br />
              　受講料（価格）は、研修会等により異なります。詳細は「研修会・イベント一覧」ページをご確認ください。
            </p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">取扱い役務の代金以外の必要料金</h2>
            <p class="law_section_txt">
              ・会員資格にかかる年会費以外の必要料金については、入会案内ページをご確認ください。<br />
              ・研修会等受講料（代金）以外の必要料金については、「研修会・イベント一覧」ページをご確認ください。
            </p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">お支払方法</h2>
            <p class="law_section_txt">クレジットカード、お振込み</p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">お支払期限</h2>
            <p class="law_section_txt">
              ・会員資格にかかる年会費<br />
              　会員期間は、入金日より1年となります。当該年度分を前納いただきます。<br />
              ・研修会等受講料<br />
              　お支払期限は、研修会等により異なります。詳細は「研修会・イベント一覧」ページをご確認ください。
            </p>
          </div>
          <div class="law_section">
            <h2 class="law_section_ttl">キャンセル・返金について</h2>
            <p class="law_section_txt">
              お申し込み後のキャンセル・返金はできかねます。
            </p>
          </div>
      </section>

      <?php get_footer(); ?>