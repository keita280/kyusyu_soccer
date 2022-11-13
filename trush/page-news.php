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
          <?php
            $paged = (int) get_query_var('paged');
            $args = array(
            'posts_per_page' => 6,
            'paged' => $paged,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
              <li class="cmn-news-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="cmn-news-article">
                    <div class="cmn-news-cat-wrapper">
                      <div class="cmn-news-cat-info info-cat-blue"><?php echo $catname; ?></div>
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
              <?php endwhile; endif; ?>
          </ul>

          <!-- SPのニュース表示 -->
          <ul class="cmn-news-list is-sp">

          <?php
            $newslist = get_posts(array(
              'paged' => get_query_var('paged'), //これを加えました
              'category_name' => 'news', //特定のカテゴリースラッグを指定
              'posts_per_page' => 10, //取得記事件数
            ));
            $cat = get_the_category();
            $catname = $cat[0]->cat_name;
            foreach ($newslist as $post) :
              setup_postdata($post);
            ?>
            <li class="cmn-news-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="cmn-news-article">
                    <div class="sp-cmn-news-top">
                      <div class="cmn-news-cat-info info-cat-tournament"><?php echo $catname; ?></div>
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
            if ($the_query->max_num_pages > 1) {
            echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'new/%#%/',
            'current' => max(1, $paged),
            'total' => $the_query->max_num_pages
            ));
            }
            ?>
          </ul>
          <!-- ページネーション -->
          <?php wp_reset_postdata(); ?>
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