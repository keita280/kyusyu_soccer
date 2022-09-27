<?php
/*
Template Name: change_thanksページ
*/
get_header("white");
?>

    <!-- ページタイトル -->
    <main>


      <!-- message_container -->
      <section class="change_thanks_container">
        <div class="inner">
          <h3 class="change_thanks_title">フォームが<br class="is-sp">送信されました。</h3>
          <p class="change_thanks_txt">
            内容を確認の上、順次対応いたします。<br>
            反映までお時間をいただく場合がございますので、ご了承ください。
            <br>
            <br>
            自動返信メールが届かない場合は、送信エラーの可能性もございます。<br>
            迷惑メールフォルダやメールアドレスをご確認の上、お手数ですが再度送信をお願いいたします。
          </p>
          <div class="for-top">
            <a class="cmn-button sp-for-top">トップへ<span class="arrow-right icon"></span></a>
          </div>
        </div>
      </section>


      <?php get_footer(); ?>