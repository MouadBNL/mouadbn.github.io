var pgb_html = $('div.pgb_html');
	var doc = $(document);
	//Html Progress bar
	var pgb_html_o = pgb_html.offset().top/2 - 100;
	var img_html = $('.img_html');
	//css Progress bar
	var pgb_css = $('div.pgb_css');
	var img_css = $('.img_css');
	//js Progress bar
	var pgb_js = $('div.pgb_js');
	var img_js = $('.img_js');
	//php Progress bar
	var pgb_php = $('div.pgb_php');
	var img_php = $('.img_php');
	$(window).on('scroll', function() {
		if ($(window).scrollTop()) {
			$('header').addClass('black');
		}else{
			$('header').removeClass('black');
		}
		if (doc.scrollTop() > pgb_html_o && pgb_html.hasClass('hidden')){
			pgb_html.removeClass('hidden');
			pgb_html.addClass('active');
			img_html.addClass('img_active');
			img_html.removeClass('img_disable');

			pgb_css.removeClass('hidden');
			pgb_css.addClass('active');
			img_css.addClass('img_active');
			img_css.removeClass('img_disable');

			pgb_php.removeClass('hidden');
			pgb_php.addClass('active');
			img_php.addClass('img_active');
			img_php.removeClass('img_disable');

			pgb_js.removeClass('hidden');
			pgb_js.addClass('active');
			img_js.addClass('img_active');
			img_js.removeClass('img_disable');
		}
	}
)