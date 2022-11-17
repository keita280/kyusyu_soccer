<?php
/*
Template Name: 再）コンタクトページ
*/
get_header(); ?>
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<!-- //contactタイトル-->
<!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
<main>
  <section class="page-ttl contact-ttl">
    <div class="page-ttl-container inner">
      <h2 class="page-h2-ttl">CONTACT</h2>
      <h2 class="page-h2-subttl">お問い合わせ</h2>
    </div>
  </section>

  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->
  <!-- //お問合せフォーム-->
  <!-- //＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠ -->

  <section class="contact">
    <div class="contact-inner inner">
      <p class="contact-attention">
        以下のフォームに必要事項をご入力ください。<br />※フォーム送信にはプライバシーポリシーのご確認・ご同意が必要となります。
      </p>
      <form class="form-wrapper">

        <div class="form-container">
          <!-- チーム名 -->
          <div class="cp-contactForm01__item">
            <dl>
              <dt class="cp-contactForm01__title">チーム名</dt>
              <dd>
                <input class="cp-riset-text" type="text" />
              </dd>
            </dl>
          </div>
          <!-- チーム名 -->

          <!-- 氏名 -->
          <div class="cp-contactForm01__item">
            <dl>
              <dt class="cp-contactForm01__title">
                お名前
                <span class="cp-label cp-label-danger">※必須</span>
              </dt>
              <dd>
                <input class="cp-riset-text" type="text" />
              </dd>
            </dl>
          </div>
          <!--  氏名 -->

          <!-- アイテム メールアドレス -->
          <div class="cp-contactForm01__item">
            <dl>
              <dt class="cp-contactForm01__title">
                メールアドレス
                <span class="cp-label cp-label-danger">※必須</span>
              </dt>
              <dd>
                <input class="cp-riset-text" type="text" />
              </dd>
            </dl>
          </div>
          <!-- /アイテム メールアドレス -->

          <!-- アイテム お問合せ内容 -->
          <div class="cp-contactForm01__item">
            <dl>
              <dt class="cp-contactForm01__title">
                お問い合わせ内容
                <span class="cp-label cp-label-danger">※必須</span>
              </dt>
              <dd>
                <textarea class="cp-riset-textarea" rows="6"></textarea>
              </dd>
            </dl>
          </div>
          <!-- /アイテム お問合せ内容 -->


          <p class="contact-comment">
            ご入力いただいた個人情報の取り扱いについては、プライバシーポリシーをご覧ください。<br />
            プライバシーポリシーに同意し、問い合わせを続ける場合は、「同意する」にチェックの上、確認画面へお進みください。
          </p>

          <!-- プライバシーポリシー同意 -->
          <div class="cp-contactForm01__privacy cp-text-center">
            <label><input class="cp-riset-check" type="checkbox" name="check-name" /><span>
                <p class="privacy modal-open">プライバシーポリシー</p>
                に同意する
              </span></label>
          </div>
          <!-- /プライバシーポリシー同意 -->

          <!-- ボタン -->
          <p class="cp-text-center">
            <input class="cp-riset-submit cp-submit-primary" type="button" value="送信する" />
          </p>
          <!-- /ボタン -->

          <div class="modal-container">
            <div class="modal-body">
              <div class="modal-close">×</div>
              <div class="modal-content">
                <p>
                  １．基本方針<br />
                  　九州クラブユースサッカー連盟（以下「当連盟」といいます。）は、九州クラブユースサッカー連盟ホームページ（
                  以下「当サイト」といいます。）における情報の提供、交流、その他の情報サービス（以下「当サイト情報サービス」といいます。）の円滑で適正な実施の確保、並びに、当連盟の事業に関する情報提供等各種会員サービス等（以下「当連盟各種会員サービス等」といいます。）の向上に必要な範囲で、当サイトを利用される皆様の情報を収集しています。<br />
                  当連盟は個人情報に関する法令を遵守し、当連盟で取扱う個人情報の取得、利用、管理を適正に行います。
                  <br />
                  <br />
                  ２．適用範囲<br />
                  　本プライバシーポリシーは、当サイトが行う各種サービスにおいて、お客様の個人情報もしくはそれに準ずる情報を取り扱う際に、当連盟が遵守する方針を示したものです。
                  本プライバシーポリシーは、当サイトにおいてのみ適用されます。
                  <br />
                  <br />
                  ３．個人情報の取得と利用目的<br />
                  （１）当サイトでは、インターネットドメイン名、IPアドレス、当サイトの閲覧等の情報を自動的に収集します。また、当サイトの提供するページには、一部クッキー（サーバ側で利用者を識別するために、サーバから利用者のブラウザに送信され、利用者のコンピュータに蓄積される情報をいいます。）を使用しています。ただし、クッキーを使用して利用者個人を識別できる情報は一切収集していません。

                  <br />
                  <br />
                  （２）お問い合わせのご利用にあたっては、お名前、メールアドレス等の登録をお願いしています。
                  <br />
                  <br />
                  （３）収集した情報は、当サイト情報サービスの円滑で適正な実施を確保するための参考として利用します。
                  <br />
                  <br />
                  （５）「メールアドレス」は、当連盟からの返信の宛先として利用します。
                  <br />
                  <br />
                  ４．第三者提供の有無<br />
                  当連盟は、当サイトで収集した情報を、法令に基づく開示請求があった場合、本人の同意が得られた場合、その他特別な理由のある場合を除き、３に掲げた利用目的以外の目的のために自ら利用し、または第三者に提供しません。
                  <br />
                  <br />
                  ただし、統計的に処理を施した当サイトのアクセス情報、利用者属性等の情報については公表することがあります。
                  <br />
                  <br />
                  ５．安全確保の措置<br />
                  当連盟は、収集した情報の漏えい、滅失またはき損の防止その他収集した情報の適切な管理のために必要な措置を講じます。
                  <br />
                  <br />
                  ６．個人情報の開示・訂正・利用停止等<br />
                  個人情報の開示、訂正、利用停止等のお申し出があった場合には、当連盟所定の方法に基づき対応致します。７に記載の事務局担当までお申し出ください。
                  <br />
                  <br />
                  ７．個人情報に関するお問い合わせ<br />
                  個人情報に関する問い合わせは、下記の事務局担当までお申し出ください。
                  <br />
                  <br />
                  〒814-0001<br />
                  福岡県福岡市早良区百道浜1-3-70 <br />
                  ザ・レジデンシャルスイート・福岡3408 丸山 和毅
                  <br />
                  <br />
                  なお、本個人情報保護方針については今後、インターネット環境の変化、またはホームページの利用方法の改善等に応じて、改正することがあります。
                </p>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</main>
<?php get_footer(); ?>