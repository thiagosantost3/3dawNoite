<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBanco = "JaperiBanco";

$conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
if ($conn->connect_error) {
    die("Conexão com erro: " . $conn->connect_error);
}

function ValidarcodDeBarra($codDeBarra, $conn) {
    $sqlcodDeBarra = "SELECT codDeBarra FROM PRODUTOS WHERE codDeBarra = " . codigoDeBarras; 
    $result = $conn->query($sqlcodDeBarra);

    if ($result->num_rows > 0) {
        return 1;
    }
    return 0;
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $codDeBarra = $_GET["codDeBarra"];
    $nome = $_GET["nome"];
    $fabricante = $_GET["fabricante"];
    $categoria = $_GET["categoria"];
    $tipoDeProduto = $_GET["tipoDeProduto"];
    $precoDeVenda = $_GET["precoDeVenda"];
    $quantEmEstoque = $_GET["quantEmEstoque"];
    $pesoEmGramas = $_GET["pesoEmGramas"];
    $descLinkDaImagem = $_GET["descLinkDaImagem"];
    $dataDaInclusao = $_GET["dataDaInclusao"];
    $Status = $_GET["Status"];

    $erro = 0;

    $erro = ValidarNome($nome);
    $erro += ValidarcodDeBarra($codDeBarra, $conn);


    $sql = "Insert into `produtos` INSERT INTO `produtos` (`Id`, `codDeBarra`, `nome`, `fabricante`, `categoria`, `tipoDeProduto`, `precoDeVenda`, `quantEmEstoque`, `pesoEmGramas`, `descLinkDaImagem`, `dataDaInclusao`, `Status`)
VALUES (null,'$codDeBarra', '$nome', '$fabricante', '$categoria', '$tipoDeProduto','$precoDeVenda','$quantEmEstoque','$pesoEmGramas','$descLinkDaImagem','$dataDaInclusao','$Status')";
    if ($conn->query($sql) == TRUE) {
        echo json_encode("Produto $nome Inserido com Sucesso");
    } else {
        echo json_encode("insert error: ");
    }
    //$result = $conn->query($sql);


}
if ($_SERVER["REQUEST_METHOD"] == "UPDATE") {
    $codDeBarra = $_POST["codDeBarra"];
    $nome = $_GET["nome"];
    $fabricante = $_GET["fabricante"];
    $categoria = $_GET["categoria"];
    $tipoDeProduto = $_GET["tipoDeProduto"];
    $precoDeVenda = $_GET["precoDeVenda"];
    $quantEmEstoque = $_GET["quantEmEstoque"];
    $pesoEmGramas = $_GET["pesoEmGramas"];
    $descLinkDaImagem = $_GET["descLinkDaImagem"];
    $dataDaInclusao = $_GET["dataDaInclusao"];
    $Status = $_GET["Status"];

    $erro = 0;

    $erro = ValidarNome($nome);
    $erro += ValidarcodDeBarra($codDeBarra, $conn);


    $sql = "insert into `produtos` UPDATE `produtos` (`Id`, `codDeBarra`, `nome`, `fabricante`, `categoria`, `tipoDeProduto`, `precoDeVenda`, `quantEmEstoque`, `pesoEmGramas`, `descLinkDaImagem`, `dataDaInclusao`, `Status`)
VALUES (null,'$codDeBarra', '$nome', '$fabricante', '$categoria', '$tipoDeProduto','$precoDeVenda','$quantEmEstoque','$pesoEmGramas','$descLinkDaImagem','$dataDaInclusao','$Status')";
    if ($conn->query($sql) == TRUE) {
        echo json_encode("Produto $nome Inserido com Sucesso");
    } else {
        echo json_encode("insert error: ");
    }
    //$result = $conn->query($sql);


}
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    $codDeBarra = $_POST["codDeBarra"];
    $nome = $_GET["nome"];
    $fabricante = $_GET["fabricante"];
    $categoria = $_GET["categoria"];
    $tipoDeProduto = $_GET["tipoDeProduto"];
    $precoDeVenda = $_GET["precoDeVenda"];
    $quantEmEstoque = $_GET["quantEmEstoque"];
    $pesoEmGramas = $_GET["pesoEmGramas"];
    $descLinkDaImagem = $_GET["descLinkDaImagem"];
    $dataDaInclusao = $_GET["dataDaInclusao"];
    $Status = $_GET["Status"];

    $erro = 0;

    $erro = ValidarNome($nome);
    $erro += ValidarcodDeBarra($codDeBarra, $conn);


    $sql = "insert into `produtos` DELETE `produtos` (`Id`, `codDeBarra`, `nome`, `fabricante`, `categoria`, `tipoDeProduto`, `precoDeVenda`, `quantEmEstoque`, `pesoEmGramas`, `descLinkDaImagem`, `dataDaInclusao`, `Status`)
VALUES (null,'$codDeBarra', '$nome', '$fabricante', '$categoria', '$tipoDeProduto','$precoDeVenda','$quantEmEstoque','$pesoEmGramas','$descLinkDaImagem','$dataDaInclusao','$Status')";
    if ($conn->query($sql) == TRUE) {
        echo json_encode("Produto $nome Inserido com Sucesso");
    } else {
        echo json_encode("insert error: ");
    }
    //$result = $conn->query($sql);
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $codDeBarra = $_GET["codDeBarra"];
        $nome = $_GET["nome"];
        $fabricante = $_GET["fabricante"];
        $categoria = $_GET["categoria"];
        $tipoDeProduto = $_GET["tipoDeProduto"];
        $precoDeVenda = $_GET["precoDeVenda"];
        $quantEmEstoque = $_GET["quantEmEstoque"];
        $pesoEmGramas = $_GET["pesoEmGramas"];
        $descLinkDaImagem = $_GET["descLinkDaImagem"];
        $dataDaInclusao = $_GET["dataDaInclusao"];
        $Status = $_GET["Status"];

        $erro = 0;

        $erro = ValidarNome($nome);
        $erro += ValidarcodDeBarra($codDeBarra, $conn);


        $sql = "insert into `produtos` GET `produtos` (`Id`, `codDeBarra`, `nome`, `fabricante`, `categoria`, `tipoDeProduto`, `precoDeVenda`, `quantEmEstoque`, `pesoEmGramas`, `descLinkDaImagem`, `dataDaInclusao`, `Status`)
VALUES (null,'$codDeBarra', '$nome', '$fabricante', '$categoria', '$tipoDeProduto','$precoDeVenda','$quantEmEstoque','$pesoEmGramas','$descLinkDaImagem','$dataDaInclusao','$Status')";
        if ($conn->query($sql) == TRUE) {
            echo json_encode("Produto $nome Inserido com Sucesso");
        } else {
            echo json_encode("insert error: ");
        }

    }
}
?>