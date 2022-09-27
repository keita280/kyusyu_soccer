<?php
/*
Template Name: contact-thanksページ
*/
get_header("white");
?>


<!-- ページタイトル -->
<main>
  <!-- message_container -->
  <section class="change_thanks_container">
    <div class="inner">
      <h3 class="change_thanks_title">
        お問い合わせ<br class="is-sp" />ありがとうございます。
      </h3>
      <p class="change_thanks_txt">
        お問合せ内容を確認の上、後日ご連絡いたします。<br>
        お問い合わせの内容によって、回答までに時間を要する場合があります。<br><br>
        1週間経っても返信がない場合には、送信エラーの可能性もございますので、<br class="is-pc">
        お手数ですが再度お問い合わせをお願いいたします。
      </p>
      <div class="for-top">
        <a class="cmn-button sp-for-top" href="<?php echo esc_url(home_url()); ?>">トップへ<span class="arrow-right icon"></span></a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>