<?php
/*
Template Name: changeページ
*/
get_header();
?>

    <!-- ページタイトル -->
    <div class="page-title">
      <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
      <h1 class="page-ttl">会員情報の変更・退会</h1>
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
            会員情報の変更、退会ご希望の方は、下記のフォームからご連絡ください。<br>
            その他のお問い合わせは<a class="change_contact_link" href="<?php echo esc_url(home_url()); ?>/contact">こちら</a>からお願いいたします。
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
          <h3 class="h3_ttl">会員情報の変更・退会フォーム</h3>
    
              <?php echo do_shortcode( '[contact-form-7 id="207" title="会員情報の変更・退会"]' ); ?>

        </div>
      </section>
      

      <!-- change_formここまで -->
      <?php get_footer(); ?>