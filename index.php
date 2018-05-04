<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title>Mouad Benali</title>
	<link rel="icon" href="imgs/icon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/Earth_Orbiter_Regular/stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/parallax/parallax.min.js"></script>
</head>
<body>
	<header>
		<div>
			<h1 class="header_title">Mouad Benali</h1>
			<img src="imgs/logo.png" height="80px">
			<div class="menu">
				<p><a href="#about"><span class="mn_about">About</span></a> <a href="#contact"><span class="mn_contacte">Contact me</span></a></p>
			</div>
		</div>
	</header>
	<div class="block_page" data-parallax="scroll" data-image-src="imgs/bg.png">
		<section class="banner">
			<h2 class="banner_title">A young <strong>web developer</strong></h2>
			<h3 class="banner_stitle">Welcome to my <strong>web site</strong></h3>
			<div class="btn_email">
				<p>E - mail</p>
			</div>
			<div class="socila_media">
				<a href="https://www.facebook.com/mouad.bnl.14">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
				</a>
				<a href="https://twitter.com/benali_mouadbn">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="https://www.youtube.com/channel/UCm8S2CUZo3Z7ngKFWSBZ4dg">
					<i class="fa fa-youtube-play" aria-hidden="true"></i>
				</a>
			</div>
		</section>
		<section class="competence">
			<div class="comp html">
				<img src="imgs/html.png" height="100px" alt="img_html"><br>
				<div class="progress">
					<div class="pgb_html hidden"></div>
				</div>
			</div>
			<div class="comp css">
				<img src="imgs/css.png" height="100px" alt="img_css"><br>
				<div class="progress">
					<div class="pgb_css hidden"></div>
				</div>
			</div>
			<div class="comp js">
				<img src="imgs/js.png" height="100px" alt="img_js"><br>
				<div class="progress">
					<div class="pgb_js hidden"></div>
				</div>
			</div>
			<div class="comp php">
				<img src="imgs/php.png" height="100px" alt="img_php"><br>
				<div class="progress">
					<div class="pgb_php hidden"></div>
				</div>
			</div>
		</section>
		<section class="about" id="about">
			<h3 class="abt">About me</h3>
			<p class="abt_p">
				I'm 16 years old, I live in Morocco and I started learning about web development in the beginning of 2k18, I study in Palestine High school and I have a normal life like everyone :).
			</p>
		</section>
		<section class="experience">
			<h3 class="exp">
				<i class="fa fa-flask" aria-hidden="true"></i>Experience
			</h3>
			<p class="exp_p">I don't have a large experience because I'm new in this domain, but you can look at my web site as examples or look for this web site if you want, both of them are created by me without any template, and the other projects are in my local computer!!</p>
			<div class="exp_exemple">
				<div class="ex1">
					<p>My web site</p>
				</div>
				<div class="ex2">
					<p>Enderlife</p>
				</div>
			</div>
		</section>
		<section class="formation">
			<h3 class="fmt">
				<i class="fa fa-cogs" aria-hidden="true"></i>Formation
			</h3>
			<div class="programmation">
				<h4 class="pgmt">
					<i class="fa fa-code" aria-hidden="true"></i>Programming
				</h4>
				<p class="pgmt_p">
					Because I'm a beginner, I have just finished an html/css course at openclassrooms.com, and I don’t stop here because this course is not complete and I look some time in a YouTube tuts to have a more experience, and now I learn PHP and Javascript to be a full stack web developer!
				</p>
			</div>
			<div class="design">
				<h4 class="dsg">
					<i class="fa fa-picture-o" aria-hidden="true"></i>Design
				</h4>
				<p class="dsg_p">
					I'm a graphic designer with 2 years of experience, I have a good level in Adobe Photoshop, I can also make some projects with adobe illustrator and some 2D animations with Adobe After effect and 3D projects with cinema 4D.
				</p>
			</div>
		</section>
		<section class="contact" id="contact">
			<h3 class="ctc"><i class="fa fa-address-card" aria-hidden="true"></i>Contact</h3>
			<form class="f_contact" name="f_contact" method="POST">
				<input class="frm c_user" type="text" name="user" name" value=""><br>
				<input class ="frm c_email" type="email" name="email"><br>
				<textarea class="frm c_message" name="message"></textarea>
				<input class="c_send" type="submit">
			</form>
			<div class="moyen_ctc">
				<p class="email">Email : benali.mouadbn@gmail.com<p>
				<p class="facebook">Facebook : <a href="https://www.facebook.com/mouad.bnl.14">Mouad BN</a><p>
				<p class="twitter">Twitter : <a href="https://twitter.com/benali_mouadbn">@benali_mouadbn</a><p>
			</div>
		</section>
	</div>
	<footer>
		<p>© 2018 Mouad Benali. All Rights Reserved.</p>
		<p>Location : Morocco, Kenitra</p>
	</footer>
	<script type="text/javascript" src="js/forum.js"></script>
	<script type="text/javascript">
		var pgb_html = $('div.pgb_html');
		var doc = $(document);
		//Html Progress bar
		var pgb_html_o = pgb_html.offset().top/2 - 100;
		//css Progress bar
		var pgb_css = $('div.pgb_css');
		//js Progress bar
		var pgb_js = $('div.pgb_js');
		//php Progress bar
		var pgb_php = $('div.pgb_php');
		$(window).on('scroll', function() {
			if ($(window).scrollTop()) {
				$('header').addClass('black');
			}else{
				$('header').removeClass('black');
			}
			if (doc.scrollTop() > pgb_html_o && pgb_html.hasClass('hidden')){
				pgb_html.removeClass('hidden');
				pgb_html.addClass('active');
				pgb_css.removeClass('hidden');
				pgb_css.addClass('active');
				pgb_php.removeClass('hidden');
				pgb_php.addClass('active');
				pgb_js.removeClass('hidden');
				pgb_js.addClass('active');
			}
		})
		//Formulair
	</script>
</body>
</html>