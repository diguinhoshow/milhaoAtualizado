<?php
  @session_start();
  include('conexao.php');

  $id = $_GET['id'];

  $resultado = mysqli_query($conexao, "SELECT id, enuciado, assunto, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5 FROM questao WHERE id = '$id'");
  $linhas = mysqli_fetch_array($resultado);

?>
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
      <h2 class="heading text-center mb-sm-5 mb-4">Editar questionário </h2>  
      <div class="row agileinfo_mail_grids">
        <div class="col-lg-8 agileinfo_mail_grid_right">
          <form action="processa_editar_questao.php" method="post">
            <div class="row">
              

              <div class="form-control">

                <textarea name="enuciado" placeholder="Questão 1" class="form-control" required="">
                  <?php echo $linhas['enuciado']; ?>
                </textarea>

                <input type="text" name="alternativa1" class="form-control" placeholder="Alternativa 1" required="" value="<?php echo $linhas['alternativa1']; ?>"><br>
                <input type="text" name="alternativa2" class="form-control" placeholder="Alternativa 2" required="" value="<?php echo $linhas['alternativa2']; ?>"><br>
                <input type="text" name="alternativa3" class="form-control" placeholder="Alternativa 3" required="" value="<?php echo $linhas['alternativa3']; ?>"><br>
                <input type="text" name="alternativa4" class="form-control" placeholder="Alternativa 4" required="" value="<?php echo $linhas['alternativa4']; ?>"><br>
                <input type="text" name="alternativa5" class="form-control" placeholder="Alternativa 5" required="" value="<?php echo $linhas['alternativa5']; ?>"><br>

                <select name="alternativaCorreta" required class="form-control">
                  <option value="">Selecione a alternativa correta</option>
                  <option value="alternativaCorreta1">Alternativa 1</option>
                  <option value="alternativaCorreta2">Alternativa 2</option>
                  <option value="alternativaCorreta3">Alternativa 3</option>
                  <option value="alternativaCorreta4">Alternativa 4</option>
                  <option value="alternativaCorreta5">Alternativa 5</option>
                </select>
              </div>  
              <input type="hidden" name="id_alternativa" value="<?php echo $linhas['id'];?>">
              <div class="col-md-12">

                <div class="submit-buttons">
                  <button type="submit" class="btn">Editar</button>
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