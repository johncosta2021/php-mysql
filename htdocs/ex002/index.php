<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primeiro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
            <form action="index_01.php" method="get">
                <h2>TABUADA 1 a 10</h2>
                <h3>trabalhamos com 4 operações</h3>
                <ul>
                    <li>Soma</li>
                    <li>Multiplicação</li>
                    <li>Subtração</li>
                    <li>Divisão</li>
                </ul>
                <h3></h3>
                escolhar um operação;
                <input type="text" name="numero" id="" placeholder="Digite aqui..." required>
                <br><br>
                Escolha a tabuada 1 a 10;
                <input type="number" name="escolha" placeholder="tabuada de 1 a 10" required>
                <br><br>
                <input type="submit">
            </form>
        <?php
        // conexão com o banco
        // mysql_connect("localhost","root","");
        // mysql_select_db("tecnico2021") ;
        
        // or die("erro no MySql")
        //include "index_01.php"
        ?>
    </div>
</body>
</html>