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
    <title> CRUD </title>
  </head>
  <body>
      <header>

    <div style="background:#356ebc;">

      <div class="container">
        <nav class="navbar navbar-light" >
          <div class="container-fluid"></div>
          <nav class="navbar navbar-light bg-light"></nav>
        
            <div class="container-fluid">
              <a class="navbar-brand">
                <ul class="list-group list-group-flush">
                  <li class="text-white list-unstyled">UFPI</li>
                  <li class="fs-3 text-white list-unstyled">Univerdade Federal Do Piauí</li>
                  <li class="fs-6 text-white list-unstyled">MINISTÉRIO DA EDUCAÇÃO</li>
                </ul>
              </a>
              <form class="d-flex" method="POST">
                <input class="form-control me-2" type="search" name="nome" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success bg-white" type="submit">Search</button>
              </form>
          </div>
          </nav>
      </div>
      <!-- ----------------------------------------------------------------------- -->
      <div style="background-color: #0f4098;">
        <div class="container">
          <div class="row" >
            <div class="col-md-5">
              <nav class="nav">
                <a class="nav-link active text-warning" aria-current="page" href="#">Autentique-se na rede</a>
                <a class="nav-link text-white" href="index.php">Inicio</a>
              </nav>
            </div>
            <div class="col-md-7">
              <ul class="nav justify-content-end">
          
                <li class="nav-item">
                   <a class="nav-link active text-white" aria-current="page" href="#"></a> 
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="listagem_cursos.php">Cursos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#" >Sala de imprensa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">covid - 19</a>
                </li>
          
              </ul>
            </div>
          
          </div>
        </div>
      </div>

    </div>
    </header>
      <br>
    <div class="container">
        
          <?php
          $nome = $_POST['nome'];
          if ($n=$nome) {echo  "Você quiz dizer <strong> $n </strong>, né?";}

          echo "<h1 style='background-color: #356ebc;'>listagem de alunos!</h1>";

          $banco = "SELECT *, DATE_FORMAT (nascimento, '%d/%m/%Y') AS nasc_brasileiro FROM alunos WHERE nome LIKE'%$nome%' ORDER BY id;  ";
          
          $sql = mysql_query($banco);
                    
          echo"<div class='table-responsive'> ";  
            echo "<table class= 'table table-striped'>";
            echo"<thead style='background-color: #356ebc;'>
                  <tr class='text-center'>
                    <th> ID </th>
                    <th> NOME </th>
                    <th> MATRICULA </th>
                    <th> CPF </th>
                    <th> NASCIMENTO </th>
                    <th> AÇÕES</th>
                 </tr>
                 </thead>";
            while ( $linha = mysql_fetch_array($sql)){
                 echo "
                 <tr class='text-center'>
                    <th> $linha[id] </th>
                    <td>$linha[nome] </td>
                    <td>$linha[matricula] </td>
                    <td>$linha[cpf] </td>
                    <td>$linha[nasc_brasileiro] </td>
                    <td> 
                    <a href='deletar.php?id=$linha[id]' class='btn btn-danger'
                    onclick=\"return confirm('Deseja excluir?');\">Excluir</a> 
                    
                    <a href='formulario_editar.php?id=$linha[id]' class='btn btn-warning' >Editar</a></td>
                 </tr>";
                 $c+=1;
            }
                echo "</table> ";
                echo"<a href='formulario_inserir.php'><button type='submit' class='btn btn-primary me-5'>Novo cadastro</button></a>";
                echo"<a href='listagem_alunos.php?' class='btn btn-primary me-5'><i class='fas fa-sync-alt'></i></a>";
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