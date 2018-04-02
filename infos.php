<?php
include("conexao.php");

//arquivar no banco de dados

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$empresa = $_POST["empresa"];
$cargo = $_POST["cargo"];
$atuacao = $_POST["atuacao"];


$inserir = array (

	'nome' 		=> $nome,
	'email' 	=> $email,
	'telefone'	=> $telefone,
	'empresa' 	=> $empresa,
	'cargo' 	=> $cargo,
	'atuacao' 	=> $atuacao
);


		$fields = implode(', ', array_keys($inserir));
		$values = "'".implode("' , '", $inserir)."'";

	
	$sql = "INSERT INTO leads ({$fields}) VALUES ({$values})";


	$rs = mysqli_query($conexao, $sql);

	
//redirecionamento

if($rs) {
	echo "
		<script type=\"text/javascript\">
			window.location.href='agradecimento.php';
		</script>\n";
} else {
	echo "
		<script type=\"text/javascript\">
			alert(\"Sua mensagem não pode ser enviada.\");history.go(-1);
		</script>\n";
}
