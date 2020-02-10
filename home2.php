<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vayalena | Home</title>
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/scrolling-nav.css" rel="stylesheet">
    <style>
        .bg-primary{
                background: url('http://localhost/vaya_codeIgniter/img/located.jpg') no-repeat;
                background-size: cover;
        }
        .fixed-top{
                border-bottom:
                        #002752 3px solid;
                opacity: 0.8;
                background: whitesmoke;
        }
        .navbar-toggler .navbar-toggler-icon {
                border-color: rgb(255,102,203);
        }
    </style>
</head>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url() ?>img/vaya.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
		
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">About Us</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about"> Sign Up </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>User/go">Sign In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-primary text-white" style="min-height: 500px">
	<div class="container text-center">
		<h1>Welcome to Vayalena</h1>
		<p class="lead">
			Are your kids in need of transport to school?
			Look no further, because<strong> Vayalena </strong>
			is here to help you find the suitable driver online, anywhere you are using your smart device.
			Sign up today and view a list of available drivers.
		</p>
	</div>
</header>

<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 mx-auto">
				<div class="p-5">
					<h2>Sign Up</h2>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section id="services" class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="p-5">
				<h2>About us</h2>
				<p class="lead">
					<strong>Vayalena</strong>
					is an online platform aimed at providing a new way of finding for transport to school for your
					kids without having to ask around, especially at times of emergency.
					Vayalena also accommodates those who need transport to work on a daily, looking for people(vehicle owners)
					that are going to the same destination whom they can travel with.
					The primary object of this initiative is to provide a technology-driven online platform
					that makes of a more convenient way to find for transport at the comfort of your own
					home or where ever you are using your smart device without having to go asking around.
				</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="p-5">
				<h2>Contact us</h2>
				<p class="lead">Some content here here.....</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Vayalena 2019</p>
	</div>
</footer>

<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/scrolling-nav.js"></script><script type="text/javascript">
      /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
      (function(d, m){
        var kommunicateSettings = {"appId":"1ee0b5c30db547113bc587b1b19c8beb9","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
      })(document, window.kommunicate || {});
  </script>
</body>
</html>
