<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor = $_GET["v"];
    $raiz = sqrt($valor);
    echo "a raiz quadrada de $valor é ".number_format($raiz,2);
    ?>
</body>
</html>