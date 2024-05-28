<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhe o número</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <?php
        echo "<style>";
        include "css/style.css";
        echo "</style>"
    ?>
</head>
<body>
    <h1>Adivinhe o número</h1>
    <form action="php/resposta.php" method="post">
        <div class="box">
            <?php 
            $adivinha = $_POST['anterior'];
            if(!$adivinha){
                $adivinha = rand(1,100);
            }
            echo '<input type="number" name="alatorio" class="escondido" value="';
            echo $adivinha;
            echo '">';
            ?>
        </div>
        <label for="numero">Adivinhe:</label>
        <input type="number" id="numero" name="digitado" placeholder="Digite um número:" autofocus required>
        <input type="submit" value="Responder">
    </form>
</body>
</html>