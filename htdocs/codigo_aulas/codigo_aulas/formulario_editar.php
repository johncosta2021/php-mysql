<?php

	include "banco.php";
	//programar um Form na linguagem HTML
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <!--meta charset="utf-8"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- javascript para mascaras -->
	<script src="./js/jquery.min.js"></script> <!--  Sempre vem antes do Bootstrap  para evitar lentidão -->
    <script src="./js/java.bootstrap.min.js" ></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.validate.js"></script>
    <script src="./js/jquery.maskedinput.js"></script>
    <script src="./js/funcoes.js"></script>
	<!-- fim do javascript para mascaras -->
	
	
    <title>Meu site CRUD</title>
  </head>
  <body>
  
	<?php
		include "topo.php";
		//recebendo a variável vinda pelo GET
		$id = $_GET[id];
		//echo " -- $id --";
		$sql = "SELECT * FROM alunos WHERE id=$id";
		$sql = mysql_query($sql);
		$linha = mysql_fetch_array($sql);
		
	?>
  
	<div class="container">
		<h1>Formulário de edição de alunos</h1>
		<form method="POST" action="editar.php">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			Nome <br>
			<input type="text" name="nome" class="form-control" required placeholder="Digite seu nome aqui" value="<?php echo $linha[nome] ?>">
			<br>
			CPF <br>
			<input type="text" name="cpf" id="cpf" class="form-control" required placeholder="Digite seu CPF aqui" value="<?php echo $linha[cpf] ?>">
			<br>
			Matrícula<br>
			<input type="text" name="matricula" class="form-control" required placeholder="Digite a sua matricula aqui" value="<?php echo $linha[matricula] ?>">
			<br>
			Nascimento<br>
			<input type="date" name="nascimento" class="form-control" required value="<?php echo $linha[nascimento] ?>">
			<br>
			
			Curso<br>
			<?php
			//echo $linha[id_curso];
			?>
			<select name="id_curso" class="form-select" required>
				<?php
				$sql2 = "SELECT * FROM cursos ORDER BY id ASC";
				$sql2 = mysql_query($sql2);
				echo "<option value=''>--Selecione um curso--</option>";
				while ($linha2 = mysql_fetch_array($sql2)){  
					if ($linha2[id]==$linha[id_curso]){	
						echo "<option value='$linha2[id]' selected>$linha2[nome]</option>";
					}
					else{
						echo "<option value='$linha2[id]'>$linha2[nome]</option>";
					}
				}
				?>
			</select>
			<br>
			<input type="submit" class="btn btn-primary" value="Salvar">
			<a href="listagem_alunos.php" class="btn btn-warning">Voltar</a>
		</form>
		
		<?php
			include "rodape.php";
		?>
		
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