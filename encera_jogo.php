<?php 
session_start();
include('conexao.php');

$codigor = rand(100000, 999999);
$assunto=$_POST['assunto'];

$resultado1 = mysqli_query($conexao, "UPDATE questao SET codigo = '$codigor' WHERE assunto = '$assunto'");


if (mysqli_affected_rows($conexao) != 0 ){  
  echo "
  <script type=\"text/javascript\">
  alert(\"Jogo finalizado com Sucesso.\");
  </script>
  <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOS/milhaoAtualizado/paineldocente.php'>
  ";       
}else{  
  echo "
  <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOSmilhaoAtualizado/cadastroQuestionario.php'>
  <script type=\"text/javascript\">
  alert(\"Houve um erro ao finalizar jogo.\");
  </script>
  ";       
}
?>