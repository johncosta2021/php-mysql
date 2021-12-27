<?php
        include "banco.php";
        //Aqui vai programar o Formulário na linguagem  HTML
    ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- style="background-color:#f8f9fa;" -->
    <script>
      // function mascara_cpf(){
      //   var cpf = document.getElementById('cpf1')
      //   if (cpf.value.length == 3 || cpf.value.length == 7){
      //     cpf.value += "."
      //   }
      //    else if (cpf.value.length == 11){
      //      cpf.value += "-"
      //    }   
      // }
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

    <div class="container">
        <h1>Formulário inserir!</h1>
        
        <form action="inserir.php" method="POST">
          
          Nome: <br>
          <input type="text" placeholder="Digite seu nome aqui..." required name="nome" class="form-control" >
          <br>
          CPF: <br>
          <input type="text" name="cpf" id="cpf" minlength="14" maxlength="14" class="form-control" placeholder="ex: 999.999.999-99" id="cpf" autocomplete="off" required>
          <br>
          Matricula: <br>
          <input type="number" name="matricula" required min="1" max="999" maxlength="3" class="form-control" placeholder="ex: 999">
          <br>
          Nascimento: <br>
          <input type="date" name="nascimento" required class="form-control">
          <br>

          <button type="submit" class="btn btn-primary">salvar</button>
          <a href="listagem_alunos.php" class="btn btn-warning">voltar</a>
        </form>
        
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>
    