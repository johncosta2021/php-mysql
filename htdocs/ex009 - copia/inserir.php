    <?php
        include "banco.php";
        //Aqui vai inserir usando o comando SQL insert
       
        $nome       = $_POST["nome"] ;
        $cpf        = $_POST["cpf"] ;
        $cpf        = explode("." , $cpf);
        $cpf1       = $cpf[0];
        $cpf2       = $cpf[1];
        $cpf3       = $cpf[2];
        $cpf4       = explode("-" , $cpf3);
        $cpf5       = $cpf4[0];
        $cpf6       = $cpf4[1];
        $cpf        = $cpf1.$cpf2.$cpf5.$cpf6;
        $matricula  = $_POST["matricula"] ;
        $nascimento = $_POST["nascimento"] ;
        $id_curso      =$_POST['curso'];
        mysql_query("insert into alunos (nome, cpf, matricula, nascimento,id_curso) values ('$nome', '$cpf', '$matricula', '$nascimento', '$id_curso')");
        mysql_set_charset("utf8");
    ?>
    <script>
        alert("salvo com sucesso!");
        location.href="listagem_alunos.php";
    </script>