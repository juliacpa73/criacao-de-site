<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <p>O resultado da soma é </p>
    <?php
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];

    $soma = $n1 + $n2;
    $subtracao = $n1 - $n2;
    $multiplicacao = $n1 * $n2;
    $divisao = $n1 / $n2;
    $resto = $n1 % $n2;
    $potencia = $n1 ** $n2;
    
    echo "Soma: " . $soma . "<br>";
    echo "Subtração: " . $subtracao . "<br>";
    echo "Multiplicação: " . $multiplicacao . "<br>";
    echo "Divisão: " . $divisao . "<br>";
    echo "Resto: " . $resto . "<br>";
    echo "Potência: " . $potencia;
    ?>
    <br><br>
    <a href="../index.php">
        <input type="submit" value="Voltar">
    </a>
</body>
</html>