<?php 
session_start();
include('conexao.php');

$emaild = $_SESSION['email'];

$garea=$_POST['garea'];
$disciplina=$_POST['disciplina'];
$area=$_POST['area'];
$assunto=$_POST['assunto'];

$resultado1 = mysqli_query ($conexao, "INSERT INTO questionario (garea, disciplina, area, assunto, email_docente)
	VALUES ('$garea', '$disciplina', '$area', '$assunto', '$emaild')");

$resultado3 = mysqli_query ($conexao, "SELECT id FROM questionario WHERE email_docente = '$emaild'");
$linhas = mysqli_fetch_array($resultado3);

$id_questionario = $linhas['id'];

//Inicio Questão 1
$enuciado1 = $_POST['enuciado1'];
$alternativa11=$_POST['alternativa11'];
$alternativa21=$_POST['alternativa21'];
$alternativa31=$_POST['alternativa31'];
$alternativa41=$_POST['alternativa41'];
$alternativa51=$_POST['alternativa51'];
$alternativaCorreta1=$_POST['alternativaCorreta1'];
	
$codigo = rand(100000, 999999);

$resultado2 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado1', '$assunto', '$codigo', '$alternativa11', '$alternativa21', '$alternativa31', '$alternativa41', '$alternativa51', '$alternativaCorreta1')");
// Fim Questão 1

// Inicio Questão 2
$enuciado2 = $_POST['enuciado2'];
$alternativa12=$_POST['alternativa12'];
$alternativa22=$_POST['alternativa22'];
$alternativa32=$_POST['alternativa32'];
$alternativa42=$_POST['alternativa42'];
$alternativa52=$_POST['alternativa52'];
$alternativaCorreta2=$_POST['alternativaCorreta2'];

$resultado4 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado2', '$assunto', '$codigo', '$alternativa12', '$alternativa22', '$alternativa32', '$alternativa42', '$alternativa52', '$alternativaCorreta2')");

//Fim Questão 2

// Inicio Questão 3
$enuciado3 = $_POST['enuciado3'];
$alternativa13=$_POST['alternativa13'];
$alternativa23=$_POST['alternativa23'];
$alternativa33=$_POST['alternativa33'];
$alternativa43=$_POST['alternativa43'];
$alternativa53=$_POST['alternativa53'];
$alternativaCorreta3=$_POST['alternativaCorreta3'];

$resultado5 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado3', '$assunto', '$codigo', '$alternativa13', '$alternativa23', '$alternativa33', '$alternativa43', '$alternativa53', '$alternativaCorreta3')");

//Fim Questão 3

// Inicio Questão 4
$enuciado4 = $_POST['enuciado4'];
$alternativa14=$_POST['alternativa14'];
$alternativa24=$_POST['alternativa24'];
$alternativa34=$_POST['alternativa34'];
$alternativa44=$_POST['alternativa44'];
$alternativa54=$_POST['alternativa54'];
$alternativaCorreta4=$_POST['alternativaCorreta4'];

$resultado6 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado4', '$assunto', '$codigo', '$alternativa14', '$alternativa24', '$alternativa34', '$alternativa44', '$alternativa54', '$alternativaCorreta4')");

//Fim Questão 4

// Inicio Questão 5
$enuciado5 = $_POST['enuciado5'];
$alternativa15=$_POST['alternativa15'];
$alternativa25=$_POST['alternativa25'];
$alternativa35=$_POST['alternativa35'];
$alternativa45=$_POST['alternativa45'];
$alternativa55=$_POST['alternativa55'];
$alternativaCorreta5=$_POST['alternativaCorreta5'];

$resultado7 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado5', '$assunto', '$codigo', '$alternativa15', '$alternativa25', '$alternativa35', '$alternativa45', '$alternativa55', '$alternativaCorreta5')");

//Fim Questão 5

// Inicio Questão 6
$enuciado6 = $_POST['enuciado6'];
$alternativa16=$_POST['alternativa16'];
$alternativa26=$_POST['alternativa26'];
$alternativa36=$_POST['alternativa36'];
$alternativa46=$_POST['alternativa46'];
$alternativa56=$_POST['alternativa56'];
$alternativaCorreta6=$_POST['alternativaCorreta6'];

$resultado8 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado6', '$assunto', '$codigo', '$alternativa16', '$alternativa26', '$alternativa36', '$alternativa46', '$alternativa56', '$alternativaCorreta6')");

//Fim Questão 6

// Inicio Questão 7
$enuciado7 = $_POST['enuciado7'];
$alternativa17=$_POST['alternativa17'];
$alternativa27=$_POST['alternativa27'];
$alternativa37=$_POST['alternativa37'];
$alternativa47=$_POST['alternativa47'];
$alternativa57=$_POST['alternativa57'];
$alternativaCorreta7=$_POST['alternativaCorreta7'];

$resultado9 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado7', '$assunto', '$codigo', '$alternativa17', '$alternativa27', '$alternativa37', '$alternativa47', '$alternativa57', '$alternativaCorreta7')");

//Fim Questão 7

// Inicio Questão 8
$enuciado8 = $_POST['enuciado8'];
$alternativa18=$_POST['alternativa18'];
$alternativa28=$_POST['alternativa28'];
$alternativa38=$_POST['alternativa38'];
$alternativa48=$_POST['alternativa48'];
$alternativa58=$_POST['alternativa58'];
$alternativaCorreta8=$_POST['alternativaCorreta8'];

$resultado10 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado8', '$assunto', '$codigo', '$alternativa18', '$alternativa28', '$alternativa38', '$alternativa48', '$alternativa58', '$alternativaCorreta8')");

//Fim Questão 8

// Inicio Questão 9
$enuciado9 = $_POST['enuciado9'];
$alternativa19=$_POST['alternativa19'];
$alternativa29=$_POST['alternativa29'];
$alternativa39=$_POST['alternativa39'];
$alternativa49=$_POST['alternativa49'];
$alternativa59=$_POST['alternativa59'];
$alternativaCorreta9=$_POST['alternativaCorreta9'];

$resultado11 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado9', '$assunto', '$codigo', '$alternativa19', '$alternativa29', '$alternativa39', '$alternativa49', '$alternativa59', '$alternativaCorreta9')");

//Fim Questão 9

// Inicio Questão 10
$enuciado0 = $_POST['enuciado0'];
$alternativa10=$_POST['alternativa10'];
$alternativa20=$_POST['alternativa20'];
$alternativa30=$_POST['alternativa30'];
$alternativa40=$_POST['alternativa40'];
$alternativa50=$_POST['alternativa50'];
$alternativaCorreta0=$_POST['alternativaCorreta0'];

$resultado12 = mysqli_query ($conexao, "INSERT INTO questao (id_questionario, enuciado, assunto, codigo, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, alternativaCorreta) VALUES ('$id_questionario', '$enuciado0', '$assunto', '$codigo', '$alternativa10', '$alternativa20', '$alternativa30', '$alternativa40', '$alternativa50', '$alternativaCorreta0')");

//Fim Questão 10

  if (mysqli_affected_rows($conexao) != 0 ){  
      echo "
        <script type=\"text/javascript\">
          alert(\"Questionário cadastrado com Sucesso.\");
        </script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOS/milhaoAtualizado/paineldocente.php'>
      ";       
    }else{  
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PROJETOS/milhaoAtualizado/cadastroQuestionario.php'>
        <script type=\"text/javascript\">
          alert(\"Houve um erro ao cadastrar.\");
        </script>
      ";       
}
?>