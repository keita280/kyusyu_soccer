<?php
/*
Template Name: 404
*/
get_header("white");
?>


<!-- ページタイトル -->
<main>


  <!-- message_container -->
  <section class="error_container">
    <div class="inner">
      <h3 class="error_title">404<br>Not Found</h3>
      <p class="change_thanks_txt">
        申し訳ございません。
        <br>
        お探しのページは見つかりませんでした。
      </p>
      <div class="for-top">
        <a class="cmn-button sp-for-top" href="<?php echo esc_url(home_url()); ?>">トップへ<span class="arrow-right icon"></span></a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>