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
                  <a class="nav-link text-white" href="periodo.php">Periodo</a>
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

          echo "<h1 style='background-color: #356ebc;'>listagem de Disciplinas!</h1>";

            $banco = "SELECT d.id id_di,d.nome n_dis, carga,professor,codigo,p.nome n_nome,DATE_FORMAT(data_de_inicio,'%d/%m/%Y') 
            AS inicio, DATE_FORMAT(data_de_termino, '%d/%m/%Y') AS termino,situacao 
            FROM disciplinas d JOIN periodos p ON d.id_periodo=p.id where d.nome LIKE'%$nome%' ORDER BY n_nome;";
          
          $sql = mysql_query($banco);
          
                    
          echo"<div class='table-responsive'> ";  
            echo "<table class= 'table table-bordered'>";
            echo"<thead style='background-color: #356ebc;'>
                  <tr class='text-center'>
                    <th> ID        </th>
                    <th> NOME      </th>
                    <th> C.HORÁRIA </th>
                    <th> PROFESSOR </th>
                    <th> CÓDIGO    </th>
                    <th> PERÍODO   </th>
                    <th> INICIO    </th>
                    <th> TERMINO   </th>
                    <th> SITUAÇÃO  </th>
                    <th> AÇÕES     </th>
                 </tr>
                 </thead>";
                 
            while ( $linha = mysql_fetch_array($sql)){
                 echo "
                 <tr class='text-center'>
                    <th> $linha[id_di]       </th>
                    <td> $linha[n_dis]       </td>
                    <td> $linha[carga] horas </td>
                    <td> $linha[professor]   </td>
                    <td> $linha[codigo]      </td>
                    <td> $linha[n_nome]      </td>
                    <td> $linha[inicio]      </td>
                    <td> $linha[termino]     </td>

                    <td> $linha[situacao]    </td>
                    <td> 
                    <a href='deletar.php?id=$linha[id_di]' class='btn btn-danger'
                    onclick=\"return confirm('Deseja excluir?');\">Excluir</a> 
                    
                    <a href='formulario_editar.php?id=$linha[id_di]' class='btn btn-warning' >Editar</a></td>
                 </tr>";
                 $c+=1;
            }
                echo "</table> ";
                echo"<a href='formulario_inserir.php'><button type='submit' class='btn btn-primary me-5'>Novo cadastro</button></a>";

                echo"<a href='disciplinas.php?' class='btn btn-primary me-5'><i class='fas fa-sync-alt'></i></a>";

                echo "No total são <strong> $c </strong>registros";
                
              echo"</div>";
          ?>
          
        </div>
      
        <?php
          include "rodape.php"
        ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>