<!--meta charset=UTF-8-->
<?php

	include "banco.php"; 
	
	echo "<hr>";
	//testes da linguagem PHP
	echo "Hello world!";
	echo "<br>";
	$nome = "Bruna éééé"; // variável do tipo string
	
	//testar substr
	$novo_nome = substr($nome,6,2); // retirar uma string de outra
	echo "Usando substr -> $novo_nome";
	echo "<br>";
	
	//testando o hash md5
	echo "Testando md5 ".md5($nome);
	echo "<br>";
	
	echo "Olá $nome <br>";
	echo 'Olá $nome <br>';
	//teste do laço for	
	for ($i=0;$i<10;$i++){
		if ($i%2==0){
			echo "$i - par";
		}
		else {
			echo "$i - ímpar";
		}		
		
		echo "<br>";
		
	}
	//teste while
	$i=50;
	while ($i < 101){
		echo "$i <br>";
		$i++;
	}
?>





