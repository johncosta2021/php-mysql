<?php
    include "banco.php";
    $periodo = $_POST['nome'];
    $inicio = $_POST['inicio'];
    $termino = $_POST['termino']; 
    $situacao = $_POST['situacao'];
    $id = $_POST['id'];
    mysql_query("insert into periodos (id,data_de_inicio,data_de_termino,situacao) values($id,'$periodo','$inicio','$termino','$situacao')");
?>
<script>
    alert("inserido com sucesso!");
    window.location.href = "periodo.php"
</script>