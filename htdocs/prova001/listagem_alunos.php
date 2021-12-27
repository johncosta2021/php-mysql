<?php
    include "banco.php";
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>celulares</title>
</head>
<body>
    <MAIN>
        <img src="img/banner-slider.jpg" alt="" style="height: 250px; width: 100%;">
    </MAIN>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contato</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            modelo
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">apple</a></li>
            <li><a class="dropdown-item" href="#">samsung</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">outra</a>
        </li>
      </ul>
      <form action="#" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-primary text-dark" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
    <br>
<div class="container">
    
        <h1 class="n1">TABELA DE CELULARES!</h1>
          <?php
          $banco = "SELECT * FROM celulares";
          
          $sql = mysql_query($banco);
          
          echo"<div class='table-responsive'>";

          echo "<table class= 'table table-bordered'>";
          echo"<tr class='bg-info'>
                  <th> ID </th>
                  <th> MODELO </th>
                  <th> MARCA </th>
                  <th> INTERNA </th>
                  <th> RAM </th>
                  <th> PREÇO </th>
                  <th> COR </th>
                  <th> DUAL SIM </th>
                  <th> TELA </th>
               </tr>";
          while ( $linha = mysql_fetch_array($sql)){
               echo "
               <tr>
                  <th> $linha[Id] </th>
                  <td>$linha[modelo] </td>
                  <td>$linha[Marca] </td>
                  <td>$linha[Memoria_Interna]gb</td>
                  <td>$linha[Memoria_Ram]gb</td>
                  <td>R$ $linha[Preco] </td>
                  <td>$linha[Cor] </td>
                  <td>$linha[Dual_sim] </td>
                  <td>$linha[tamanho_da_tela] </td>
               </tr>";
          }
              echo "</table> ";
              echo"</div>";
          ?>
        </div>
<br>
    <footer style="background-color: rgb(94, 160, 52); text-align: center; height: 60px;;">
          
          <p>criado por john costa</p>
    </footer>

<style>
    /* div{
        text-align: center;
    } */
</style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>