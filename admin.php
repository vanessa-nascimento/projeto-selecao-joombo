<?php
include("conexao.php");
include("template/header.php");

$pc= '';
$pagina = '';
//paginacao

$busca = "SELECT * FROM leads";
$total_reg = "20"; // número de registros por página

$inicio = $pc - 1;
$inicio = $inicio * $total_reg;



if (isset($_GET['pagina'])) {
  $pagina=$_GET['pagina'];
} else {
  $pagina = 1;
}

if (!$pagina) {
 $pc = "1";
} else {
 $pc = $pagina;
}

$inicio = $pc - 1;
$inicio = $inicio * $total_reg;
$limite = mysqli_query($conexao,"$busca ORDER BY nome LIMIT $inicio,$total_reg");
$todos = mysqli_query($conexao,"$busca");

  $tr = mysqli_num_rows($todos); // verifica o número total de registros
  $tp = $tr / $total_reg; // verifica o número total de páginas
?>
<div class="container">
	<img src="images/logo-joombo.png" title="Joombo" alt="Joombo" class="logo">
	<table class="table table-bordered table-striped table-responsive">
		<thead class="thead-inverse">
			<th>
				Nome
			</th>
			<th>
				E-mail
			</th>
			<th>
				Telefone
			</th>
			<th>
				Empresa
			</th>
			<th>
				Cargo
			</th>
			<th>
				Área de atuação
			</th>
		</thead>
		<tbody>
<?php
	if (!$tr) {
		echo "
			<tr>
				<td colspan='6'>
					<div class='alert alert-info'>Nenhum registro encontrado!</div>
				</td>
			</tr>
		";
	} else {
  // vamos criar a visualização
  while ($dados = mysqli_fetch_array($limite)) {
	//$nome = $dados["nome"];
?>
	<tr>
		<td><?php echo $dados["nome"]; ?></td>
		<td><?php echo $dados["email"]; ?></td>
		<td><?php echo $dados["telefone"]; ?></td>
		<td><?php echo $dados["empresa"]; ?></td>
		<td><?php echo $dados["cargo"]; ?></td>
		<td><?php echo $dados["atuacao"]; ?></td>
	</tr>
<?php
}
  }

?>
	</tbody>
	</table>
<?php
  // agora vamos criar os botões "Anterior e próximo"
  $anterior = $pc -1;
  $proximo = $pc +1;
  if ($pc>1) {
	  echo " <a href='?pagina=$anterior' class='btn btn-default'><i class='glyphicon glyphicon-chevron-left'></i> Anterior</a> ";
  }
  
  if ($pc<$tp) {
	  echo " <a href='?pagina=$proximo' class='btn btn-default'>Próxima <i class='glyphicon glyphicon-chevron-right'></i></a>";
  }

  ?>
</div>