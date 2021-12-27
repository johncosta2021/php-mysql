<?php

	include "banco.php";
	//programar o comando SQL DELETE
	
	//print_r($_GET);
	$id 	= $_GET[id]; // parametros oriundos da URL
		
	mysql_query("delete from alunos where id=$id") or die(mysql_error());
?>
<script>
	alert("Registro excluído com sucesso");
	location.href="listagem_alunos.php";
</script>