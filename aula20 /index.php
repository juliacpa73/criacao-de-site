<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $pagina = $_GET('page');
    echo"<title>Página sobre o TK3000 IIe</title>";

    if($pagina =="home" || $pagina == false){
        include 'Home';
    }
    if($pagina == "wiki"){
        include 'Wiki';
    }
    if($pagina == "cadastro"){
        include 'Cadastro';
    }
?>

</body>
</html>
