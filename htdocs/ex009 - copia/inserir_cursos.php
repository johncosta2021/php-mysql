<?php
    include "banco.php";
    $curso = $_POST['nome'];
    $vagas = $_POST['vagas'];
    // $id = $_POST['id'];
    mysql_query("insert into cursos (nome,vagas) values('$curso','$vagas')");
?>
<script>
    alert("curso inserido com sucesso!");
    window.location.href = "listagem_cursos.php"
</script>