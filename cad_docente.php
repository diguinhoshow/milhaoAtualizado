<?php
include('conexao.php');

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$instituicao=$_POST['instituicao'];
$link_curriculo=$_POST['link_curriculo'];
$titularizacao=$_POST['titularizacao'];

	$resultado = mysqli_query ($conexao, "INSERT INTO docentes (nome, cpf, email, senha, instituicao, link_curriculo, titularizacao)
		VALUES ('$nome', '$cpf', '$email', '$senha', '$instituicao', '$link_curriculo', '$titularizacao')");

   if (mysqli_affected_rows($conexao) != 0 ){  
      echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=loginDocente.php'>
        <script type=\"text/javascript\">
          alert(\"Usuário cadastrado com Sucesso.\");
        </script>
      ";       
    }else{  
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastroDocente.php'>
        <script type=\"text/javascript\">
          alert(\"Houve um erro ao cadastrar.\");
        </script>
      ";       
}
?>

