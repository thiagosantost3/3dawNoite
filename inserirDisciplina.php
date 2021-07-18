<?php

$servidor = "localhost";
$dbname = "Japeri Banco";
$dbusuario = "root";
$dbsenha = "";

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);


if (!$conn){
    die("Conexao falhou: " . mysqli_connect_errno());
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h3>Inserir DB</h3>
    <form action="config.php" method="post">
    	<input type="submit" name="op" value="inserir Disciplina">
    	<br>
        <?php

require_once '';
$filename = '';

if (isset($_POST['inserir'])){
    
    $arquivo ='';
    $objeto = fopen($arquivo,'r');
    $linhas = array();
    while (($dados = fgetcsv($objeto,1000,";"))!= FALSE){
        
      $nome = utf8_encode($dados[0]);
       $iddadisciplina = utf8_encode($dados[1]);
       $periodo = utf8_encode($dados[2]);
       $idPreRequisito = utf8_encode($dados[3]);
       $créditos = utf8_encode($dados[4]);
        
       echo $nome;
       $sql = $sql = "INSERT INTO `disciplinas`(`nome`, `id da disciplina`, `periodo`, `idPreRequisito`, `créditos`) VALUES ('$nome','$iddadisciplina','$periodo','$idPreRequisito','$créditos')";
    }   
    
    
}
if(mysql_query($connect,$sql)):
    header('Location: visualizarUsuario.php?SalvandoNaTabela');     
else :
    header('Location: visualizarUsuario.php?ERRO');
endif;
?>
 </body>
</html>
