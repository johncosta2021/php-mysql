<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="03cores.php" method="get">
        <label for="itxt">texto: </label>
        <input type="text" name="t" id="itxt">
        <br>
        <label for="itam">tamanho</label>
        <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt" selected>14</option>
            <option value="20pt">20</option>
            <option value="40pt"10></option>
        </select>
        <br>
        <label for="icor">Cor: </label>
        <input type="color" name="cor" id="icor">
        <br>
        <input type="submit" value="salvar">
    </form>
</body>
</html>