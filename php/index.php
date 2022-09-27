<?php get_header(); ?>


<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//メインビジュアル
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<main>
  <section class="main-visual bgc-yellow ">
    <div class="d-demo">
      <div class="d-demo__wrap">
        <ul class="d-demo__list d-demo__list--left">
          <li class="d-demo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/mv2.png" alt></li>
        </ul>
        <ul class="d-demo__list d-demo__list--left">
          <li class="d-demo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/mv2.png" alt></li>
        </ul>
        <ul class="d-demo__list d-demo__list--left">
          <li class="d-demo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/mv2.png" alt></li>
        </ul>
        <ul class="d-demo__list d-demo__list--left">
          <li class="d-demo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/mv2.png" alt></li>
        </ul>
        <ul class="d-demo__list d-demo__list--left">
          <li class="d-demo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/mv2.png" alt></li>
        </ul>
        <ul class="d-demo__list d-demo__list--left">
          <li class="d-demo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/mv2.png" alt></li>
        </ul>
      </div>
    </div>
    <div class="top-about_container inner">
      <div class="top-about inner">
        <figure class="top-about_title">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main_copy.png" alt="">
        </figure>
        <div class="top-about_text">
          一般社団法人全国精神科栄養士協会は、精神科患者様の栄養ニーズ<br class="is-pc">を考え、患者様のQOL向上のために活動しています。
        </div>
        <a class="top-about_link_text cmn-button" href="<?php echo esc_url(home_url()); ?>/about/">私たちについて<span class="arrow-right icon"></span></a>
      </div>
    </div>
  </section>


