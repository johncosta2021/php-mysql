<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo</title>
    <style>
        div{
            margin: 0 auto;
            background-color: aqua; 
            width: 600px;
            padding: 30px;
            height: 500px;
        } 
        body{
        background-color: black;
        }
    </style>
</head>
<body>
    <?php
    // conexão com o banco

     $conexao= mysql_connect("localhost","root","");
     mysql_select_db("tecnico2021", $conexao);
    
    ?>
</body>
</html>