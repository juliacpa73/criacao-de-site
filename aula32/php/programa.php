<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>
    <h1>O resultado é </h1>
    <?php
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        $resultadoSoma = 0;

        for ($i = 0; $i < $n2; $i++) {
            $resultadoSoma += $n1;
        }

        echo $n1 . " * " . $n2 . " = " . $resultadoSoma;
    ?>

    <?php   
        $dividendo = $_POST['numero1'];
        $divisor = $_POST['numero2'];
        $quociente = 0;
        $resto = $dividendo;

        if ($divisor != 0) {
            while($resto >= $divisor){
                $resto = $resto - $divisor;
                $quociente++;
            }
            echo $dividendo . " / " . $divisor . " = " . $quociente;
            echo " resto " . $resto;
        } else {
            echo "Divisão por zero não é permitida.";
        }
    ?>

</body>
</html>
