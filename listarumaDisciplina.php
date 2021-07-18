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
    <h3>Leitura DB</h3>
    <form action="config.php" method="post">
    	<input type="submit" name="op" value="Listar uma Disciplina">
    	<br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        	$sql = "SELECT * FROM disciplinas";
                $result = $conn->query($sql);
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>id da disciplina</th><th>nome</th><th>periodo</th><th>idPreRequisito</th><th>créditos</th>";
                while ($linha = $result->fetch_assoc()){
                	echo "<tr>";
                	echo "<td>" . $linha["id da disciplina"] . "</td>";
                	echo "<br>";
                	echo "<td>" . $linha["nome"] . "</td>";
                	echo "<br>";
                	echo "<td>" . $linha["periodo"] . "</td>";
                	echo "<br>";
                	echo "<td>" . $linha["idPreRequisito"] . "</td>";
                	echo "<br>";
                	echo "<td>" . $linha["créditos"] . "</td>";
                	echo "<br>";
                	
               } 
               echo "/table";	
        
        }
        ?>
    </body>
</html>
