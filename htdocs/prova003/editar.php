<?php
        include "banco.php";
        // print_r($_POST);
        // exit;
        $id      = $_POST["id"];
        $nome    = $_POST["nome"];
        $carga   = $_POST["carga"];
        $professor  = $_POST["professor"];
        $codigo  = $_POST["codigo"];
        $periodo = $_POST["periodo"];

        mysql_query("UPDATE disciplinas SET nome='$nome', carga='$carga',professor='$professor', codigo='$codigo', id_periodo='$periodo' WHERE id='$id'");
    ?>
    <script>
        alert("Registro editado com sucesso!");
        location.href="disciplinas.php";
    </script>