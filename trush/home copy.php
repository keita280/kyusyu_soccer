<?php
/*
Template Name: 新着情報一覧ページ
*/
get_header(); ?>
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<!-- //contactタイトル-->
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<main>

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
  <div class="cmn-article-bg  cmn-news-bg-yl">
    <div class="cmn-article-wrapper inner">
      <section class="cmn-news-list">
        <figure class="twitter-news is-pc"><a href=""></a></figure>
        <h2 class="cmn-page-head">NEWS<span class="cmn-page-head-subttl">お知らせ一覧</span></h2>
        <div class="cmn-news-list-container">
          <!-- PCのニュース表示 -->
          <ul class="cmn-news-list is-pc">

            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php
                $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                $cat_slug = $category[0]->category_nicename;
                ?>


                <li class="cmn-news-item">
                  <a href="<?php the_permalink(); ?>">
                    <div class="cmn-news-article">
                      <div class="cmn-news-cat-wrapper">
                        <div class="cmn-news-cat-info <?php echo $cat_slug; ?>">
                          <!-- <?php echo $cat_name; ?> -->

                          <?php
                          $cats = get_the_category();
                          foreach ($cats as $cat) {
                            if ($cat->parent) {
                              echo $cat->cat_name;
                            }
                          }
                          
                          ?>


                        </div>
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
            <?php endif; ?>
          </ul>

          <!-- SPのニュース表示 -->
          <ul class="cmn-news-list is-sp">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php
                $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                $cat_slug = $category[0]->category_nicename;
                ?>

                <li class="cmn-news-item">
                  <a href="<?php the_permalink(); ?>">
                    <div class="cmn-news-article">
                      <div class="sp-cmn-news-top">
                        <div class="cmn-news-cat-info <?php echo $cat_slug; ?>">
                          <?php echo $cat_name; ?>
                        </div>
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
            <?php endif; ?>
          </ul>

          <!-- ページネーション -->
          <ul class="Pagination">
            <?php
            $args = array(
              'mid_size' => 1,
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