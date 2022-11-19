<?php
/*
Template Name: 再コンタクトページ
*/
get_header(); ?>
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<!-- //contactタイトル-->
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<main>
  <section class="page-ttl contact-ttl">
    <div class="page-ttl-container inner">
      <h2 class="page-h2-ttl">CONTACT</h2>
      <h2 class="page-h2-subttl">お問い合わせ</h2>
    </div>
  </section>

  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <!-- //お問合せフォーム-->
  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->

  <section class="contact">
    <div class="contact-inner inner">
      <p class="contact-attention">
        以下のフォームに必要事項をご入力ください。<br />※フォーム送信にはプライバシーポリシーのご確認・ご同意が必要となります。
      </p>
      <?php echo do_shortcode( '[contact-form-7 id="944" title="お問い合わせ"]
' ); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>