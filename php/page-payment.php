<?php
/*
Template Name: paymentページ
*/
get_header("white");
?>
    <!-- ページタイトル -->
    <main>


      <!-- message_container -->
      <section class="payment_container inner">
        <h3 class="payment_title">お支払い情報入力</h3>
        <figure class="payment_img"><img src="<?php echo get_template_directory_uri(); ?>/img/Group 164 (2).png" alt=""></figure>
        <p class="payment_txt">外部サービスの画面に遷移します。そちらで必要情報を入力の上、決済をお願いいたします。<br class="is-pc">
          （年会費の支払いはクレジットカード決済のみとなります。）
        </p>
        <div class="payment_submit">
          <a href="https://square.link/u/OQ4bMjuu" target="_blank" class="payment_submit_button">
            <div class="payment_button-white">支払い情報を入力する</div></a>
          </div>
      </section>

      <?php get_footer(); ?>