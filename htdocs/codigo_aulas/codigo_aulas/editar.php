<?php

	include "banco.php";
	//programar o comando SQL UPDATE
	//Recebendo variáveis via POST
	$id 		= $_POST[id];
	$nome 		= $_POST[nome];
	$cpf 		= $_POST[cpf];
	$matricula 	= $_POST[matricula];
	$nascimento = $_POST[nascimento];
	$id_curso	= $_POST[id_curso];
	
	mysql_query("
	update alunos set nome='$nome',cpf='$cpf',
	matricula='$matricula',nascimento='$nascimento', id_curso='$id_curso'
	where id=$id
	") or die(mysql_error());
?>
<script>
	alert("Registro atualizado com sucesso");	
	location.href="listagem_alunos.php";
</script>	
	





