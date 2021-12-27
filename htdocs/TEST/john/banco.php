<?php
/*mysql_connect("localhost","root","");
mysql_select_db("tecnico2021");

mysql_set_charset("utf8");*/

$local = "localhost";

$usuario = "root";

$senha = "";

$db = "tecnico2021";

$mysql = mysql_connect($local, $usuario, $senha);

mysql_select_db($db);

mysql_set_charset("utf8");



?>
