<?php 
include('conexao.php');

$id=$_GET['id'];
echo $id;

$resultado = mysqli_query($conexao, "DELETE FROM questao WHERE id_questionario = '$id'");

$resultado2 = mysqli_query($conexao, "DELETE FROM questionario WHERE id = '$id'");


   if (mysqli_affected_rows($conexao) != 0 ){  
      echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOS/milhaoAtualizado/paineldocente.php'>
        <script type=\"text/javascript\">
          alert(\"Questionario deletado com Sucesso.\");
        </script>
      ";       
    }else{  
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOS/milhaoAtualizado/editaQuestionario.php'>
        <script type=\"text/javascript\">
          alert(\"Erro ao deletar, Tente novamente.\");
        </script>
      ";       
}
?>