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

  //表示する要素切り替え
  $('.tab li').click(function() {

    let index = $('.tab li').index(this);

    $('.tab li').removeClass('active');

    $(this).addClass('active');

    // タイトル切り替え
    $('.home__works__ttl').removeClass('active').eq(index).addClass('active');

    // コンテンツ切り替え
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
    centerPadding: '20%',
    responsive: [{
      breakpoint: 768,
      settings: {
        centerMode: false,
        arrows: false,
      },
    }]
  });

  //プレビュー画像の表示
  $("[name='cover_img']").on('change', function(e) {
    let reader = new FileReader();

    reader.onload = function(e) {
      $("#preview").attr('src', e.target.result);
    }

    reader.readAsDataURL(e.target.files[0]);
  })

  // モーダル表示・非表示切り替え関数
  function fadeModal(eachDoc) {
    $(eachDoc).each(function () {
      $(this).on('click', function() {
        let target = $(this).data('target');
        let modal = document.getElementById(target);
        $(modal).fadeToggle();
        return false;
      });
    });
  };

  // その要素以外クリックでモーダル消す関数
  function deleteModal(parentDoc, childDoc) {
    $(document).click(function(e) {
      if (!$(e.target).closest(parentDoc).length) {
        $(childDoc).fadeOut();
      }
    });
  };

  // アイコンモーダル
  $('#icon-profile').on('click', function() {
    $('#header-modal').fadeToggle();
    return false;
  });

  deleteModal('.card-item__below__img', '#header-modal');

  //小さいカードモーダル表示・非表示
  fadeModal('.line');

  //要素以外クリック非表示
  deleteModal('.line', '.dropdown-menu');

  //大きいカードモーダル表示・非表示
  fadeModal('.line_big');

  //要素以外クリック非表示
  deleteModal('.line_big', '.dropdown-menu');

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
	let todayWork_list = $(".today-work .card-item").length;
  let weeklyWork_list = $(".weekly-work .card-item").length;
  let popularWork_list = $(".popular-work .card-item").length;

  if (todayWork_list === 0) {
    let ul_list = document.getElementById('today-works');
    ul_list.insertAdjacentHTML('afterbegin', '<li>今日の投稿はまだありません</li>')
  }

  if (weeklyWork_list === 0) {
    let ul_list = document.getElementById('weekly-works');
    ul_list.insertAdjacentHTML('afterbegin', '<li>今日の投稿はまだありません</li>')
  }

  if (popularWork_list === 0) {
    let ul_list = document.getElementById('popular-works');
    ul_list.insertAdjacentHTML('afterbegin', '<li>今日の投稿はまだありません</li>')
  }

  let popular_btn = $('#popular-btn');
  let weekly_btn = $('#weekly-btn');
  let today_btn = $('#today-btn');

  if (popularWork_list <= moreNum) {
    $(popular_btn).addClass('is-btn-hidden')
  }

  if (weeklyWork_list <= moreNum) {
    $(weekly_btn).addClass('is-btn-hidden')
  }

  if (todayWork_list <= moreNum) {
    $(today_btn).addClass('is-btn-hidden')
  }

});


});
