<?php
/*
Template Name: tag-u14ページ
*/
get_header(); ?>
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<!-- //contactタイトル-->
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<main class="tag-u14bg">
  <!-- パンくずリスト -->
  <?php if (function_exists('bcn_display')) : ?>
    <!-- breadcrumb -->
    <div class="breadcrumb cp-breadcrumb01 inner">
      <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
      ?>
    </div><!-- /breadcrumb -->
  <?php endif; ?>

  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <!-- //一覧ページコンテンツ-->
  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <div class="cmn-article-bg  cmn-news-bg">
    <div class="cmn-article-wrapper tag-inner">
      <section class="cmn-news-list tag-news-list-u14">
        <figure class="twitter-news is-pc"><a href=""></a></figure>
        <h2 class="cmn-page-head u14-page-head">SEARCH<span class="cmn-page-head-subttl">検索結果</span></h2>
        <div class="cmn-news-list-container">


          <!-- PCのニュース表示 -->
          <ul class="cmn-news-list is-pc">
            <?php if (have_posts()) : ?>
              <?php if (!$_GET['s']) { ?>
                <p>検索キーワードが未入力です
                <p>

                <?php } else { ?>
                <h1 class="page-title">
                  「<?php echo esc_html($_GET['s']); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件
                </h1>


                <?php while (have_posts()) : the_post(); ?>
                  <?php
                  $cat = get_the_category();
                  $catname = $cat[0]->cat_name;
                  $cat_slug = $cat[0]->category_nicename;
                  ?>
                  <li class="cmn-news-item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="cmn-news-article">
                        <div class="cmn-news-cat-wrapper">
                          <div class="cmn-news-cat-info <?php echo $cat_slug; ?>"><?php
                                                                                  foreach ($cat as $cats) :
                                                                                    if ($cats->parent) echo $cats->cat_name;
                                                                                  endforeach;
                                                                                  ?></div>
                        </div>
                        <div class="cmn-news-post">
                          <div class="cmn-news-date"><?php the_time(get_option('date_format')); ?></div>
                          <p class="cmn-news-name">
                            <?php the_title(); ?>
                          </p>
                        </div>
                        <span class="news-arrow"></span>
                      </div>
                    </a>
                  </li>


                <?php endwhile; ?>

                <?php
                if (function_exists("pagination")) {
                  pagination($wp_query->max_num_pages);
                }
                ?>
              <?php } ?>
            <?php else : ?>
              <p>検索されたキーワードに一致する記事はありませんでした</p>

            <?php endif; ?>

          </ul>

          <!-- SPのニュース表示 -->
          <ul class="cmn-news-list is-sp">
            <?php if (have_posts()) : ?>
              <?php if (!$_GET['s']) { ?>
                <p>検索キーワードが未入力です
                <p>

                <?php } else { ?>
                <h1 class="page-title">
                  「<?php echo esc_html($_GET['s']); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件
                </h1>


                <?php while (have_posts()) : the_post(); ?>
                  <?php
                  $cat = get_the_category();
                  $catname = $cat[0]->cat_name;
                  $cat_slug = $cat[0]->category_nicename;
                  ?>

                  <li class="cmn-news-item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="cmn-news-article">
                        <div class="sp-cmn-news-top">
                          <div class="cmn-news-cat-info <?php echo $cat_slug; ?>">
                        <?php
                        foreach ($cat as $cats) :
                          if ($cats->parent) echo $cats->cat_name;
                        endforeach;
                        ?></div>
                          <div class="cmn-news-date"><?php the_time(get_option('date_format')); ?></div>
                        </div>
                        <div class="sp-cmn-news-bottom">
                          <p class="cmn-news-name">
                            <?php the_title(); ?>
                          </p>
                          <span class="news-arrow"></span>
                        </div>
                      </div>

                    </a>
                  </li>
                <?php endwhile; ?>

                <?php
                if (function_exists("pagination")) {
                  pagination($wp_query->max_num_pages);
                }
                ?>
              <?php } ?>
            <?php else : ?>
              <p>検索されたキーワードに一致する記事はありませんでした</p>

            <?php endif; ?>

          </ul>


          <!-- ページネーション -->
          <ul class="Pagination">
            <?php
            $args = array(
              'mid_size' => 3,
              'prev_text' => '<i class="fa-solid fa-arrow-left"></i>',
              'next_text' => '<i class="fa-solid fa-arrow-right"></i>',
              'screen_reader_text' => '',
            );
            the_posts_pagination($args);
            ?>
          </ul>
          <!-- ページネーション -->
        </div>
      </section>


      <aside class="news-aside inner">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</main>
<?php get_footer(); ?>