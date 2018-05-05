$("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


var doc = $(document);

//header
$(window).on('scroll', function() {
	if ($(window).scrollTop()) {
		$('header').addClass('black');
	}else{
		$('header').removeClass('black');
	}
})



//competences
var pgb_html = $('div.pgb_html');
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
})





//arrow
var arrow_o = pgb_html.offset().top/2 - 300;
console.log(arrow_o);
$(window).on('scroll', function() {
	if (doc.scrollTop() > arrow_o && $('div.arrow').hasClass('hidden')){
		$('div.arrow').removeClass('hidden');
		$('div.arrow').addClass('active');
	}
	if (doc.scrollTop() < arrow_o && $('div.arrow').hasClass('active')){
		$('div.arrow').removeClass('active');
		$('div.arrow').addClass('hidden');
	}
})


//about
$(window).on('scroll', function() {
	var about = $('section.about');
	var about_o = about.offset().top/2;
	if (doc.scrollTop() > about_o && about.hasClass('hidden')) {
		about.removeClass('hidden');
		about.addClass('active');
	}
})


//experiences
$(window).on('scroll', function() {
	var exp = $('section.experience');
	var exp_o = exp.offset().top/2  + 150;
	if (doc.scrollTop() > exp_o && exp.hasClass('hidden')) {
		exp.removeClass('hidden');
		exp.addClass('active');
	}
})


//formation
$(window).on('scroll', function() {
	var frm = $('section.formation');
	var frm_o = frm.offset().top/2  + 500;
	if (doc.scrollTop() > frm_o && frm.hasClass('hidden')) {
		frm.removeClass('hidden');
		frm.addClass('active');
	}
})
