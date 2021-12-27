<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
        //include "index.php";
        // mysql_connect("localhost","root","");
        // mysql_select_db("tecnico2021") ;
        //  $n1= isset($_GET["numero"]) ? $_GET["numero"]: "error";
        // $x= isset($_GET["escolha"]) ? $_GET["escolha"]: "error";
        $n1= $_GET["numero"];
        $x= $_GET["escolha"];
        
        // echo " seu ano é $n1 ";
        
            if ($n1== "soma" or"Soma" ){
                echo "tabuada do $x <br> <br><br>";
                for ($i=0; $i <10;){
                     $i++;
                     $m=$i+$x;
                    echo "$i + $x = $m<br>";
                //  echo "boa tarde";
                }
            }
            if ($n1== "multiplicação" ){
                echo "tabuada do $x";
                for ($i=0; $i <10;){
                     $i++;
                     $m=$i*5;
                    echo "$i * 5 = $m<br>";
                //  echo "boa tarde";
                }
            }
            if ($n1== "divisão" or "divisao" ){
                echo "tabuada do $x ";
                for ($i=0; $i <10;){
                     $i++;
                     $m=$i/5;
                    echo "$i / 5 = $m<br>";
                //  echo "boa tarde";
                }
            }
            // else{
            //     if ($n1 == ""){
            //     echo "ACHO QUE NÃO ESCOLHEU NENHUMA DAS OPERAÇÕES PERMITIDAS";}
            // }
                
            
        ?>
    </div>
</body>
</html>