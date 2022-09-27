//@@@@@@@@@@@@@@@@@@@@@@@@@
//adobefontの導入
//@@@@@@@@@@@@@@@@@@@@@@@@@
  (function(d) {
    var config = {
      kitId: 'gir7csi',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);



//@@@@@@@@@@@@@@@@@@@@@@@@@
//ハンバーガーメニューの表示
//@@@@@@@@@@@@@@@@@@@@@@@@@


jQuery("#hamburger").on("click", function () {
  jQuery("#accordion-item").slideToggle();
});

//@@@@@@@@@@@@@@@@@@@@@@@@@
//資料室パスワード可視化
//@@@@@@@@@@@@@@@@@@@@@@@@@
// jQuery(function ($) {
//  const pwd = document.getElementById('password');
//  const pwdCheck = document.getElementById('password-check');
//  pwdCheck.addEventListener('change', function() {
//      if(pwdCheck.checked) {
//          pwd.setAttribute('type', 'search');
//      } else {
//          pwd.setAttribute('type', 'password');
//      }
//  }, false);
// });


//  //@@@@@@@@@@@@@@@@@@@@@@@@@
// //エラー箇所への遷移
// //@@@@@@@@@@@@@@@@@@@@@@@@@
jQuery(function ($) {
    // Contact Form 7
    var wpcf7El = document.querySelector(".wpcf7")
  
    // エラーが発生した時
    wpcf7El.addEventListener("wpcf7invalid", function() {
      var speed = 500; // スクロール速度
      setTimeout(function () {
        var firstErrorEl = $(".wpcf7-not-valid:first"); // エラーが発生した1番目の要素を取得
        var scrollAmount = firstErrorEl.offset().top - 130; // 要素までのスクロール距離を取得
        $("html, body").animate({ scrollTop: scrollAmount }, speed, "swing"); // 該当箇所までスクロール
      }, 500);
    },false );
  });