<?php
        include "banco.php";
        $id             = htmlentities($_POST['id']);
        $marca          = htmlentities($_POST["marca"]) ;
        $preco          = htmlentities($_POST["preco"]) ;
        $processador    = htmlentities($_POST["processador"]) ;
        $hd             = htmlentities($_POST["hd"]) ;
        $ram            = htmlentities($_POST["ram"]) ;
        mysql_query("update computadores set marca='$marca', preco='$preco', processador='$processador', hd='$hd', ram='$ram' where id='$id'") or die(mysql_error());

    ?>
    <script>
        alert("Registro editado com sucesso!");
        location.href="listagem_tabela.php";
    </script>