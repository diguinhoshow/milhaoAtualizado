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

	<!-- contact -->
	<section class="mail pt-lg-5 pt-4">
		<div class="container pt-lg-5">
			<h2 class="heading text-center mb-sm-5 mb-4">Cadastro de questionário </h2>
			<div class="row agileinfo_mail_grids">
				<div class="col-lg-8 agileinfo_mail_grid_right">
					<form action="cadastro_questionario.php" method="post">
						<div class="row">
							<div class="col-md-6 wthree_contact_left_grid pr-md-0">
								<div class="form-group">

									<select name="garea" class="form-control">
										<option value="">Grande Área</option>
										<option value="exatas">Exatas</option>
										<option value="humanas">Humanas</option>
										<option value="saude">Saúde</option>
									</select>

								</div>
								<div class="form-group">
									<input type="text" name="disciplina" class="form-control" placeholder="Disciplina" required="">
								</div>
							</div>
							<div class="col-md-6 wthree_contact_left_grid">
								<div class="form-group">

									<select name="area" class="form-control">
										<option value="">Área</option>
										<option value="adm">Administração</option>
										<option value="agronomia">Agronomia</option>
										<option value="ads">Análise e Des. de Sistemas</option>
										<option value="au">Arquitetura e Urbanismo</option>
										<option value="artes">Artes</option>
										<option value="ciencias">Ciências</option>
										<option value="computacao">Computação</option>
										<option value="contabilidade">Contabilidade</option>
										<option value="direito">Direito</option>
										<option value="economia">Economia</option>
										<option value="engenharia">Engenharia</option>
										<option value="gestao">Gestão</option>
										<option value="medicina">Medicina</option>
										<option value="odontologia">Odontologia</option>
									</select>

								</div>
								<div class="form-group">
									<input type="text" name="assunto" class="form-control" placeholder="Assunto" required="">
								</div>
							</div>
															<!-- Questão 1 -->

							<div class="form-control">

								<textarea name="enuciado1" placeholder="Questão 1" class="form-control" required=""></textarea>

								<input type="text" name="alternativa11" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa21" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa31" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa41" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa51" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta1" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta11">Alternativa 1</option>
									<option value="alternativaCorreta21">Alternativa 2</option>
									<option value="alternativaCorreta31">Alternativa 3</option>
									<option value="alternativaCorreta41">Alternativa 4</option>
									<option value="alternativaCorreta51">Alternativa 5</option>
								</select>
							</div>
								<!--Fim Questão 1 
															Inicio Questão 2 -->
							<div class="form-control">

								<textarea name="enuciado2" placeholder="Questão 2" class="form-control" required=""></textarea>

								<input type="text" name="alternativa12" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa22" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa32" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa42" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa52" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta2" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta12">Alternativa 1</option>
									<option value="alternativaCorreta22">Alternativa 2</option>
									<option value="alternativaCorreta32">Alternativa 3</option>
									<option value="alternativaCorreta42">Alternativa 4</option>
									<option value="alternativaCorreta52">Alternativa 5</option>
								</select>
							</div>

								<!--Fim Questão 2 
															Inicio Questão 3 -->
							<div class="form-control">

								<textarea name="enuciado3" placeholder="Questão 3" class="form-control" required=""></textarea>

								<input type="text" name="alternativa13" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa23" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa33" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa43" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa53" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta3" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta12">Alternativa 1</option>
									<option value="alternativaCorreta22">Alternativa 2</option>
									<option value="alternativaCorreta32">Alternativa 3</option>
									<option value="alternativaCorreta42">Alternativa 4</option>
									<option value="alternativaCorreta52">Alternativa 5</option>
								</select>
							</div>

								<!--Fim Questão 3 
															Inicio Questão 4 -->
							<div class="form-control">

								<textarea name="enuciado4" placeholder="Questão 4" class="form-control" required=""></textarea>

								<input type="text" name="alternativa14" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa24" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa34" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa44" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa54" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta4" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta14">Alternativa 1</option>
									<option value="alternativaCorreta24">Alternativa 2</option>
									<option value="alternativaCorreta34">Alternativa 3</option>
									<option value="alternativaCorreta44">Alternativa 4</option>
									<option value="alternativaCorreta54">Alternativa 5</option>
								</select>
							</div>	

								<!--Fim Questão 4 
															Inicio Questão 5 -->
							<div class="form-control">

								<textarea name="enuciado5" placeholder="Questão 5" class="form-control" required=""></textarea>

								<input type="text" name="alternativa15" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa25" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa35" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa45" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa55" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta5" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta15">Alternativa 1</option>
									<option value="alternativaCorreta25">Alternativa 2</option>
									<option value="alternativaCorreta35">Alternativa 3</option>
									<option value="alternativaCorreta45">Alternativa 4</option>
									<option value="alternativaCorreta55">Alternativa 5</option>
								</select>
							</div>		
								<!--Fim Questão 5 
															Inicio Questão 6 -->
							<div class="form-control">

								<textarea name="enuciado6" placeholder="Questão 6" class="form-control" required=""></textarea>

								<input type="text" name="alternativa16" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa26" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa36" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa46" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa56" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta6" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta16">Alternativa 1</option>
									<option value="alternativaCorreta26">Alternativa 2</option>
									<option value="alternativaCorreta36">Alternativa 3</option>
									<option value="alternativaCorreta46">Alternativa 4</option>
									<option value="alternativaCorreta56">Alternativa 5</option>
								</select>
							</div>

								<!--Fim Questão 6 
															Inicio Questão 7 -->
							<div class="form-control">

								<textarea name="enuciado7" placeholder="Questão 7" class="form-control" required=""></textarea>

								<input type="text" name="alternativa17" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa27" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa37" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa47" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa57" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta7" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta17">Alternativa 1</option>
									<option value="alternativaCorreta27">Alternativa 2</option>
									<option value="alternativaCorreta37">Alternativa 3</option>
									<option value="alternativaCorreta47">Alternativa 4</option>
									<option value="alternativaCorreta57">Alternativa 5</option>
								</select>
							</div>	

								<!--Fim Questão 7 
															Inicio Questão 8 -->
							<div class="form-control">

								<textarea name="enuciado8" placeholder="Questão 8" class="form-control" required=""></textarea>

								<input type="text" name="alternativa18" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa28" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa38" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa48" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa58" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta8" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta18">Alternativa 1</option>
									<option value="alternativaCorreta28">Alternativa 2</option>
									<option value="alternativaCorreta38">Alternativa 3</option>
									<option value="alternativaCorreta48">Alternativa 4</option>
									<option value="alternativaCorreta58">Alternativa 5</option>
								</select>
							</div>	

								<!--Fim Questão 8
															Inicio Questão 9 -->
							<div class="form-control">

								<textarea name="enuciado9" placeholder="Questão 9" class="form-control" required=""></textarea>

								<input type="text" name="alternativa19" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa29" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa39" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa49" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa59" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta9" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta19">Alternativa 1</option>
									<option value="alternativaCorreta29">Alternativa 2</option>
									<option value="alternativaCorreta39">Alternativa 3</option>
									<option value="alternativaCorreta49">Alternativa 4</option>
									<option value="alternativaCorreta59">Alternativa 5</option>
								</select>
							</div>

								<!--Fim Questão 9
															Inicio Questão 10 -->
							<div class="form-control">

								<textarea name="enuciado0" placeholder="Questão 10" class="form-control" required=""></textarea>

								<input type="text" name="alternativa10" class="form-control" placeholder="Alternativa 1" required=""><br>
								<input type="text" name="alternativa20" class="form-control" placeholder="Alternativa 2" required=""><br>
								<input type="text" name="alternativa30" class="form-control" placeholder="Alternativa 3" required=""><br>
								<input type="text" name="alternativa40" class="form-control" placeholder="Alternativa 4" required=""><br>
								<input type="text" name="alternativa50" class="form-control" placeholder="Alternativa 5" required=""><br>

								<select name="alternativaCorreta0" class="form-control">
									<option value="">Selecione a alternativa correta</option>
									<option value="alternativaCorreta10">Alternativa 1</option>
									<option value="alternativaCorreta20">Alternativa 2</option>
									<option value="alternativaCorreta30">Alternativa 3</option>
									<option value="alternativaCorreta40">Alternativa 4</option>
									<option value="alternativaCorreta50">Alternativa 5</option>
								</select>
							</div>	

							<div class="col-md-12">
								<div class="submit-buttons">
									<button type="submit" class="btn">Cadastrar</button>
									<a href="paineldocente.php" class="btn btn-banner1 my-sm-3 mb-3">Cancelar</a>
								</div>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>

	</section>
	<!-- //contact -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container py-4">
			<div class=" text-center">
				<p>© 2019 Um milhão na mesa. All Rights Reserved | Design by 
					<a href="www.bootti.com.br"> Bootti</a> </p>
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