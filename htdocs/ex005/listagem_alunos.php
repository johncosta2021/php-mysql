<?php
  include "banco.php";
  //Aqui vai programar a listagem usando o comando SQL SELECT

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>  .n1{  background-color:#18a1b8; } </style>

    <title> CRUD </title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <br>
    <div class="container">
        <h1 class="n1">listagem de alunos!</h1>
          <?php
          $banco = "SELECT *, DATE_FORMAT (nascimento, '%d/%m/%Y') AS nasc_brasileiro FROM alunos ORDER BY id;  ";
          
          $sql = mysql_query($banco);
          
          echo"<div class='table-responsive'> ";  
            echo "<table class= 'table table-striped'>";
            echo"<thead class='n1'>
                  <tr>
                    <th> ID </th>
                    <th> NOME </th>
                    <th> MATRICULA </th>
                    <th> CPF </th>
                    <th> NASCIMENTO </th>
                 </tr>
                 </thead>";
            while ( $linha = mysql_fetch_array($sql)){
                 echo "
                 <tr>
                    <th> $linha[id] </th>
                    <td>$linha[nome] </td>
                    <td>$linha[matricula] </td>
                    <td>$linha[cpf] </td>
                    <td>$linha[nasc_brasileiro] </td>
                 </tr>";
            }
                echo "</table> ";
              echo"</div>";
          ?>
          <a href="Formulario_inserir.php"><button type="submit" class="btn btn-primary">Novo cadastro</button></a>
        </div>
        <br>
        <footer class="bg-light" style="height: 50px;">
        <p class="text-center">Desenvolvido por john costa</p>

        </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>