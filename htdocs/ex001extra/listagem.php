    <?php
        include "conexao.php";  
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <!-- inicio do menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end"> 
                <a href="formulario.php" class="btn btn-primary justify-content-md-end" >cadastrar noticías</a>
            </div>
        </div>
    </nav>
    <!-- fim do menu -->
    <br>

    <!-- conteudo principal -->
    <div class="container bg-light">
        <?php
        $sql = "select * from noticias;";
        $texte=mysql_query($sql);
        while ($text = mysql_fetch_array($texte)){
            echo"<h1>$text[titulo]</h1>";
            echo"<h2>$text[subtitulo]</h2>";
            echo"<p>$text[conteudo]</p>";
        }
        
        ?>
    </div>
    <!-- fim do conteudo principal -->
    <!-- inicio do rodapé -->
        <footer class="bg-light" style="height: 150px;">
            <p class="text-center" style="padding: 50px;">Desenvolvido por mim</p>
        </footer>
    <!-- fim do rodapé -->
</body>
</html>