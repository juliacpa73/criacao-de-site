<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrado!</h1>
    <p> Olá
        <?php 
            $valor = 0;
            while($valor < 6){
                echo "<p>Olá, <strong>fulano $valor </strong></p>"; 
                $valor += 1;
            }
            echo "Chega, né?";
        ?>
        <?php 
            $nome = $_GET['nome'];
            echo "<p>Cadastrado $nome</p>"; //a variável $nome está pegando com o método $_GET o id do nome digitado pelo usuário no formulário
        ?>
            <?php 
            $email = $_POST['email'];
            echo "<p>Olá, $email</p>"; //método post permite que os dados do formulario não apareçam na url
    ?></p>
</body>
</html>