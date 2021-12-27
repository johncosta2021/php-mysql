<?php
mysql_connect("localhost","root","");
mysql_select_db("avaliacao23112021");

# Aqui está o segredo
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8'); 
mysql_query('SET character_set_results=utf8');


?>
