<?php
	$title="7 Dicas de marketing digital";
	include('template/header.php');
?>
<style type="text/css">
	body {
		background:#16a085;	
	}
</style>

<div class="section-conteudo">
	<div class="container">
		
		<div class="header text-center">
			<img src="images/logo-joombo.png" title="Joombo" alt="Joombo" class="logo animated fadeInDown">
			<h1 class="title">Receba dicas <strong>grátis</strong> de <strong>marketing <br> digital</strong> para sua empresa</h1>
		</div>
		
		<div class="section-form col-md-8 col-md-offset-2 animated bounceInUp">
			<div class="col-md-12">
				
				<form method="POST" action="infos.php">
					<div class="form-group">
						<label class="control-label">Nome Completo <small>(obrigatório)</small></label>
						<input type="name" name="nome" class="form-control" maxlength="150" placeholder="Nome" required>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						    	<label class="control-label">Email  <small>(obrigatório)</small></label>
						    	<input type="email" name="email" class="form-control" maxlength="200" placeholder="Email" required>
						  	</div>
					  	</div>
					  	<div class="col-md-6">
						  	<div class="form-group">
								<label class="control-label">Telefone  <small>(obrigatório)</small></label>
								<input type="tel" name="telefone" class="form-control" maxlength="15" placeholder="Telefone" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Empresa  <small>(obrigatório)</small></label>
								<input type="text" name="empresa" class="form-control" maxlength="100" placeholder="Empresa" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Cargo  <small>(obrigatório)</small></label>
								<input type="text" name="cargo" class="form-control" maxlength="100" placeholder="Cargo" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Qual a área de atuação da sua empresa? <small>(obrigatório)</small></label>
						<select name="atuacao" class="form-control" required>
						 	<option value="">Selecione</option>
							<option value="Agência Digital">Agência Digital</option>
							<option value="Agência de Publicidade e Marketing">Agência de Publicidade e Marketing</option>
							<option value="Assessoria de Imprensa">Assessoria de Imprensa</option>
							<option value="Consultoria e Treinamento">Consultoria e Treinamento</option>
							<option value="E-commerce">E-commerce</option>
							<option value="Educação e Ensino">Educação e Ensino</option>
							<option value="Engenharia e Indústria Geral">Engenharia e Indústria Geral</option>
							<option value="Eventos">Eventos</option>
							<option value="Financeiro, Jurídico e Serviços Relacionados">Financeiro, Jurídico e Serviços Relacionados</option>
							<option value="Governo e Órgãos Públicos">Governo e Órgãos Públicos</option>
							<option value="Hardware e Eletrônicos">Hardware e Eletrônicos</option>
							<option value="Imobiliárias">Imobiliárias</option>
							<option value="ONGs">ONGs</option>
							<option value="Saúde e Estética">Saúde e Estética</option>
							<option value="Serviços em Geral">Serviços em Geral</option>
							<option value="Serviços em RH e Coaching">Serviços em RH e Coaching</option>
							<option value="Software e Cloud">Software e Cloud</option>
							<option value="Telecomunicações">Telecomunicações</option>
							<option value="Turismo e Lazer">Turismo e Lazer</option>
							<option value="Varejo">Varejo</option>
						</select>
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary btn-enviar">RECEBER MATERIAL</button>
					</div>
				</form>

			</div>	
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function () {
	$(".btn-enviar").click(function(event){
        var curStep = $(this).closest("form"),
		curInputs = curStep.find(".form-control"),
		isValid = true;

		$(".form-group").removeClass("has-error");
		for(var i=0; i<curInputs.length; i++){
			if (!curInputs[i].validity.valid){
				isValid = false;
				$(curInputs[i]).closest(".form-group").removeClass("has-success");
				$(curInputs[i]).closest(".form-group").addClass("has-error");
			} else {
				$(curInputs[i]).closest(".form-group").removeClass("has-error");
				$(curInputs[i]).closest(".form-group").addClass("has-success");
			}
		}				
	});				
});
</script>

<?php
	include('template/footer.php');
?>