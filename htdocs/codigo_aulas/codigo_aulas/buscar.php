<?php

include "banco.php";
//programar a listagem usando o comando SQL select
//A função include() tem como objetivo incluir um arquivo dentro do outro quando acessado.

$nome	= htmlentities($_POST["nome"]); // recebendo variável POST

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Meu site Crud!</title>
  </head>
  <body>
  
	<?php
	include "topo.php";
	?>
  
     <div class="container">
    <h1>Resultado da pesquisa</h1>
	<?php
			$sql = "SELECT *,DATE_FORMAT(nascimento,'%d/%m/%Y') AS nasc_novo FROM alunos 
			WHERE nome LIKE \"%$nome%\"
			ORDER BY id ASC";
			$sql = mysql_query($sql);
			echo "<div class='table-responsive'>"; // inicio da table-responsive
			echo "<table class='table table-bordered'>";
			echo "<tr class='bg-dark text-white'>
					<th>nome</th>
					<th>cpf</th>
					<th>matricula</th>
					<th>nascimento</th>
					<th>Operações</th>
				  </tr>";
				  $contador = 0; // inicialização
			while ($linha = mysql_fetch_array($sql)){
				echo "<tr>
						<td>$linha[nome]</td> 
						<td>$linha[cpf]</td> 
						<td>$linha[matricula]</td> 
						<td>$linha[nasc_novo]</td> 
						<td class='text-center'>
						<a href='deletar.php?id=$linha[id]' 
						class='btn btn-danger' 
						onclick=\"return confirm('Deseja realmente excluir?')\">Excluir</a>
						<a href='formulario_editar.php?id=$linha[id]' class='btn btn-warning'>Editar</a>
						</td> 
					  </tr>";
					  $contador = $contador + 1; // incremento
			} 
			echo "</table>";
			echo "</div>"; // fim da table-responsive
			// aprentação da variável
			echo "Sua consulta retornou <strong>$contador</strong> registros";
		?>
		<?php
		include "rodape.php";
		?>
		</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>