    <?php
        include "banco.php";
        //Aqui vai programar o formulario em HTML já preenchido com informações
    ?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <title> loja </title>
  </head>
  <body>
  <?php 
    include "topo.php";
    $id = $_GET["id"];
    $sql = "select * from computadores where id=$id";
    $sql = mysql_query($sql);
    $linha = mysql_fetch_array($sql);
  ?>

<div class="container">
    <h1>Formulário editar!</h1>
    
    <form action="editar.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id;?>">
      Marca: <br>
      <input type="text" placeholder="Digite o nome da marca aqui..." required name="marca" class="form-control" value="<?php echo $linha['marca']; ?>">
      <br>
      Preço: <br>
      <input type="text" name="preco"  minlength="3" maxlength="10" class="form-control" placeholder="ex: 100,00"  required  value="<?php echo $linha['preco']; ?>">
      <br>
      Processador: <br>
      <input type="text" name="processador" required min="2" max="10" maxlength="10" class="form-control" placeholder="ex: i3" value="<?php echo $linha['processador']; ?>">
      <br>
      HD ou SSD: <br>
      <input type="text" placeholder="ex: 500gb" name="hd" required class="form-control" value="<?php echo $linha['hd']; ?>">
      <br>
      Ram: <br>
      <input type="text" name="ram" required class="form-control" placeholder="ex: 4gb" value="<?php echo $linha['ram'];?>">
      <br>

      <button type="submit" class="btn btn-primary">salvar</button>
      <a href="listagem_tabela.php" class="btn btn-warning">voltar</a>
    </form>
    
    
</div>
<?php  include "rodape.php";?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>