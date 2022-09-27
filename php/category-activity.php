<?php
/*
Template Name: archove_newsページ
*/
get_header();
?>
<!-- ページタイトル -->
<div class="page-title">
  <figure class="section_title_blob-r">
    <img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt="" />
  </figure>
  <h1 class="page-ttl">新着情報</h1>
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


  <!-- 新着情報 -->
  <section class="nner news-inner">
  <ul class="news-list">
      <a href="<?php echo esc_url(home_url()); ?>/category/training/"  class="news-item">
        <li data-id="Content1">
          研修案内
        </li>
      </a>
      <a href="<?php echo esc_url(home_url()); ?>/category/activity/"  class="news-item Tab__isActive">
        <li data-id="Content2">
          活動報告
        </li>
      </a>
      <a href="<?php echo esc_url(home_url()); ?>/category/etc/"  class="news-item">
        <li data-id="Content3">
          その他
        </li>
      </a>
    </ul>

    <div class="training_container">
      <!-- 活動報告 -->
      <ul class="training-info-list Content__isActive">

        <?php
        $newslist = get_posts(array(
          'paged' => get_query_var('paged'), //これを加えました
          'category_name' => 'activity', //特定のカテゴリースラッグを指定
          'posts_per_page' => 10, //取得記事件数
        ));
        foreach ($newslist as $post) :
          setup_postdata($post);
        ?>

          <li class="training-info-item">
            <p class="training-date"> <?php the_time('Y.m.d'); ?></p>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p class="training-content">
              <?php echo get_the_excerpt(); ?>
            </p>
          </li>

        <?php
        endforeach;
        wp_reset_postdata();
        ?>
      <!-- ページネーション -->
      <ul class="pagination-list">
      <?php
      $args = array(
          'mid_size' => 3,
          'prev_text' => '',
          'next_text' => '',
          'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>
      </ul>
      </ul>






      <!-- @@@@@@@@@@@@@@@@@@@@@@@@@ -->
      <!-- SP時 -->
      <!-- @@@@@@@@@@@@@@@@@@@@@@@@@ -->
    </div>

    <ul class="news-list_is-sp">
      <a href="<?php echo esc_url(home_url()); ?>/category/training/"  class="news-item_is-sp">
        <li data-id="Content1">
          研修案内
        </li>
      </a>
      <a href="<?php echo esc_url(home_url()); ?>/category/activity/"  class="news-item_is-sp Tab__isActive">
        <li data-id="Content2">
          活動報告
        </li>
      </a>
      <a href="<?php echo esc_url(home_url()); ?>/category/etc/"  class="news-item_is-sp">
        <li data-id="Content3">
          その他
        </li>
      </a>
    </ul>
  </section>



  <?php
  get_footer();
  ?>