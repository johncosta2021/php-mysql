    <!-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> -->
    <?php
        include "banco.php";
        
        //Aqui vai usar o comando SQL DELETE para deletar as informações
        $id = $_GET["id"];
        mysql_query("delete from alunos where id=$id");


    ?>
    <script>
        alert ("excluido com sucesso!");
        location.href="listagem_alunos.php";
    </script>