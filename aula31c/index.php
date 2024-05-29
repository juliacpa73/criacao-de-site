<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador com incremento/decremento</title>
</head>
<body>
    <?php
    $contador = 0;
    while($contador < 10){
        echo "<p>O valor da variável 'contador' é $contador <br></p>";
        $contador++;
    }
    ?>
</body>
</html>