<?php
/*
Template Name: admissionページ
*/
get_header();
?>


    <!-- ページタイトル -->
    <div class="page-title">
      <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
      <h1 class="page-ttl">入会案内</h1>
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

      <!-- admission_container -->
      <section class="admission_container">
        <div class="admission_body inner">
          <p class="admission_txt">
            一般社団法人全国精神科栄養士協会へご入会をご希望の方は、下記の入会申込フォームから登録をお願いいたします。
          </p>
          <div class="admission_box_wrapper">
            <div class="admission_box admission_box-left">
              <h4 class="admission_box_ttl">会員資格のある方 </h4>
              <p class="admission_box_txt">・精神科に勤務する管理栄養士・栄養士<br>
                ・精神科領域に興味のある管理栄養士・栄養士</p>
            </div>
            <div class="admission_box">
              <h4 class="admission_box_ttl">会費 </h4>
              <p class="admission_box_txt">年会費5,000 円。入会金等はございません。<br>
                研修会等の会員割引があります。</p>
            </div>

          </div>
        </div>
      </section>

      <!-- admission_form -->
      <section class="admission_contact_container">
        <div class="admission_contact_inner inner">
          <h3 class="h3_ttl">入会申込フォーム</h3>
          <figure class="admission_flow"><img src="<?php echo get_template_directory_uri(); ?>/img/admission_flow.webp" alt=""></figure>
          <h4 class="form_h4_ttl">会員情報</h4>

              <?php echo do_shortcode( '[contact-form-7 id="206" title="入会案内"]' ); ?>

        </div>
      </section>

      <!-- admission_formここまで -->

      <?php get_footer(); ?>