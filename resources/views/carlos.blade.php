<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Carlos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Bootstrap Templates Made For OpenClassRoom">
		<meta name="author" content="Florent Vandroy">
		
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css'); }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css'); }}">
		<link rel="stylesheet" href="{{ asset('css/style.css'); }}">
	</head>
	<body>
		<div class="bgimg img-responsive img-fluid">
			<header id="header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<a class="navbar-brand" href="#"><img src="../img/logo.png" alt="Logo du site"> Carlos</a>
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto mx-auto">
								<li class="nav-item active">
									<a class="nav-link" href="#intro">Intro <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#aboutme">About me</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#portfolio">Portfolio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#client">Clients</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#blog">Blog</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contacts">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
			<div class="intro" id="intro" style="margin-top:280px;">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-7">
							<h1>Hi there!</h1>
							<h2>My Name is <span style="color: #fb00ff">Carlos</span></h2>
							<h3>I’m a Odoo Developer</h3>
							<p style="margin-bottom: 70px;">
								Currently working with Witech Enterprise ....
							</p>
							<a href="#">About Me</a>
						</div>
						<div class="col-12 col-md-5">
							<!-- empty -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="aboutme" id="aboutme">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<h1 class="title">About me...</h1>
						<h2 class="subtitle">Bersekolah di</h2>
						<ul>
							<div class="row">
								<div class="col">
									<li><p>SD  : 2008 - 2014</p></li>
									<p>Methodist - 3</p>
									<li><p>SMP : 2014 - 2017</p></li>
									<p>Methodist - 3</p>
								</div>
								<div class="col">
									<li><p>SMA : 2017 - 2020</p></li>
									<p>Methodist - 2</p>
									<li><p>S1  : 2020 - Now</p></li>
									<p>Universitas Pelita Harapan</p>
								</div>
							</div>
						</ul>
					</div>
					<div class="col-6">
						<h2 class="subtitle">Pengalaman Kerja</h2>
						<ol>
							<li><p>Witech Enterprise  : 2020 - Now</p></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="services">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div style="display:flex;">
							<div>
								<img src="../img/icon1.png" alt="Services 1" class="floatleft">
							</div>
							<div>
								<h1>Web Design & User Interface</h1>
								<p>
									Pengalaman mengembangkan program Pembelian tiket pesawat.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div style="display:flex;">
							<div>
								<img src="../img/icon2.png" height="50px" width="150px" alt="Services 1" class="floatleft">
							</div>
							<div>
								<h1>Odoo</h1>
								<p>
									Pengalaman pengembangan module module odoo.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<footer>
		<div class="contacts" id="contacts">
			<div class="container">
				<h1>Contacts...</h1>
				<div class="row">
					<div class="col-md-6" style="padding-left: 0px;">
						<h2>Contact Information</h2>
						<p style="color:white;">
							<span class="grey">You can find me here:</span><br>
							Jln. Sidorukun no. 1A, Medan <br><br>
							<span class="grey">Mobile:</span> 087890782493 <br><br>
							<span class="grey">Monday t Friday from</span> 8.00 am to 9.00 pm WIB <br>
							<a href="">carloskhu202@gmail.com</a><br>
							<a href="">carlos@witech.co.id</a>
						</p>
					</div>
					<div class="col-md-6">
						<h2>Get In Touch</h2>
						<p><span class="grey">You can contact with me using this form.</span></p>
						<form action="#">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your Name" class="form-control input">
								</div>
								<div class="col-md-6" style="padding-bottom: 40px;">
									<input type="text" placeholder="Your Email Adress" class="form-control input">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<textarea name="contactarea" id="contactarea" class="form-control" cols="15" rows="4" placeholder="Tape in your message"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" style="padding-top: 30px">
									<input type="submit" value="Send" class="form-control">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div style="padding-top: 40px;">
				<div class="container-fluid">
					<div class="footer">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
								</div>
								<div class="col-md-3">
									<a href="#header"><p class="text-right" style="color:#ffffff;">Back to top <i class="fa fa-arrow-up" style="color:#ffffff;"></i></p></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
