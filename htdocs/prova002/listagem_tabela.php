<?php
  include "banco.php";
  //Aqui vai programar a listagem usando o comando SQL SELECT

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="content-type" content="text/html;charset=utf-8"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/59f440e9ff.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">

    <title> CRUD </title>
  </head>
  <body>
  <header>
      <h1>NOVIDADES SOBRE COMPUTADOR</h1>
    </header>

  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="listagem_tabela.php">TABELA DE COMPUTADOR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FALE CONOSCO</a>
        </li>
      </ul>
      <form class="d-flex" method="POST">
        <input class="form-control me-2" name="nome" type="search" placeholder="Buscar aqui.." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
      <br>
    <div class="container">
        
          <?php
          $nome = htmlentities($_POST['nome']);
          if ($n=$nome) {echo  "Você quiz dizer <strong>$n</strong>, né?";}

          echo "<h1 class='bg-success'>listagem da tabela!</h1>";

          $banco = "SELECT * from computadores WHERE marca like '%$nome%'; ";
          
          $sql = mysql_query($banco);
                    
          echo"<div class='table-responsive'> ";  
            echo "<table class= 'table table-striped'>";
            echo"<thead class='bg-success'>
                  <tr class='text-center'>
                    <th> ID </th>
                    <th> MARCA </th>
                    <th> PREÇO </th>
                    <th> PROCESSADOR </th>
                    <th> HD </th>
                    <th> RAM</th>
                    <th> OPÇÕES</th>
                 </tr>
                 </thead>";
            while ( $linha = mysql_fetch_array($sql)){
                 echo "
                 <tr class='text-center'>
                    <th> $linha[id] </th>
                    <td>$linha[marca] </td>
                    <td>R$ $linha[preco] </td>
                    <td>$linha[processador] </td>
                    <td>$linha[hd]gb </td>
                    <td>$linha[ram]gb </td>
                    <td> 
                    <a href='deletar.php?id=$linha[id]' class='btn btn-danger'
                    onclick=\"return confirm('Deseja excluir?');\">Excluir</a> 
                    
                    <a href='formulario_editar.php?id=$linha[id]' class='btn btn-warning' >Editar</a></td>
                 </tr>";
                 $c+=1;
            }
                echo "</table> ";
                echo"<a href='Formulario_inserir.php'><button type='submit' class='btn btn-primary me-5'>Novo cadastro</button></a>";
                echo"<a href='listagem_tabela.php?' class='btn btn-primary me-5'><i class='fas fa-sync-alt'></i></a>";
                echo "No total são $c registros";
                
              echo"</div>";
          ?>
          
        </div>
        <br>
        <?php
          include "rodape.php"
        ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>