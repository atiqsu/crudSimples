<?php
//Estes dois includes são obrigatórios para qualquer página PHP
include './includes/config.php';
setMenu("Usuários");
include './includes/cabecalho.php';

// Esta página deve checar se o usuário está logado
checkLogin();

?>

<div class="col-md-10 col-md-offset-1">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><strong>Usuários</strong>

			</h3></div>
			<div class="panel-body">
			



			</div>
			<div class="panel-footer">
				<a href="usuariosNovo.php"  class="btn btn-default">Novo</a>
			</div>
		</div>
	</div>


<?php
include './includes/rodape.php';
?>