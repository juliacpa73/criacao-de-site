<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhou?</title>
</head>
<body>
    <h1>Adivinhou?</h1>
        <?php
            $adivinha = $_POST['aleatorio'];
            $numero = $_POST['digitado'];

            echo "\n<p>O valor digitado foi $numero</p>\n";

            if($numero == $adivinha) {
                echo "<h1>Acertou!</h1>\n";
            } elseif ($numero < $adivinha) {
                echo "<h1>Errou, o número é menor</h1>\n";
            } else {
                echo "<h1>Errou, o número é maior</h1>\n";
            }
        ?>
    <form action="../index.php" method="post>
        <?php
            $adivinha = $_POST['aleatorio'];
            $numero = $_POST['digitado'];

            if($numero != $adivinha) {
                echo '<input type="number" name="anterior" class="escondido" value=">';
                echo $adivinha;
                echo '">';
            }
          
        ?>
    <input type="submit" value="Tente de novo">
    </form>
</body>
</html>