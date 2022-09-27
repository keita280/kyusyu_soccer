<?php
/*
Template Name: strongページ
*/
get_header();
?>





    <!-- ページタイトル -->
    <div class="page-title">
      <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
      <h1 class="page-ttl">私たちの強み</h1>
      <figure class="section_title_blob-l"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs_2.svg" alt=""></figure>

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

      <!-- strong_container -->
      <section class="strong_container">
        <div class="inner">
          <h2 class="strong_ttl">私たちの強みは、<br class="is-sp">会員同士の繋がりです</h2>
          <p class="strong_text">
            管理栄養士・栄養士が施設に1人しかいない現場も少なくありません。「本当にこの対応でいいのだろうか…」と、不安や悩みを抱えながら、日々の業務を行なっている方も多くいらっしゃいます。<br>
            <br class="is-sp">
            私たち全国精神科栄養士協会の研修会は、そういった日頃の不安や悩みを相談し、解決できる場となっています。全国にいる会員同士が繋がり、情報共有して、切磋琢磨できる環境が、私たちの強みです。
          </p>
          <figure class="strong_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Frame 125.png" alt="" class="is-pc" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/strong_sp.png" alt="" class="is-sp" />
          </figure>
        </div>
      </section>

      <!-- 強み １ -->
      <section class="strong_point_container">
        <div class="inner">
          <h2 class="strong_point_ttl section_title">
            <span class="st_pt_ttl_en section-ttl-en">01</span>
            <div class="section-ttl-ja">最新の情報が得られる</div>
          </h2>
          <div class="strong_point_01_body">
            <div class="strong_point_01_txt">全国精神科栄養士協会の会員の中には、各都道府県の栄養士会の役員をされていたり、診療報酬に関する情報を知っていたり、何度も学会発表するような方や、施設で様々な取り組みをしている会員など、様々な方がいます。<br>
              <br>
              県内の栄養士会では出会えないような方々と一緒に意見交換をすることで、最新の情報も得ることができます。
            </div>
            <figure class="strong_point_01_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/strong_point_01.png" alt="">
            </figure>
          </div>
        </div>
      </section>

      <!-- 強み ２ -->
      <section class="strong_point_container-2">
        <div class="inner">
          <h2 class="strong_point_ttl section_title">
            <span class="st_pt_ttl_en section-ttl-en">02</span>
            <div class="section-ttl-ja">気軽に相談ができる</div>
          </h2>
          <div class="strong_point-02_head">研修会では、決まったテーマだけではなく、様々な悩みについて気軽に意見交換をすることができます。例えば、次のような悩みについて、他の施設でどのように対応しているのか気軽に質問することもできます。</div>
          <div class="strong_point_02_body">
            <div class="sp_qa_container">
              <div class="sp02_green">
                <figure class="sp_02green_img"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_q.png" alt=""></figure>
                <div class="sp02_green_bg">
                  <p>食事に毒が入っているからと食べない患者様には、どんな対応をしたらいいんでしょうか…</p>
                </div>
                <div class="sp02_space is-pc"></div>
              </div>
              <div class="sp02_yellow">
                <div class="sp02_yellow_space is-pc"></div>
                <div class="sp02_yellow_bg">
                  <p>弁当箱に詰まっていたり、包装されていると安心するみたい。
                    個包装のパン、牛乳、栄養補助食品のみで提供することもありますよ。</p>
                </div>
                <figure class="sp_02yellow_img"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_a1.png" alt=""></figure>
              </div>
            </div>
            <div class="sp_qa_container">
              <div class="sp02_green">
                <figure class="sp_02green_img"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_q.png" alt=""></figure>
                <div class="sp02_green_bg">
                  <p>食事に関してこだわりがある方に、納得していただくのが困難だったり、食事改善に時間がかかることが悩みです。
                    他の施設ではどのような対応をされていますか？</p>
                </div>
                <div class="sp02_space is-pc"></div>
              </div>
              <div class="sp02_yellow">
                <div class="sp02_yellow_space is-pc"></div>
                <div class="sp02_yellow_bg">
                  <p>精神科の栄養指導はとても難しく、患者様によっては継続できない患者様もいらっしゃいます。医師、看護師とも連携して声掛けをしたり、体重測定の経過をグラフで見える化したり、写真で分かりやすく説明したりしています。</p>
                </div>
                <figure class="sp_02yellow_img"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_a2.png" alt=""></figure>
              </div>
            </div>
            <div class="sp_qa_container">
              <div class="sp02_green">
                <figure class="sp_02green_img"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_q.png" alt=""></figure>
                <div class="sp02_green_bg">
                  <p>イレウス（腸閉塞）を繰り返す患者様が多いのですが、食事対応はどうしていますか？</p>
                </div>
                <div class="sp02_space is-pc"></div>
              </div>
              <div class="sp02_yellow">
                <div class="sp02_yellow_space is-pc"></div>
                <div class="sp02_yellow_bg">
                  <p>固形物を提供せずに流動食や栄養補助食品の食事内容にしたり、排便状況を確認しながら医師と相談して食事内容を調整しています。</p>
                </div>
                <figure class="sp_02yellow_img"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_a3.png" alt=""></figure>
              </div>
            </div>
        </div>
      </section>


      <!-- 強み 3 -->
      <section class="strong_point_container">
        <div class="inner">
          <h2 class="strong_point_ttl section_title">
            <span class="st_pt_ttl_en section-ttl-en">03</span>
            <div class="section-ttl-ja">全国に仲間ができる</div>
          </h2>
          <div class="strong_point_03_body">
            <div class="strong_point_03_txt">これまでは、住んでいる地域やその近くで研修会が行われるときに参加していた方も多かったと思います。しかし2020年からは、研修会に参加することが難しかった方とも、オンラインで繋がることができるようになりました。距離の問題が解消され、全国精神科栄養士協会がより身近な存在となり、会員同士の活発な交流が生まれています。
            <br>
            <br>
            オフラインでの研修会会場は毎年異なり、全国各地で開催されます。研修会後の懇親会では、ざっくばらんに楽しく交流しています。
            全国各地に仲間がいるので、研修会でスキルアップしつつ、各地の郷土料理や、美味しい食材を味わい、文化を知ることも楽しみの１つです。
            </div>
          </div>
        </div>
      </section>
        
        
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
//top-entry
//＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<section class="top-entry">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>admission" class="top-entry_container inner">
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