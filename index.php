<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> Vayalena | Sign In </title>
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/scrolling-nav.css" rel="stylesheet">
	<style>
		.bg-primary{
			background: url('img/located.jpg') no-repeat;
                    background-size: cover;
		}
		.fixed-top{
			border-bottom: #002752 3px solid;
			opacity: 0.8;
			background: whitesmoke;
		}
		.navbar-toggler .navbar-toggler-icon {
			border-color: rgb(255,102,203);
		}
		.form-signin .btn-block{
			background: transparent;
		}
		.form-signin .btn-block:hover{
			background: #5a6268;
		}
		.card{
			opacity: 0.8;
		}
		h5, .h5 {
			font-size: 1.25rem;
			color: black;
		}
	</style>
</head>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="img/vaya.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="index.html">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-primary text-white">
	<div class="container text-center">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin" style="margin-top: -40px" >
				<div class="card-body">
                                    <h5 class="card-title text-center" style="display: block">Sign In</h5> <!-- Heading -->
                                    <div class="form-signin">
                                        <div class="form-label-group">
                                            <label style="color: black; float: left">Cell number</label>
                                            <input type="text" name="usercell"  id="inputEmail" class="form-control" placeholder="0715440011" required autofocus>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-label-group">
                                                <label style="color: black; float: left">Password</label>
                                                <input type="password" name="pass" id="pass" class="form-control"  required >
                                                <label>Password</label>
                                        </div>
                                        <button class="btn btn-lg btn-primary btn-block text-uppercase text-dark" type="submit" >Sign in</button>
                                    </div>
				</div>
			</div>
		</div>
	</div>
</header>

<section id="services" class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="p-5">
					<h2>About us</h2>
					<p class="lead">
						<strong>Vayalena</strong>
						is an online platform aimed at providing a new way of looking for transport for your
						kids to school without having to ask around.
						Vayalena also accommodates those who need transport to work, or perhaps people(vehicle owners)
						going the same direction whom they can travel with.
						The primary object of this initiative is to provide a technology-driven platform
						that makes of a more convenient way to look for transport at the comfort of your own
						home or where ever you are without having to go asking around.
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

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>

</body>
</html>
