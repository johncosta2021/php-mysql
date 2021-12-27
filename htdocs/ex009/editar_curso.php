<?php
    include "banco.php";
    $nome = $_POST['nome'];
    $vagas = $_POST['vagas'];
    $id = $_POST['id'];
    mysql_query("UPDATE cursos SET nome='$nome', vagas='$vagas' WHERE id='$id'");
?>
<script>
    alert("curso alterado com sucesso!");
    window.location.href = "listagem_cursos.php"
</script>