import Vue from 'vue'
import WorkTagsInput from './components/WorkTagsInput'
import WorkLike from './components/WorkLike'
import FollowButton from './components/FollowButton'

const app = new Vue({
  el: '#app',
  components: {
    WorkTagsInput,
    WorkLike,
    FollowButton,
  }
})


$(function() {

  // ①タブをクリックしたら発動
  $('.tab li').click(function() {

    // ②クリックされたタブの順番を変数に格納
    let index = $('.tab li').index(this);

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

  //プレビュー画像の表示
  $("[name='cover_img']").on('change', function(e) {
    let reader = new FileReader();

    reader.onload = function(e) {
      $("#preview").attr('src', e.target.result);
    }

    reader.readAsDataURL(e.target.files[0]);
  })

  // アイコンモーダル
  $('#icon-profile').on('click', function() {
    $('#header-modal').fadeToggle();
    return false;
  });

  //更新・削除表示
  $('.line').each(function () {
    $(this).on('click', function() {
      let target = $(this).data('target');
      let modal = document.getElementById(target);
      $(modal).fadeToggle();
      return false;
    });
  });

  // もっとみるボタン実装
  let moreNum = 9;
  /* 表示するリストの数以降のリストを隠しておきます。 */
  $('.card-item:nth-child(n + ' + (moreNum + 1) + ')').addClass('is-hidden');

  /* 全てのリストを表示したら「もっとみる」ボタンをフェードアウトします。 */
$('.area__btn .btn').on('click', function() {
  $('.card-item.is-hidden').slice(0, moreNum).removeClass('is-hidden');
  if ($('.card-item.is-hidden').length == 0) {
    $('.area__btn .btn').fadeOut();
  }
});

/* リストの数が、表示するリストの数以下だった場合、「もっとみる」ボタンを非表示にします。 */
$(function() {
	let list = $(".today-work .card-item").length;

  // if (list < moreNum) {
  //   $('.area__btn .btn').addClass('is-btn-hidden');
	// }

  if (list === 0) {
    let ul_list = document.getElementById('today-works');

    ul_list.insertAdjacentHTML('afterbegin', '<li>今日の投稿はまだありません</li>')
  }
});


});
