<?php
    include "banco.php";
    // print_r($_POST);
    // exit;
    $nome = $_POST['nome'];
    $inicio = $_POST['inicio'];
    $termino = $_POST['termino'];
    $situacao = $_POST['situacao'];
    $id = $_POST['id'];
    mysql_query("UPDATE periodos SET nome='$nome', data_de_inicio='$inicio', data_de_termino='$termino', situacao='$situacao' WHERE id='$id'");
?>
<script>
    alert("Alterado com sucesso!");
    window.location.href = "periodo.php"
</script>