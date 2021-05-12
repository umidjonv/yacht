(function ($) {
	$(function () {
		var $win = $(window);
		
		
		// 햄버거 메뉴
		$(".js_menu_open").click(function () {
			$(".gnb").animate({'left': 0}, 300);
			$(".gnb_bg").show();
		});
		$(".js_menu_close").click(function () {
			$(".gnb").animate({'left': "-100%"}, 200);
			$(".gnb_bg").hide();
		});
		

		// 탭메뉴
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
		
		
		//기본 아코디언 펼침
		$('.js_acd').each(function () {
			var $content = $(this).find('.js_acd_con'),
				$title = $(this).find('.js_acd_tit'),
				arrow = $title.find('.js_acd_arrow');
			// Hide <ul> initially
			$content.hide();
			// Toggle functionality
			$title.click(function (e) {
				e.preventDefault();

				$content.slideToggle();
				arrow.toggleClass('on');
			});
		});
		
		
		// 바로 뒤 펼쳐지는 아코디언
		$('.js_acd_2').each(function () {
			var $title = $(this).find('.js_acd_tit'),
				$content = $(this).find('.js_acd_con'),
				arrow, $currParent;
			// Hide <ul> initially
			$content.hide();
			// Toggle functionality
			$title.click(function (e) {
				e.preventDefault();
				
				$content = $(this).siblings('.js_acd_con');
				arrow = $(this).find('.js_acd_arrow');
				$currParent = $(this).parent('.js_acd_con2');

				$content.slideToggle();
				arrow.toggleClass('on');
				$(this).toggleClass('on');
				$currParent.toggleClass('jbg_grey5');
			});
		});
		
		
		
		
		/* 팝업창 */
		$(".js_pop_open").on('click', function () {
			$(".pop").addClass('view_pop');
			$(".pop").show();
		});
		$(".js_pop_close").on('click', function () {
			$(".pop").removeClass('view_pop');
			$(".pop").hide();
		});

		$(".js_pop_open2").on('click', function () {
			$(".pop2").addClass('view_pop');
			$(".pop2").show();
		});
		$(".js_pop_close").on('click', function () {
			$(".pop2").removeClass('view_pop');
			$(".pop2").hide();
		});
		
		
		// 진열 버튼
		$('.js_btn_open').on('click', function() {
			if ($(this).hasClass('bt_sml02_blu3') == true) {
				$(this).addClass('bt_sml02_blu2');
				$(this).removeClass('bt_sml02_blu3');
			} else if ($(this).hasClass('bt_sml02_blu2') == true) {
				$(this).addClass('bt_sml02_blu3');
				$(this).removeClass('bt_sml02_blu2');
			}
		});

	});
})(jQuery);