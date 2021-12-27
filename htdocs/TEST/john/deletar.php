<?php

	include "banco.php";
	//Comando SQL DELETE
	
	$id 	=($_GET['id']); //Parametros oriundos da url
	
	mysql_query("delete from alunos where id='$id'") or die (mysql_error());
?>

<script>
	alert ("Registro excluído com sucesso");
	location.href="listagem_alunos.php";
</script>