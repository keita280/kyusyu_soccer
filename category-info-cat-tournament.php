<?php
/*
Template Name: category-tournamentページ
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
  <div class="cmn-article-bg  cmn-news-bg-tournament">
    <div class="cmn-article-wrapper inner">
      <section class="cmn-news-list">
        <figure class="twitter-news is-pc"><a href=""></a></figure>
        <h2 class="cmn-page-head">TOURNAMENT<span class="cmn-page-head-subttl">大会情報一覧</span></h2>
        <div class="cmn-news-list-container">


          <!-- PCのニュース表示 -->
          <ul class="cmn-news-list is-pc">

            <?php query_posts('cat=tournament&posts_per_page=10'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                $cat_slug = $category[0]->category_nicename;
                ?>

                <li class="cmn-news-item">
                  <a href="<?php the_permalink(); ?>">
                    <div class="cmn-news-article">
                      <div class="cmn-news-cat-wrapper">
                        <div class="cmn-news-cat-info <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></div>
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
          <?php query_posts('cat=&posts_per_page=10'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php
                  $category = get_the_category();
                  $cat_name = $category[0]->cat_name;
                  $cat_slug = $category[0]->category_nicename;
                  ?>


              <li class="cmn-news-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="cmn-news-article">
                    <div class="sp-cmn-news-top">
                      <div class="cmn-news-cat-info <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></div>
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
            <?php wp_reset_postdata(); ?>
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
        <div class="aside-inner">
          <h3 class="aisde-ttl">NEWS CATEGORY</h3>
          <ul class="aside-container">
            <li class="aside-li opacity"><a href="">お知らせ一覧</a></li>
            <li class="aside-li"><a href="" class=" opacity">大会情報一覧</a>
              <ul class="aside-sub-container">
                <li class="aside-sub-li opacity"><a href="">U-18選手権</a></li>
                <li class="aside-sub-li opacity"><a href="">U-15選手権</a></li>
                <li class="aside-sub-li opacity"><a href="">U-15選手権</a></li>
                <li class="aside-sub-li opacity"><a href="">デベロップ大会</a></li>
                <li class="aside-sub-li opacity"><a href="">U-13大会</a></li>
                <li class="aside-sub-li opacity"><a href="">U-18TownClubCUP</a></li>
                <li class="aside-sub-li opacity"><a href="">U-17大会</a></li>
                <li class="aside-sub-li opacity"><a href="">U-14大会</a></li>
                <li class="aside-sub-li opacity"><a href="">研修会・講習会</a></li>
              </ul>
            </li>
            <li class="aside-li opacity"><a href="">加盟登録一覧</a></li>
          </ul>
        </div>
        <form method="get" action="#" class="search_container">
          <input type="text" size="25" placeholder="キーワードで検索">
          <input type="submit" value="&#xf002">
        </form>
      </aside>
    </div>
  </div>
</main>
<?php get_footer(); ?>