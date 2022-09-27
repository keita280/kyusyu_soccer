<?php
/*
Template Name: cntactページ
*/
get_header();
?>



<!-- ページタイトル -->
<div class="page-title">
  <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
  <h1 class="page-ttl">お問い合わせ</h1>
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

  <!-- change_container -->
  <section class="change_container">
    <div class="change_body inner">
      <p class="change_txt">
        下記のフォームに必要事項を入力の上、送信してください。<br>
        会員情報の変更・退会は<a class="change_contact_link" href="<?php echo esc_url(home_url()); ?>/change">こちら</a>からお願いいたします。
        <br>
        <br>
        FAXでのお問い合わせはこちら
        <br>
        FAX：050-3730-7423
      </p>
    </div>
  </section>

  <!-- change_form -->
  <section class="change_contact_container">
    <div class="change_contact_inner inner">
      <h3 class="h3_ttl">お問い合わせフォーム</h3>


      <?php echo do_shortcode( '[contact-form-7 id="191" title="お問い合わせ"]' ); ?>

    </div>
  </section>

  <!-- change_formここまで -->
  <?php get_footer(); ?>