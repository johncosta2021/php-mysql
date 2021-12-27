<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primeiro</title>
    
</head>
<body>
    <div>
        <?php
        
        include "index_01.php";
        
        $ano=$_GET["x"];
        $idade= 2021-$ano;
        echo"<h1>VAMOS SABER SE PODE VOTAR OU NÃO!</h1> <br>";
        echo   "<h1>IDADE ENTRE 18 E 65 PODE VOTAR!</h1> <br>";
        echo "<h1>MENOR QUE 18 E MAIOR QUE 65 NÃO É OBRIGATÓRIO!</h1> <br>";

        if ($idade >= 18 && $idade <=65){
            echo "<mark>OBRIGATÓRIO VOÇE TEM $idade ANOS!</mark>";
        }
        if($idade == 2021){
            echo"<mark>PROVAVELMENTE VOÇE NÃO COLOCOU SUA IDADE!</mark> <br>";
        }
        else{
            if ($idade < 18){
            echo "<br><mark>NÃO É OBRIGATÓRIO VOÇE TEM $idade ANOS!</mark>";
        }
        if ($idade > 65){
            echo "<mark>SEU VOTO É OPCIONAL VOÇE TEM $idade ANOS!</mark>";
        }
        }
        // echo "<h1>Vamos ver se pode votar ou não!</h1> <br>";
        // echo "<h2>sua idade é $idade </h2> <br>";
        // $t=($idade >= 18 && $idade < 65 ) ? " OBRIGATÓRIO !" : " NÃO OBRIGATÓRIO !";
        // echo "<h3>Dessa forma seu voto é $t </h3>";

        // or die("erro")
        ?>
    </div>
</body>
</html>