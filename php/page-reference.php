<?php
/*
Template Name: referenceページ
*/
get_header();
?>

    <!-- ページタイトル -->
    <div class="page-title">
      <figure class="section_title_blob-r">
        <img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt="" />
      </figure>
      <h1 class="page-ttl">資料室</h1>
      <figure class="section_title_blob-l">
        <img src="<?php echo get_template_directory_uri(); ?>/img/blobs_2.svg" alt="" />
      </figure>
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

      <!-- 資料室 -->
      <section class="reference_container">
        <div class="inner">
          <form class="reference-content" action="../reference/pass/index.html">
            <p class="password-description">パスワードを入力してください</p>
            <input
              class="password-input"
              type="password"
              id="password"
              name="password"
              required
              minlength="8"
              size="30"
            />
            <button class="submit-button" type="submit">確定</button>
          </form>
          <div class="content-description">
            <p>このコンテンツは会員限定です。</p>
            <p>
              入会時に記載いただいたメールアドレス宛にお送りしたメールに記載されているパスワードを入力してください。
            </p>
            <p>
              パスワードは定期的に変更され、その度にメールをお送りしております。<br /><br />
            </p>
            <p>
              パスワードがわからない場合は、<a href="">お問い合わせフォーム</a>
              より事務局にご連絡ください。
            </p>
          </div>
        </div>
      </section>
      <?php get_footer(); ?>