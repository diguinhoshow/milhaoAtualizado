<?php 
session_start();
include('conexao.php');

$alter1 = $_POST['alter1'];
$alter2 = $_POST['alter2'];
$alter3 = $_POST['alter3'];
$alter4 = $_POST['alter4'];
$alter5 = $_POST['alter5'];


$soma = $alter1+$alter2+$alter3+$alter4+$alter5;

if($soma == 5){
  echo "
  <script type=\"text/javascript\">
  alert(\"Questionário cadastrado com Sucesso.\");
  </script>
  <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOS/milhaoAtualizado/proximaQuestao.php'>
  ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOS/milhaoAtualizado/sala.php'>
    <script type=\"text/javascript\">
    alert(\"Você não utilizou os pontos corretamente\");
    </script>
    ";     
}
