<?php
        include "banco.php";
        //Aqui vai programar o Formulário na linguagem  HTML
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- style="background-color:#f8f9fa;" -->
    </script>
    <script src="js/js/jquery.min.js"></script>
    <script src="js/js/java.bootstrap.min.js"></script>
    <script src="js/js/jquery.js"></script>
    <script src="js/js/jquery.validate.js"></script>
    <script src="js/js/jquery.maskedinput.js"></script>
    <script src="js/js/funcoes.js"></script>
    <title> CRUD </title>
  </head>
  <body>
    <?php include "topo.php";?>

    <div class="container">
        <h1>Formulário inserir!</h1>
        
        <form action="inserir.php" method="POST">
          
          marca: <br>
          <input type="text" placeholder="Digite o nome aqui..." required name="marca" class="form-control" >
          <br>
          Preço: <br>
          <input type="number" name="preco"  min="2" maxlength="10" class="form-control" placeholder="ex: R$500,00"  required>
          <br>
          Processador: <br>
          <input type="text" name="processador" required min="2" max="10" maxlength="10" class="form-control" placeholder="ex: i5">
          <br>
          HD ou SSD: <br>
          <input type="text" name="hd" required class="form-control" placeholder="ex: 500gb">
          <br>
          Ram: <br>
          <input type="text" name="ram" required class="form-control" placeholder="ex: 4gb">
          <br>

          <button type="submit" class="btn btn-primary">salvar</button>
          <a href="listagem_tabela.php" class="btn btn-warning">voltar</a>
        </form>
        
        
    </div>
    <?php  include "rodape.php";?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>
    