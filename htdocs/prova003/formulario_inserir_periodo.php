<?php
    include "banco.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <?php
        include "topo.php";
      ?>
      <div class="container">
        <h1>formulario inserir período</h1>
        
          <form action="inserir_periodo.php" method="post">
            Periodo: <br>
            <input type="text" name="nome" class="form-control" required><br>
            Inicio: <br>
              <input type="date" name="inicio" class="form-control" required>
            <br>
            termino: <br>
              <input type="date" name="termino" class="form-control" required>
              <br>
        
            Situação: <br>
            <div class="form-check form-check-inline">
                <label><input type="radio" name="situacao" value="ativo" required> Ativo</label>
            </div>
            <div class="form-check form-check-inline">
                <label><input type="radio" name="situacao" value="inativo" required> Inativo</label>
            </div>
            <br> <br>
              <button type="submit" class="btn btn-warning"> salvar</button>
              <a href="periodo.php" class="btn btn-primary">voltar</a>
          </form>
      </div>
    <?php
        include "rodape.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>