<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//NEWS
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <section class="top-news bgc-yellow">
    <div class="top-news_container inner">
      <h2 class="top-news-ttl section_title">
        <div class="section-ttl-en">NEWS</div>
        <div class="section-ttl-ja">新着情報</div>
      </h2>
      <!-- 記事のループ処理開始 -->
      <div class="news__topics">
        <?php
        $args = [
          'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿は'post')
          'posts_per_page' => 3, // 表示件数
        ];
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <article class="news__topic">
              <a href="<?php the_permalink(); ?>" class="news-item-link">
                <div class="news__topic__contents">
                  <div class="news-meta">
                    <div class="sp-meta">
                      <p class="news__topic__date"><time datetime="2019-02-01"></time><?php the_time(get_option('date_format')); ?></p>
                      <div class="news-topic-label">
                        <?php
                        $category = get_the_category();
                        echo $category[0]->cat_name;
                        ?>
                      </div>
                    </div>
                    <p class="news__topic__text"><?php the_title(); // ex) 本日の◯◯イベントは雨天の為、明日に延期いたします 
                                                  ?></p>
                  </div>
                </div>
              </a>
            </article>
          <?php endwhile;
        else : ?>
          <p>まだ記事がありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <a class="top-news_btn cmn-button" href="<?php echo esc_url(home_url()); ?>/category/training/">新着情報一覧<span class="arrow-right icon"></span></a>
      </div>
  </section>

  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//JOIN-US
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->

  <section class="top-joinus bgc-white">
    <div class="top-joinus_container inner">
      <div class="top-joinus-ttl_wrapper">
        <h3 class="top-joinus-ttl">精神科で働く<br class="is-sp">管理栄養士・栄養士の皆さまへ</h3>
        <div class="top-joinus-sub-ttl">
          精神科領域の栄養管理、<br>私たちと一緒に<br class="is-sp">取り組んでみませんか？
        </div>
      </div>
      <p class="top-joinus_txt">私たち全国精神科栄養士協会の研修会は、精神科領域の栄養管理に関する疑問や悩みを相談し、解決できる場となっています。全国にいる会員同士が繋がり、情報共有して、切磋琢磨できる環境が、私たちの強みです。<br>
        会員の皆様からは、繋がりができてよかった！スキルアップできた！入ってよかった！などのお声をいただいています。</p>
      <div class="top-joinus_frames">
        <a class="top-joinus_frame 
        top-joinus_frame_left" href="<?php echo esc_url(home_url()); ?>/strong">
          <div class="top-joinus_bg_l">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mv_l.png" alt="">
            <div class="box-text">
              <h4>私たちの強み</h4>
              <div class="cmn-button-white_area">
                <div class="cmn-button-white">詳しく見る<span class="arrow-right-white icon"></span></div>
              </div>
            </div>
          </div>
        </a>
        <a class="top-joinus_frame 
        top-joinus_frame_right" href="<?php echo esc_url(home_url()); ?>/admission">
          <div class="top-joinus_bg_r">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mv_r.png" alt="">
            <div class="box-text">
              <h4>入会案内</h4>
              <div class="cmn-button-white_area">
                <div class="cmn-button-white">詳しく見る<span class="arrow-right-white icon"></span></div>
              </div>
            </div>
          </div>
        </a>
      </div>
  </section>
  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//FACE-BOOK
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <div class="top-facebook bgc-yellow">
    <div class="top-facebook_container inner">
      <div class="top-facebook_texts">
        <div class="top-facebook_texts_ttl">Check it out !</div>
        <!-- /.top-facebook_texts_ttl -->
        <h3 class="top-facebook_texts_msg is-pc">最新の情報は<br>Facebookでも発信しています</h3>
        <h3 class="top-facebook_texts_msg is-sp">最新の情報はFacebookでも発信しています</h3>
        <!-- /.top-facebook_texts_msg -->
        <a class="top-facebook_texts_more cmn-button" href="https://www.facebook.com/%E4%B8%80%E8%88%AC%E7%A4%BE%E5%9B%A3%E6%B3%95%E4%BA%BA-%E5%85%A8%E5%9B%BD%E7%B2%BE%E7%A5%9E%E7%A7%91%E6%A0%84%E9%A4%8A%E5%A3%AB%E5%8D%94%E4%BC%9A-106399688763557/" target="_blank" rel="noopener noreferrer">もっと見る<span class="arrow-right icon"></span></a>
      </div>
      <div class="fb_wrapper_pc is-sp">
      <!-- <div class="fb-page" data-href="https://www.facebook.com/%E4%B8%80%E8%88%AC%E7%A4%BE%E5%9B%A3%E6%B3%95%E4%BA%BA-%E5%85%A8%E5%9B%BD%E7%B2%BE%E7%A5%9E%E7%A7%91%E6%A0%84%E9%A4%8A%E5%A3%AB%E5%8D%94%E4%BC%9A-106399688763557/" data-tabs=”timeline” data-width="300" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/%E4%B8%80%E8%88%AC%E7%A4%BE%E5%9B%A3%E6%B3%95%E4%BA%BA-%E5%85%A8%E5%9B%BD%E7%B2%BE%E7%A5%9E%E7%A7%91%E6%A0%84%E9%A4%8A%E5%A3%AB%E5%8D%94%E4%BC%9A-106399688763557/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/%E4%B8%80%E8%88%AC%E7%A4%BE%E5%9B%A3%E6%B3%95%E4%BA%BA-%E5%85%A8%E5%9B%BD%E7%B2%BE%E7%A5%9E%E7%A7%91%E6%A0%84%E9%A4%8A%E5%A3%AB%E5%8D%94%E4%BC%9A-106399688763557/">一般社団法人 全国精神科栄養士協会</a></blockquote></div> -->
        <iframe id="fbiframe" class="fb_iframe is-pc" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25E4%25B8%2580%25E8%2588%25AC%25E7%25A4%25BE%25E5%259B%25A3%25E6%25B3%2595%25E4%25BA%25BA-%25E5%2585%25A8%25E5%259B%25BD%25E7%25B2%25BE%25E7%25A5%259E%25E7%25A7%2591%25E6%25A0%2584%25E9%25A4%258A%25E5%25A3%25AB%25E5%258D%2594%25E4%25BC%259A-106399688763557&tabs&width=680&height=255&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="155" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>

      <div class="fb_wrpper_sp is-sp">
      <!-- <div class="fb-page" data-href="https://www.facebook.com/uniqlo" data-show-posts=”true” data-width="500" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/uniqlo" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/uniqlo">Uniqlo</a></blockquote></div> -->
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25E4%25B8%2580%25E8%2588%25AC%25E7%25A4%25BE%25E5%259B%25A3%25E6%25B3%2595%25E4%25BA%25BA-%25E5%2585%25A8%25E5%259B%25BD%25E7%25B2%25BE%25E7%25A5%259E%25E7%25A7%2591%25E6%25A0%2584%25E9%25A4%258A%25E5%25A3%25AB%25E5%258D%2594%25E4%25BC%259A-106399688763557&tabs=timeline&width=325&height=335&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="325" height="335" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>
      <!-- /.top-facebook_img -->
    </div>
    <!-- /.top-facebook_container -->
  </div>
  <!-- /.top-facebook -->

  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//link
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <section class="top-link bgc-white">
    <div class="top-link_container inner">
      <p class="top-link_text">一般社団法人 全国精神科栄養士協会webサイトバナー広告募集のご案内は<a href="#" class="link-color">こちら</a></p>
      <!-- <ul class="top-link_banners">
        <a class="top-link_banner">
          <li>バナーが入ります</li>
        </a>
        <a class="top-link_banner">
          <li>バナーが入ります</li>
        </a>
        <a class="top-link_banner">
          <li>バナーが入ります</li>
        </a>
      </ul> -->
      <div class="top-link_related-link opacity">
        <p class="top-link_related-link_ttl">関連リンク</p>
        <figure class="top-link_related-link_img"><a href="https://www.mhlw.go.jp/index.html" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/MHLW 1.png" alt=""></a></figure>
      </div>
    </div>
  </section>


  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//top-entry
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <section class="top-entry">
    <a href="<?php echo esc_url(home_url()); ?>/payment/admission" class="top-entry_container inner">
      <div class="bg-dark_green">
        <div class="top-entry_txt">全国に仲間を作り、<br class="is-sp">精神科領域の栄養管理に関する<br>疑問や悩みを解決しませんか？</div>
        <div class="cmn-button-white_area">
          <div class="cmn-button-white_entry">入会する<span class="arrow-right-white_entry icon_entry"></span>
          </div>
        </div>
      </div>
    </a>
  </section>

  <?php get_footer(); ?>