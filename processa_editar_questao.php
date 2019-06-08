<?php 
@session_start();
include('conexao.php');

$id_alternativa = $_POST['id_alternativa'];
$enuciado=$_POST['enuciado'];
$id_alternativa=$_POST['id_alternativa'];
$alternativa1=$_POST['alternativa1'];
$alternativa2=$_POST['alternativa2'];
$alternativa3=$_POST['alternativa3'];
$alternativa4=$_POST['alternativa4'];
$alternativa5=$_POST['alternativa5'];
$alternativaCorreta=$_POST['alternativaCorreta'];

$emaild = $_SESSION['email'];

$result1 = mysqli_query($conexao, 
	"UPDATE questao SET
	 enuciado  = '$enuciado',
	  alternativa1 = '$alternativa1',
	  alternativa2 = '$alternativa2', 
	  alternativa3 = '$alternativa3', 
	  alternativa4 = '$alternativa4', 
	  alternativa5 = '$alternativa5',
	  alternativaCorreta = '$alternativaCorreta' 
	  WHERE id = '$id_alternativa'");

   if (mysqli_affected_rows($conexao) != 0 ){  
      echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOS/milhaoAtualizado/editaQuestionario.php'>
        <script type=\"text/javascript\">
          alert(\"Questão editada.\");
        </script>
      ";       
    }else{  
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOS/milhaoAtualizado/editaQuestionario.php'>
        <script type=\"text/javascript\">
          alert(\"Erro ao editar, tente novamente.\");
        </script>
      ";       
}	
	?>