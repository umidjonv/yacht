(function ($) {
	$(function () {
		var $win = $(window),
			document = $(document);

		//기본 swiper
		var swiper = new Swiper('.swiper_basic', {
			pagination: {
				el: '.swiper-pagination',
			},
		});

		//loop swiper
		var swiper = new Swiper('.swiper_loop', {
			loop: true,
			pagination: {
				el: '.swiper-pagination',
			},
		});

		//카운트 증감함수
		var $count,
			currentNum,
			num;

		$('.button_count:first-child').click(function () {
			$count = $(this).parent('.count_btn');
			currentNum = $count.siblings('.crt_num');
			num = parseInt(currentNum.val());

			if (num > 0) {
				currentNum.val(num - 1);
			}
			if (num == 1) {
				$('.button_count:first-child').prop('disabled', true);
			}
			if (num == 50) {
				$('.button_count:last-child').prop('disabled', false);
			}
		});

		$('.button_count:last-child').click(function () {
			$count = $(this).parent('.count_btn');
			currentNum = $count.siblings('.crt_num');
			num = parseInt(currentNum.val());

			if (num < 50) {
				currentNum.val(num + 1);
			}
			if (num > 0) {
				$('.button_count:first-child').prop('disabled', false);
			}
			if (num == 49) {
				$('.button_count:last-child').prop('disabled', true);
			}
		});


		// calendar 클릭한 날짜 회색배경 깔기
		$('.calendar td').on('click', function () {
			//선택되면 안되는 날 클릭했을 때
			if ($(this).hasClass('day_dft')) {
				return;
			}

			$('.calendar td').removeClass('event');
			$(this).addClass('event');
		});


		//product 탭메뉴
		var $tabMenu = $('.tab_menu'),
			$div = $('.tab_con'),
			sp = 500;
		$tabMenu.on('click', function (e) {
			e.preventDefault();

			if ($(this).hasClass('on')) {
				return;
			}

			$tabMenu.removeClass('on');
			$(this).addClass('on');
			$div.hide();

			$($(this).find('a').attr('href')).fadeIn(sp);
		});


		/* 팝업창 */
		$(".js_pop_open").on('click', function () {
			$(".js_pop").show();
		});
		$(".js_pop_close").on('click', function () {
			$(".js_pop").hide();
		});

		//팝업 외에 영역 클릭
		$('.pop_select').click(function () {
			$(".pop").hide();
		});
		

		//지역선택
		$('.pop_val').click(function () {
			var txt = $(this).text();
			$('.js_input_loca').val(txt);
		});


		// 약관동의 전체체크
		$('.js_agree').each(function () {
			// 체크박스 전체 선택
			$(this).on('click', '.ck0', function () {
				$(this).parents('.js_agree').find('input').prop('checked', $(this).is(':checked'));

				//전체 동의시 버튼 활성화
				if ($('.ck0').is(':checked') == true) {
					$('.js_btn').addClass('jbg_ylw');
					$('.js_btn').removeClass('jbg_grey02');
				} else {
					$('.js_btn').addClass('jbg_grey02');
					$('.js_btn').removeClass('jbg_ylw');
				}
			});
			// 체크박스 개별 해제시 전체해제, 개별선택 전부했을 때 전체선택 체크
			$(this).on('click', '.normal', function () {
				var is_checked = true;

				$('.js_agree .normal').each(function () {
					is_checked = is_checked && $(this).is(':checked');
				});

				$('.ck0').prop('checked', is_checked);

				//전체 동의시 버튼 활성화
				if ($('.ck0').is(':checked') == true) {
					$('.js_btn').addClass('jbg_ylw');
					$('.js_btn').removeClass('jbg_grey02');
				} else {
					$('.js_btn').addClass('jbg_grey02');
					$('.js_btn').removeClass('jbg_ylw');
				}
			});
		});


		//탈퇴시 체크가 하나라도 되어 있으면 버튼 활성화
		$(".out_mem input").click(function () {
			var ss = $(".out_mem input:checked").length;

			//alert(ss);

			if (ss > 0) {
				$('.js_btn').addClass('jbg_ylw');
				$('.js_btn').removeClass('jbg_grey02');
			} else if (ss <= 0) {
				$('.js_btn').addClass('jbg_grey02');
				$('.js_btn').removeClass('jbg_ylw');
			}
		});



		//아코디언 펼침
		$('.js_acd').each(function () {
			var $content = $(this).find('.js_acd_con'),
				$title = $(this).find('.js_acd_tit'),
				arrow = $title.find('.js_acd_arrow'),
				$value;
			// Hide <ul> initially
			$content.hide();
			// Toggle functionality
			$title.click(function (e) {
				e.preventDefault();

				$content.slideToggle();
				arrow.toggleClass('on');
			});
		});


		//관심 클릭
		$('.js_btn_toggle').on('click', function () {
			$(this).toggleClass('on');
		});


		// 별점주기
		$('.star_review .star_icon02').click(function () {
			$('.star_review .star_icon02').removeClass('on');
			$(this).addClass('on').prevAll('.star_icon02').addClass('on');

			var num = $(this).text();
			$('.review_num font').text(num);

			return false;
		});





	});
})(jQuery);
