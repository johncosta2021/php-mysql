<?php
/*mysql_connect("localhost","root","");
mysql_select_db("tecnico2021");

mysql_set_charset("utf8");*/

// header ("content-type: text/html;charset=utf-8");

$local = "localhost";

$usuario = "root";

$senha = "";

$db = "tecnico2021";

$mysql = mysql_connect($local, $usuario, $senha);

mysql_select_db($db);

// mysql_set_charset("utf8");
# Aqui está o segredo
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');



?>
