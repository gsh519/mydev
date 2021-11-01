$(function() {

  // ①タブをクリックしたら発動
  $('.tab li').click(function() {

    // ②クリックされたタブの順番を変数に格納
    var index = $('.tab li').index(this);

    // ③クリック済みタブのデザインを設定したcssのクラスを一旦削除
    $('.tab li').removeClass('active');

    // ④クリックされたタブにクリック済みデザインを適用する
    $(this).addClass('active');

    // ⑤コンテンツを一旦非表示にし、クリックされた順番のコンテンツのみを表示
    $('.area__content').removeClass('show').eq(index).addClass('show');
  });

  // プロダクト一覧ページカルーセル
  $('.mypattern').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 800,
    dots: true,
    arrows: true,
    centerMode: true,
    centerPadding: '20%'
  });

});
