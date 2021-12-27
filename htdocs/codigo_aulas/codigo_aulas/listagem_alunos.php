<?php

include "banco.php";
//programar a listagem usando o comando SQL select
//A função include() tem como objetivo incluir um arquivo dentro do outro quando acessado.
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Meu site Crud!</title>
  </head>
  <body>
	
	<?php
		include "topo.php";
	?>
	
	<!-- fim do navbar -->
  
  
     <div class="container">
	 
	 <h1>Listagem de Alunos!</h1>
	 
	 <a href="formulario_inserir.php" class="btn btn-primary">Cadastrar novo</a>
		<a href="formulario_buscar.php" class="btn btn-primary">Buscar</a>
    
	<?php
			$sql = "SELECT a.id id_aluno, a.nome nome_aluno, cpf, matricula,
			b.id id_curso, b.nome nome_curso,vagas,
			DATE_FORMAT(nascimento,'%d/%m/%Y') AS nasc_novo
			FROM alunos a
			LEFT JOIN cursos b ON a.id_curso=b.id
			ORDER BY a.id ASC";
			$sql = mysql_query($sql);
			echo "<div class='table-responsive'>"; // inicio da table-responsive
			echo "<table class='table table-bordered'>";
			echo "<tr class='bg-dark text-white'>
					<th>nome</th>
					<th>cpf</th>
					<th>matricula</th>
					<th>nascimento</th>
					<th>curso</th>
					<th>Operações</th>
				  </tr>";
			while ($linha = mysql_fetch_array($sql)){
				echo "<tr>
						<td>$linha[nome_aluno]</td> 
						<td>$linha[cpf]</td> 
						<td>$linha[matricula]</td> 
						<td>$linha[nasc_novo]</td>";
						if ($linha[nome_curso] == ""){
							echo "<td> -- SEM CURSO -- </td>";
						}
						else{
							echo "<td>$linha[nome_curso]</td>";
						}
						echo "		
						<td class='text-center'>
						<a href='deletar.php?id=$linha[id_aluno]' 
						class='btn btn-danger' 
						onclick=\"return confirm('Deseja realmente excluir?')\">Excluir</a>
						<a href='formulario_editar.php?id=$linha[id_aluno]' class='btn btn-warning'>Editar</a>
						</td> 
					  </tr>";
			} 
			echo "</table>";
			echo "</div>" // fim da table-responsive
		?>
		<a href="formulario_inserir.php" class="btn btn-primary">Cadastrar novo</a>
		<a href="formulario_buscar.php" class="btn btn-primary">Buscar</a>
		
			
		
		<?php
		include "rodape.php";
		?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>