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
        <h1>Formulário inserir disciplinas!</h1>
        
        <form action="inserir.php" method="POST">
          
          Nome: <br>
          <input type="text" placeholder="Nome da disciplina aqui..." required name="nome" class="form-control" >
          <br>
          Carga: <br>
          <input type="number" name="carga" minlength="1" maxlength="3" class="form-control" placeholder="ex: 360 horas" required>
          <br>
          Professor: <br>
          <input type="text" required class="form-control" name="professor" placeholder="Nome do professor">
          <br>
          Código: <br>
          <input type="number" placeholder="ex: 007" name="codigo" required class="form-control">
          <br>
          Periodo: <br>
          <select name="curso" class="form-select" required>
            <option value="">Selecione Periodo</option>
            <?php
             $sql = "SELECT * FROM periodos";
             $resultado = mysql_query($sql);
             while($linha = mysql_fetch_array($resultado)){
               echo "<option value='".$linha['id']."'>".$linha['nome']."</option>";
             }
            ?>
          </select>
          <br>
          <button type="submit" class="btn btn-primary">salvar</button>
          <a href="disciplinas.php" class="btn btn-warning">voltar</a>
        </form>
        
        
    </div>
    <?php  include "rodape.php";?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>
    