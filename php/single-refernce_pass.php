<?php
/*
Template Name: reference-passページ
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
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </ol>
  </div>

  <!-- 資料室 -->

  <?php if (!post_password_required($post->ID)) : ?>
    <?php if (get_field('blog_content')) :/*カスタムフィールドで作った記事の入力エリア*/ ?>
      <?php the_field('blog_content'); ?>
    <?php endif; ?>
    <section class="pass_container">
      <div class="pass-content-description">
        <p>
          資料はダウンロードして、栄養指導や施設内業務にご活用いただけます。
        </p>
        <p>
          学会発表や論文に載せるなど、資料を外部に公開する場合には、<a href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせフォーム</a>より事務局にご連絡ください。<br /><br />
        </p>
        <p>このコンテンツは会員限定です。</p>
        <p>非会員へダウンロードした資料を配布することはご遠慮ください。</p>
      </div>
      <ul class="document-list">
        <?php $reference_group = SCF::get('reference-items'); ?>
        <?php foreach ($reference_group as $fields) : ?>

          <li class="document-item">
            <label class="document-title"><?php echo esc_html($fields['reference_title']); ?></label><a class="document-title-link" href="<?php echo esc_html($fields['pdf_url']); ?>" target="_blank" style="text-decoration: underline"><?php echo esc_html($fields['pdf_title']); ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </section>
  <?php else : ?>
    <div class="custom_password_aria">
      <?php echo get_the_password_form(); ?>

    </div>
  <?php endif; ?>
  <?php get_footer(); ?>