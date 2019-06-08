
<?php
include_once('conexao.php');
$nome = $_POST['nome'];
$instituicao = $_POST['instituicao'];
$codigo_acesso = $_POST['codigo_acesso'];

$resultado = mysqli_query($conexao, "SELECT id_questionario, enuciado, assunto, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5 FROM
	questao WHERE codigo = '$codigo_acesso'");
$linhas = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Milhão na mesa</title>
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
					
				</ul>
				<div class="login-icon ml-2">
					<a class="user" href="areaDiscente.php"> Sair</a>
				</div>

				
			</nav>
			<div class="clear"></div>
			<!-- //nav -->
		</div>
	</header>
	<!-- //header -->

	<?php $num=0 ?>
	<br>
	<div class="container" style="margin-top: 10%">
		<div style="background-color: white; width: 40%; margin-left: 27%">
			<?php while($linhas = mysqli_fetch_array($resultado)){?>
				<table class="table table-borderless" style="width: 100%">
					<thead>
						<tr>
							<th scope="col" style="text-align: center;">Questão</th>
							<th scope="col" style="text-align: center;">Resposta</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td><?php echo$linhas['enuciado']; ?> </td>
						</tr>
						<tr>
							<td><input type="number" name="alter1" id="num1" min="0" max="5" value="0" onblur="calcular()"></td>
							<td>A- <?php echo$linhas['alternativa1'];?> </td> 
						</tr>
						<tr>
							<td><input type="number" name="alter2" id="num2" min="0" max="5" value="0" onblur="calcular()"></td>
							<td>B- <?php echo$linhas['alternativa2']; ?></td>
						</tr>
						<tr>
							<td><input type="number" name="alter3" id="num3" min="0" max="5" value="0" onblur="calcular()"></td>
							<td>C- <?php echo$linhas['alternativa3']; ?></td>
						</tr>
						<tr>
							<td><input type="number" name="alter4" id="num4" min="0" max="5" value="0" onblur="calcular()"></td>
							<td>D- <?php echo$linhas['alternativa4']; ?></td>
						</tr>
						<tr>
							<td><input type="number" name="alter5" id="num5" min="0" max="5" value="0" onblur="calcular()"></td>
							<td>E- <?php echo$linhas['alternativa5']; ?></td>
						</tr> 
						<tr>
							<td><span id="resultado"></span></td>
							<td><a href="#" ><span id="resultado2" onclick="desativar()"></span></a></td>
							<!-- "
							<form name='result'>
								<td><input type="button" name="" class="btn btn-success" style="margin-left: 70%" ></td>
							</form>
							<td><input type="button" name="teste" disabled="active"> Teste input </td> -->
						</tr>
					</tbody>
					
				</table>  

				<script>

					function calcular() {
						var num1 = Number(document.getElementById("num1").value);
						var num2 = Number(document.getElementById("num2").value);
						var num3 = Number(document.getElementById("num3").value);
						var num4 = Number(document.getElementById("num4").value);
						var num5 = Number(document.getElementById("num5").value);


						var elemResult = document.getElementById("resultado");
						//var elemResult2 = document.getElementById("resultado2");

						var soma = num1+num2+num3+num4+num5;

						//var total +=elemResult2;

						if (soma == 5) {
							elemResult.textContent = "O resultado é " + String(soma) + ".";
							//elemResult2.textContent ="1";

						}else{ // IE
							elemResult.innerText = "Total de pontos deve ser igual a CINCO  Total: " + String(soma) + ".";
							//elemResult2.textContent ="0";
						}
					}



					function desativar(){
						var elemDesativar = document.getElementById("desativar");


						elemDesativar.textContent ="disa";
					}

				</script>

			<?php } ?>

		</div>
	</div>

	<?php 
	if($linhas == ""){
		?> 
		<h2 class="heading text-center mb-sm-5 mb-4"><br>CÓDIGO INVÁLIDO </h2>
		<a href="areaDiscente.php" class="btn btn-banner1 my-sm-3 mb-3"> Voltar </a>
		<?php 
	}
	?>
