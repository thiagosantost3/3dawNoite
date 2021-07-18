
<?php
include ("./calculadoraWebPage.php");
if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $op = $_POST["operacao"];
    $resultado = 0;
    $erroMsg = "";
    $printOp = "";

    function validarDados(int $a1, int $b1, string $op) {
        echo "op:$op";
        echo "op:$a1";
        echo "b1: $b1";
        $erroMsg1 = "";
        if (!ctype_digit($a1)) {
            $erroMsg1 = "Parametro a não é numerico";
        }
        if (!ctype_digit($b1)) {
            $erroMsg1 = "Parametro b não é numerico";
        }
        // Falta validar o operador

        if ($op == "divi" and $b1 == 0) {
            $erroMsg1 = "Parametro b não pode ser 0 para divisão";
            echo "op:$op";
            echo "op:$a1";
            echo "b1: $b1";


        }
        return $erroMsg1;
    }
    function somar(int $a1, int $b1)
    {
        return $a1 + $b1;
    }
    function subtrair(int $a1, int $b1)
    {
        return $a1 - $b1;
    }
    function multiplicar(int $a1, int $b1)
    {
        return $a1 * $b1;
    }

    function dividir(int $a1, int $b1)
    {
        return $a1 / $b1;
    }
    $erroMsg = validarDados($a, $b, $op);
    if ($erroMsg == "") {
        if ($op == "soma") {
            $resultado = somar($a, $b);
            $printOp = "+";
        } elseif ($op == "sub") {
            $resultado = subtrair($a, $b);
            $printOp = "-";
        } elseif ($op == "multi") {
            $resultado = multiplicar($a, $b);
            $printOp = "*";
        } elseif ($op == "divi") {
            $resultado = dividir($a, $b);
            $printOp = "/";
        }
    }
}

?>



