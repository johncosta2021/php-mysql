<?php
mysql_connect("localhost","root","");
mysql_select_db("tecnico2021");

// mysql_set_charset("utf8");

// header ("content-type: text/html;charset=utf-8");

// $local = "localhost";
// $usuario = "root";
// $senha = "";
// $db = "tecnico2021";
// $mysql = mysqli_connect($local, $usuario, $senha);
// mysqli_select_db($mysql, $db);

// mysqli_select_db($db);

// mysql_set_charset("utf8");
# Aqui está o segredo
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8'); 
mysql_query('SET character_set_results=utf8');

 // javascript para autocomplete de selects
	// <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	// <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>
    // <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css"/>
	//   <script>
	//   //script para autocomplete do form
	// 	  $(document).ready(function()
	// 	  {
	// 	  	//$('#id_cidade').select2();
	// 	  	$('#id_curso').select2();

?>
