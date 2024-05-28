<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
        $numero = $_POST['numero'];
        echo '<h1>Tabuada do número ' . $numero . '</h1>';

        for($i = 0; $i < 11; $i++){
            echo $numero . ' x ' . $i . ' = ' . $numero * $i . '<br>';
        }
    ?>
    <br>
    <a href="../index.php">
        <input type="submit" value="Outra tabuada">
    </a>
</body>
</html>