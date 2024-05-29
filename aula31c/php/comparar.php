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

    echo "<p>Primeiro valor: $n1</p>";
    echo "<p>Segundo valor: $n2</p>";
    
    if($n1 == $n2){
        echo "<p>Os valores são IGUAIS!</p>";
    }else{
        echo "<p>Os valores são DIFERENTES!</p>";
    }

    if($n1 === $n2){
        echo "<p>Os valores são IDÊNTICOS!</p>";
    }else{
        echo "<p>Os valores NÃO são IDÊNTICOS!</p>";
    }
    ?>
    <a href="../index.php">
        <input type="submit" value="Voltar">
    </a>
</body>
</html>