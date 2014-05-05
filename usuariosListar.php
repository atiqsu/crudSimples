<?php
//Estes dois includes são obrigatórios para qualquer página PHP
include './includes/config.php';
setMenu("Usuários");
include './includes/cabecalho.php';

// Esta página deve checar se o usuário está logado
checkLogin();



$sql = "SELECT * FROM usuarios";

$limpar = $_POST['limpar'];
$busca = $_POST['busca'];

if ($limpar) //se o usuario clicou no botao limpar, zera a busca
	$busca = "";

if ($busca)
		$sql .= " WHERE nome LIKE '%$busca%'"; // <<< WARNING SQL INJECTION


	$stmt = DB::prepare($sql);
	$stmt->execute();
	$usuarios = $stmt->fetchAll();

	?>

	<div class="col-md-10 col-md-offset-1">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><strong>Usuários</strong>

				</h3>
			</div>
			<div class="panel-body">

				<form method="post">

					<div class="input-group">
						<input type="text" class="form-control" id="busca" name="busca" placeholder="Buscar" value="<?php echo $busca ?>">
						<span class="input-group-btn">
							<button type="submit" id="buscar" value="buscar" class="btn btn-info">Buscar</button>
							<button type="submit" id="limpar" value="limpar" name="limpar" class="btn btn-default">Limpar</button>
						</span>
					</div>


				</form>

				<br/>

				<table class="table table-striped  table-bordered">
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Login</th>
					</tr>
					<?php

					foreach ($usuarios as $u) {
						echo "<tr>";
						echo "<td>{$u->idusuario}</td>";
						echo "<td><a href='usuariosShow.php?idusuario={$u->idusuario}'>{$u->nome}</a></td>";
						echo "<td>{$u->email}</td>";
						echo "<td>{$u->login}</td>";
						echo "</tr>";
					}

					?>
				</table>


			</div>
			<div class="panel-footer">
				<a href="usuariosNovo.php"  class="btn btn-primary">Novo</a>
			</div>
		</div>
	</div>
</div>


<?php
include './includes/rodape.php';
?>