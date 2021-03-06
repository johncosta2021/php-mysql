<?php

	include "banco.php";
	//Listagem com o comando SQL Insert
?>
<!doctype html>
<html lang="br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
	<div class="container">
    <h1>Listagem de alunos</h1>
	
	<table class='table table-success table-striped'>
		<thead> 
			<tr >
				<th> ID </th>
				<th> NOME </th> 
				<th> CPF </th>
				<th> MATRICULA </th> 
				<th> NASCIMENTO </th> 
				<th class='text-center'> OPERAÇÕES </th>
			</tr> 
		</thead>
	
	<tbody>
		<?php
		// armazena a consulta
		$sql = "SELECT *, DATE_FORMAT(nascimento,'%d/%m/%Y') AS date_br FROM alunos ORDER BY id DESC";
		
		//execulta a consulta e armazena, fazendo uma sobreposição
		$sql = mysql_query($sql);
		
		//extrai para $linha cada registro	
		while ($linha = mysql_fetch_array($sql)) :
		?>
			<tr> 
				<td><?php echo $linha['id']; ?> </td>
				<td><?php echo $linha['nome']; ?> </td>
				<td><?php echo $linha['cpf']; ?> </td>
				<td><?php echo $linha['matricula']; ?> </td>
				<td><?php echo $linha['date_br']; ?> </td> 
				<td class='text-center'> <?php 
				echo "
				<a href='deletar.php?id=$linha[id]' class='btn btn-danger' onclick=\"return confirm('Deseja realmente excluir?')\"> Excluir </a>
				<a href='' class='btn btn-warning'> Editar </a>
				"?></td>
			</tr>
		
		<?php endwhile; ?>
	</tbody>
	</table>
	
	</div>
	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>