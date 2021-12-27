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
    <div class="container">
        <h1 class="n1">listagem de alunos!</h1>
          <?php
          $banco = "SELECT *, DATE_FORMAT (nascimento, '%d/%m/%Y') AS nasc_Brasil FROM alunos ORDER BY id; ";
          
          $sql = mysql_query($banco);
          
          echo"<div class='table-responsive'>";

          echo "<table class= 'table table-striped'>";
          echo"<thead class='n1'>
                <tr>
                  <th> ID </th>
                  <th> NOME </th>
                  <th> MATRICULA </th>
                  <th> CPF </th>
                  <th> nasc_Brasil </th>
               </tr>
               </thead>";
          while ( $linha = mysql_fetch_array($sql)){
               echo "
               <tr>
                  <th> $linha[id] </th>
                  <td>$linha[nome] </td>
                  <td>$linha[matricula] </td>
                  <td>$linha[cpf] </td>
                  <td>$linha[nasc_Brasil] </td>
               </tr>";
          }
              echo "</table> ";
              echo"</div>";
          ?>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>