    <?php
        include "banco.php";
        //Aqui vai programar o formulario em HTML já preenchido com informações
    ?>
    <!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> CRUD </title>
  </head>
  <body>
  <?php 
    include "topo.php";
    
    $id = $_GET["id"];
    $sql = "SELECT * from disciplinas where id='$id'";

    $sql = mysql_query($sql);
    $linha = mysql_fetch_array($sql);

  ?>

<div class="container">
    <h1>Formulário editar disciplinas!</h1>
    
    <form action="editar.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id;?>">
      Nome: <br>
          <input type="text" placeholder="Digite o nome do curso aqui..." required name="nome" class="form-control" value="<?php echo $linha['nome'];?>" >
          <br>
          Carga: <br>
          <input type="number" name="carga" minlength="1" maxlength="3" class="form-control" placeholder="ex: 360 horas" value="<?php echo $linha['carga'];?>" required>
          <br>
          Professor: <br>
          <input type="text" name="professor" class="form-control" placeholder="Digite o nome do professor aqui..." value="<?php echo $linha['professor'];?>" required>
          <br>
          <br>
          Código: <br>
          <input type="number" placeholder="ex: 007" name="codigo" value="<?php echo $linha['codigo'];?>" required class="form-control">
          <br>
          Periodo: <br>
          <br>
           <select name="periodo" class="form-select" required>
            <?php
                 $mysql1 = "SELECT * FROM periodos";
                 echo "<option value=''>Selecione um curso</option>";
                 $resultado = mysql_query($mysql1);
                 while($linha1 = mysql_fetch_array($resultado)){
                   if($linha1['id'] == $linha['id_periodo']){
                     echo "<option value='$linha1[id]' selected>$linha1[nome]</option>";
                   }else{
                     echo "<option value='$linha1[id]'>$linha1[nome]</option>";
                   }
                 }
                
            ?>
            
          </select>
          <br>
      <button type="submit" class="btn btn-primary">salvar</button>
      <a href="disciplinas.php" class="btn btn-warning">voltar</a>
    </form>
    
    
</div>
<?php  include "rodape.php";?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>