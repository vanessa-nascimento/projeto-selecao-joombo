<?php

//conectar no MYSQL
	$conexao = mysqli_connect("localhost","root","") 
		or die("Erro no MYSQL".mysqli_error($conexao));//1°servidor,2°nome usu,3°senha
		
		// função connect no banco de dados
		
		mysqli_select_db($conexao,"dados")
			or die("Erro! ".mysqli_error($conexao));
		
		//selecionar o banco

//	$gravar=mysqli_query($conexao,$sql) or die (mysqli_error($conexao));
//if($gravar)
	//echo "OK";
//else
	//echo "ERRO AO INSERIR";


?>