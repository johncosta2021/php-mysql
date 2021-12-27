<?php
    include "conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <form action="#" method="post">
            <button onclick="inicio()">titulo</button>
    <script>
        function inicio(){
            
        }
    </script>
    <br>
                conteudo:
                <textarea name="conteudo" required cols="30" rows="10" class="form-control" ></textarea>
                <br>
                <button type="submit" class="btn btn-primary"> salvar</button>
                <a href="listagem.php" class="btn btn-primary">voltar</a>
            </form>
        </div>

    
</body>
</html>