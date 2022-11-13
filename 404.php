<?php
/*
Template Name: 404ページ
*/
get_header(); ?>
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<!-- //contactタイトル-->
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<main class="bg404">
  <section class="body404">
    <h2 class="ttl404">404<span class="notfound">Not Found</span></h2>
    <p class="txt404">残念ながらお探しのページは見つかりませんでした。<br>お探しのページは削除されたか、URLが変更された可能性がございます。</p>
    <a href="<?php echo esc_url(home_url()); ?>" class="cp-riset-submit cp-submit-primary">HOMEへ戻る
    </a>
  </section>
</main>
<?php get_footer(); ?>