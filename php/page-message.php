<?php
/*
Template Name: messageページ
*/
get_header();
?>




    <!-- ページタイトル -->
    <div class="page-title">
      <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
      <h1 class="page-ttl">ご挨拶</h1>
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

      <!-- message_container -->
      <section class="message_container">
        <div class="inner">
          <p class="message_text">
            2021年4月1日、かねてから念願であった一般社団法人全国精神科栄養士協会として新たな出発を致しました。
            <br class="is-sp">
            <br class="is-sp">
            今まで同様に、本会は全国1200余の精神科病院に所属する管理栄養士・栄養士を中心に、臨床栄養学から食事療養の領域まで幅広く研修できる会として、最新の情報発信と身近な問題解決ができる研修を計画運営していきます。
            <br class="is-sp">
            <br class="is-sp">
            法人格を取得した事で社会的にも認められた団体となりました、あわせて会としての責任も重くなり、今までの会員同士の研修等や情報交換も進めつつ、社会へ貢献出来る会への変革を求められる事になります。
            <br>
            <br>
            会員への研修を通してスキルアップを進め、ひいては患者様や一般国民へ社会貢献出来る精神科管理栄養士を増やしていくことが責務と考えます。
            <br class="is-sp">
            <br class="is-sp">
            公益社団法人日本精神科病院協会との連携は継続し、日本精神科医学会認定栄養士制度への協力を通して「公益社団法人日本精神科病院協会、日本精神科医学会認定栄養士」資格取得者をふやしていく事を進めていきます。
            <br class="is-sp">
            <br class="is-sp">
            COVID-19（新型コロナウイルス感染症）の影響から記念式典等の計画が立てられない状況ですが、落ち着いた折には中止しておりました60周年記念と共に式典の開催を計画いたします、開催が可能になった折にはご案内をお送りいたしますので、ふるってご参加のほどよろしくお願いいたします。
            <br>
            <br>
            一般社団法人を取得し、さらなる会員増が求められます。会員になりたいと思われるような会の運営を目指し、COVID-19に負けず頑張っていきたいと思います。</p>
            <div class="signature">
              <p class="signature_head"> 一般社団法人　全国精神科栄養士協会会長</p>
              <p class="signature_body">西宮弘之</p>
            </div>
        </div>
      </section>


      <?php get_footer(); ?>