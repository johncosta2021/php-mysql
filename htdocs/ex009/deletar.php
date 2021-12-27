    <!-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> -->
    <?php
        include "banco.php";
        
        if($id= $_GET["id"]){
            mysql_query("delete from alunos where id=$id");
            
        }else{
            if($id1= $_GET["id1"]){
                mysql_query("delete from cursos where id=$id1");
            }
        }
        
    ?>
    <script>
        alert ("excluido com sucesso!");
        <?php
        if($id = $_GET["id"]){
           echo "location.href=\"listagem_alunos.php\"";

        }else{
            if($id1= $_GET["id1"]){
               echo" location.href=\"listagem_cursos.php\" ";
            }
        }
        ?>
        
    </script>