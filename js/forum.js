
$(document).ready(function () {
	var c_user = $('.c_user');
	c_user.blur(function () {
		if($(this).val() == ''){
			c_user.addClass('vide');
			c_user.removeClass('valide');
		}else{
			c_user.removeClass('vide');
			c_user.addClass('valide');
		}
	})

	var c_email = $('.c_email');
	c_email.blur(function () {
		if($(this).val() == ''){
			c_email.addClass('vide');
			c_email.removeClass('valide');
		}else{
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(this).val())) {
				c_email.removeClass('vide');
				c_email.addClass('valide');
			}else{
				c_email.addClass('vide');
				c_email.removeClass('valide');
			}
		}
	})

	var c_message = $('.c_message');
	c_message.blur(function () {
		if($(this).val() == ''){
			c_message.addClass('vide');
			c_message.removeClass('valide');
		}else{
			c_message.removeClass('vide');
			c_message.addClass('valide');
		}
	})
});