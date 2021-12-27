<?php
        include "banco.php";
        // print_r($_POST);
        // exit;
        $id         = $_POST["id"];
        $id_curso   = $_POST["curso"];
        $nome       = $_POST["nome"];
        $cpf        = $_POST["cpf"];
        $cpf        = explode("." , $cpf);
        $cpf1       = $cpf[0];
        $cpf2       = $cpf[1];
        $cpf3       = $cpf[2];
        $cpf4       = explode("-" , $cpf3);
        $cpf5       = $cpf4[0];
        $cpf6       = $cpf4[1];
        $cpf        = $cpf1.$cpf2.$cpf5.$cpf6;
        $matricula  = $_POST["matricula"];
        $nascimento = $_POST["nascimento"] ;

        mysql_query("UPDATE alunos SET nome='$nome', cpf='$cpf', matricula='$matricula', nascimento='$nascimento', id_curso='$id_curso' WHERE id='$id'");
    ?>
    <script>
        alert("Registro editado com sucesso!");
        location.href="listagem_alunos.php";
    </script>