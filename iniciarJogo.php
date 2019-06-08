<!DOCTYPE html>
<html lang="en">
<head>
	<title>Página Inicial - Milhão na Mesa</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Dental Health Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<!-- css files -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all"><!-- slider css -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
	<link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

	<!-- top header -->
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<ul class="d-lg-flex header-w3_pvt">
						<li class="mr-lg-3">
							<span class="fa fa-envelope-open"></span>
							<a href="mailto:info@example.com" class="">contato@bootti.com.br</a>
						</li>
						<li>
							<span class="fa fa-phone"></span>
							<p class="d-inline">Tell (77) 999-276-459</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //top header -->

	<!-- //header -->
	<header class="py-3">
		<div class="container">
			<div id="logo">
				<h1> <a href="index.html"><span class="fa fa-money" aria-hidden="true"></span> Milhão na mesa</a></h1>
			</div>
			<!-- nav -->
			<nav class="d-lg-flex">

				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
				<input type="checkbox" id="drop" />
				<ul class="menu mt-2 ml-auto">
					<li class="active"><a href="index.html">Inicio</a></li>
					<li class=""><a href="ranking.php">Ranking</a></li>
					<li class=""><a href="blog.html">Desenvolvedores</a></li>
				</ul>
				<div class="login-icon ml-2">
					<a class="user" href="areaDiscente.php"> Aluno</a>
				</div>

				<div class="login-icon ml-2">
					<a class="user" href="loginDocente.php"> Professor</a>
				</div>
			</nav>
			<div class="clear"></div>
			<!-- //nav -->
		</div>
	</header>
	<!-- //header -->

	<?php 
	@session_start();
	include('conexao.php');

	$result = mysqli_query($conexao, "SELECT assunto FROM questionario");

	$linhas = mysqli_num_rows($result);

	
	?>
	

	<section class="services py-5">
		<div class="container py-lg-5">
			<h3 class="heading text-center mb-sm-5 mb-4">Lista de Jogos</h3>


			<div class="row offer-grids">
				<?php
				while($linhas = mysqli_fetch_array($result)){
					?>
					<div class="col-lg-4 col-md-6">
						<div class="ser1">
							<div class="bg-layer">

								<form action="jogo.php" method="POST">
									<?php $assunto= $linhas['assunto']; ?>
									<div>
										<input type="text" name="assunto" readonly="true" value="<?php echo $assunto; ?>">
									</div>


									<?php $codigo = rand(1000, 9999);?>
									<p>Código de acesso:  </p>
									<input type="text" name="codigo" readonly="true" value="<?php echo $codigo; ?>">
									<br><br>
									<div class="col-md-12">
										<div class="submit-buttons">
											<button type="submit" style="background-color: blue; color: white">Iniciar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<?php }  ?>

				<div class="col-md-12">
					<div class="submit-buttons">
						<a href="paineldocente.php" class="btn btn-banner1 my-sm-3 mb-3">Voltar</a>
					</div>
				</div>

			</section>

			<!-- copyright -->
			<div class="copyright">
				<div class="container py-4">
					<div class=" text-center">
						<p>© 2019 Dental Health. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
					</div>
				</div>
			</div>
			<!-- //copyright -->

			<!-- move top -->
			<div class="move-top text-right">
				<a href="#home" class="move-top"> 
					<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
				</a>
			</div>
			<!-- move top -->

		</body>
		</html>