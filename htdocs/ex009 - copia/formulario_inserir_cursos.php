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
        <h1>formulario inserir cursos</h1>
        
          <form action="inserir_cursos.php" method="post">
            Nome do Curso: <br>
              <input type="text" name="nome" placeholder="Digite nome do curso aqui" class="form-control" required>
            <br>
            Vagas: <br>
              <input type="number" name="vagas" placeholder="Digite número de vagas aqui" class="form-control" min="1" max="99" required>
              <br>
              <button type="submit" class="btn btn-warning"> salvar</button>
              <a href="listagem_cursos.php" class="btn btn-primary">voltar</a>
          </form>
      </div>

    <?php
        include "rodape.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>