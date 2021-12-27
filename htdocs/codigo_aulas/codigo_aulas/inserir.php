<?php
	include "banco.php";
	//programar o comando SQL Insert
	//print_r($_POST);//variável global POST que traz tudo que vem via POST
	//exit;
	//htmlentities evita entrada de caracteres especiais e ataques
	$nome			= htmlentities($_POST["nome"]);
	$cpf			= htmlentities($_POST["cpf"]);
	/*$cpf			= explode(".",$cpf); //999.999.999-99
	$cpf1			= $cpf[0];
	$cpf2			= $cpf[1];
	$cpf3			= $cpf[2];
	$cpf3			= explode("-",$cpf3);
	$cpf31			= $cpf3[0];
	$cpf32			= $cpf3[1];
	$cpf			= $cpf1.$cpf2.$cpf31.$cpf32;*/	
	$matricula		= htmlentities($_POST["matricula"]);
	$nascimento		= htmlentities($_POST["nascimento"]);
	$id_curso		= htmlentities($_POST["id_curso"]);
	//executando consulta de inserção
	mysql_query("insert into alunos (nome,cpf,matricula,nascimento,id_curso) values ('$nome','$cpf','$matricula','$nascimento','$id_curso')");			
?>	
<script>
	alert("Registro inserido com sucesso");
	location.href="listagem_alunos.php";
</script>