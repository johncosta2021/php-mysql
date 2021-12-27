    <?php
        include "banco.php";
        //Aqui vai inserir usando o comando SQL insert
        //  print_r($_POST);
        //  exit;
        $nome       = $_POST["nome"] ;
        $carga      = $_POST["carga"];
        $professor     = $_POST["professor"];
        $codigo     = $_POST["codigo"] ;
        $id_periodo =$_POST['curso'];
        mysql_query("insert into disciplinas (nome, carga,professor,codigo,id_periodo) values ('$nome', '$carga', '$professor', '$codigo','$id_periodo')");
    
    ?>
    <script>
        alert("salvo com sucesso!");
        location.href="disciplinas.php";
    </script>