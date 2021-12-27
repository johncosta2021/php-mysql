    <?php
        include "banco.php";
        //Aqui vai inserir usando o comando SQL insert
       
        $marca          = htmlentities($_POST["marca"]) ;
        $preco          = htmlentities($_POST["preco"]) ;
        $processador    = htmlentities($_POST["processador"]) ;
        $hd             = htmlentities($_POST["hd"]) ;
        $ram            = htmlentities($_POST["ram"]) ;
        
        mysql_query("insert into computadores (marca, preco, processador, hd, ram) 
        values ('$marca', '$preco', '$processador', '$hd', '$ram')");
 
    ?>
    <script>
        alert("salvo com sucesso!");
        location.href="listagem_tabela.php";
    </script>