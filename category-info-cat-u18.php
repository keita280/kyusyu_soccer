<?php
/*
Template Name: tag-u15ページ
*/
get_header(); ?>
    <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
    <!-- //contactタイトル-->
    <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
    <main class="tag-u18bg">
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
          <section class="cmn-news-list tag-news-list-u18">
          <a href="https://twitter.com/kcfinformation?s=20&t=LVG8eRM9XrwS7Qt42Tm1Fw" target="_blank">
        <figure class="twitter-news is-pc"></figure>
      </a>
        <h2 class="cmn-page-head u18-page-head">U-18 選手権<span class="cmn-page-head-subttl">九州クラブユースU-18選手権　大会情報</span></h2>
        <div class="cmn-news-list-container">

          <!-- PCのニュース表示 -->
          <ul class="cmn-news-list is-pc">

            <?php
            $newslist = get_posts(array(
              'paged' => get_query_var('paged'), //これを加えました
              'category_name' => 'info-cat-u18', //特定のカテゴリースラッグを指定
              'posts_per_page' => 10, //取得記事件数
            ));
            $cat = get_the_category();
            $cat_slug = $cat[0]->category_nicename;
            $catname = $cat[0]->cat_name;
            foreach ($newslist as $post) :
              setup_postdata($post);
            ?>

              <li class="cmn-news-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="cmn-news-article">
                    <div class="cmn-news-cat-wrapper">
                      <div class="cmn-news-cat-info <?php echo $cat_slug; ?>"><?php echo $catname; ?></div>
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

            <?php
            endforeach;
            wp_reset_postdata();
            ?>
          </ul>

          <!-- SPのニュース表示 -->
          <ul class="cmn-news-list is-sp">

          <?php
            $newslist = get_posts(array(
              'paged' => get_query_var('paged'), //これを加えました
              'category_name' => 'info-cat-u18', //特定のカテゴリースラッグを指定
              'posts_per_page' => 10, //取得記事件数
            ));
            $cat = get_the_category();
            $cat_slug = $cat[0]->category_nicename;
            $catname = $cat[0]->cat_name;
            foreach ($newslist as $post) :
              setup_postdata($post);
            ?>
              <li class="cmn-news-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="cmn-news-article">
                    <div class="sp-cmn-news-top">
                      <div class="cmn-news-cat-info <?php echo $cat_slug; ?>"><?php echo $catname; ?></div>
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

            <?php
            endforeach;
            wp_reset_postdata();
            ?>

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