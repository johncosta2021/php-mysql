<?php
    include 'banco.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/59f440e9ff.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
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
          <form class="d-flex" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="nome">
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
              <a class="nav-link active text-white" aria-current="page" href="listagem_alunos.php">Alunos</a>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link text-white" href="listagem_cursos.php">Cursos</a> -->
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
      <div class="container">
          <?php
              echo '<h1>listagem cursos</h1>';
                // $sql = "SELECT id_curso, a.nome nome_alunos,matricula,cpf,c.nome nome_cursos, vagas FROM alunos a JOIN cursos c ON a.id_curso=c.id;";
                $nome = $_POST['nome'];
                if ($n=$nome) {echo  "Você quiz dizer <strong>$n</strong>, né?";}
                $sql = mysql_query("SELECT * FROM cursos where nome like '%$nome%';");

                echo "<div class='table-responsive'>";
                echo "<table class= 'table table-striped'>
                    <thead style='background-color: #356ebc; class='text-center'>
                        <tr class='text-center'>
                            <th>id</th>
                            <th>cursos</th>
                            <th>vagas</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    
                ";
                while ($linha = mysql_fetch_array($sql)){

                    echo" 
                    <tr class='text-center'>
                    <td>$linha[id]</td>
                    
                     <td>$linha[nome]</td>
                     <td>$linha[vagas]</td>
                     <td>
                     <a href='deletar_cursos.php?id=$linha[id]' class='btn btn-warning' onclick=\"return confirm('Deseja excluir?');\">Deletar</a>
                     <a href='formulario_editar_cursos.php?id=$linha[id]' class='btn btn-danger'>Editar</a>
                     </td>
                     </tr>
                      
                     ";
                    $c+=1;
                }
                echo '</table> <br>'; 
                echo "<a href='formulario_inserir_cursos.php' ><button type='submit' class='btn btn-primary me-5'>Novo cadastro</button></a>";
                echo"<a href='listagem_cursos.php' class='btn btn-primary me-5'><i class='fas fa-sync-alt'></i></a>";
                echo "No total são $c registros";
                echo '</div>';

           ?>
      </div>
        <?php
            include "rodape.php";
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>