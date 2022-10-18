


//@@@@@@@@@@@@@@@@@@@@@@@@@
//ハンバーガーメニューの表示
//@@@@@@@@@@@@@@@@@@@@@@@@@

$(function() {
  $('#toggle').on('click', function() {
    $('body').toggleClass('is-open');
    if ($('#humberger-text').text() === 'CLOSE') {
      $('#humberger-text').text('MENU');
    } else {
      $('#humberger-text').text('CLOSE');
    }
  });
});

