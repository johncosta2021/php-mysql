<?php

	include "banco.php";
	//Formulário em html

?>
<!doctype html>
<html lang="br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- JavaScript para mascaras -->
	<script src="./js/jquery.min.js"> </script>
	<script src="./js/java.bootstrap.min.js"/> </script>
	<script src="./js/jquery.js"/> </script>
	<script src="./js/jquery.validate.js"/> </script>
	<script src="./js/jquery.maskedinput.js"/> </script>
	<script src="./js/funcoes.js"/> </script>
	<!-- Fim do JavaScript para mascaras -->
    <title>Buscar</title>
  </head>
  <body>
	<div class="container">
	<h1> Buscando Alunos </h1>
	<form method="POST" action="buscar.php">
		Nome <br>
		<input type="text" name="nome" class="form-control" required placeholder="Digite seu nome aqui"> <br>
		
		<input type="submit" class="btn btn-primary" value="Buscar">
		<a href="listagem_alunos.php" class="btn btn-warning"> Voltar </a>
	</form>
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