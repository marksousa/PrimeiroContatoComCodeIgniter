<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href=<?= base_url("css/bootstrap.css") ?>>
	<meta charset="UTF-8" />
	<title>Mercado</title>
</head>
<body>
	<div class="container">
	<h1>Produtos</h1>
	<table class="table table-striped">
		<thead>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Preco</th>
		</thead>
		<tbody>
		<?php foreach ($produtos as $produto) : ?>
			<tr>
				<td>
					<?= anchor("produtos/{$produto['id']}", $produto["nome"])  ?>
				</td>
				<td><?= auto_typography(html_escape($produto["descricao"]))?> </td>
				<td><?= numeroEmReais($produto["preco"]) ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>

	<?php if($this->session->flashdata("success")) : ?>
		<p class="alert alert-success"><?= $this->session->flashdata("success"); ?></p>
	<?php  endif ?>
	<?php if($this->session->flashdata("danger")) : ?>
		<p class="alert alert-danger"><?= $this->session->flashdata("danger"); ?></p>
	<?php  endif ?>

	<?php if(!$this->session->userdata("usuario_logado")) : ?>
	<hr />
	<h1>Login</h1>
	<?php  
	echo form_open("login/autenticar");

	echo form_label("Email", "email");
	echo form_input(array(
		"name" => "email", 
		"id" => "email",
		"class" => "form-control",
		"maxlength" => "255"
	));

	echo form_label("Senha", "senha");
	echo form_password(array(
		"name" => "senha",
		"id" => "senha",
		"class" => "form-control",
		"maxlength" => "255" 
	));

	echo "<br>";

	echo form_button(array(
		"class" => "btn btn-primary",
		"content" => "Login",
		"type" => "submit"
 	));

	echo form_close();
	?>


	<hr />
	<h1>Cadastro</h1>
	<?php 
	echo form_open("usuarios/novo");

	// Nome
	echo form_label("Nome: ", "nome");
	echo form_input(array(
		"name" => "nome", 
		"id" => "nome",
		"class" => "form-control",
		"maxlength" => "255"
	));

	// Email
	echo form_label("Email: ", "email");
	echo form_input(array(
		"name" => "email", 
		"id" => "email",
		"class" => "form-control",
		"maxlength" => "255"
	));

	// Senha
	echo form_label("Senha: ", "senha");
	echo form_password(array(
		"name" => "senha", 
		"id" => "senha",
		"class" => "form-control",
		"maxlength" => "255"
	));

	// // DropDown
	// echo form_label("DropDown: ", "dropdown");
	// $opcoes = array(
	// 	"valorUm" => "Texto do Valor Um", 
	// 	"valorDois" => "Texto do Valor Dois", 
	// 	"valorTres" => "Texto do Valor Tres"
	// );
	// echo form_dropdown("dropdown", $opcoes, 'large');

	echo "<br>";

	echo form_button(array(
		"class" => "btn btn-primary",
		"content" => "Cadastrar",
		"type" => "submit"
	));

	echo form_close();
	 ?>

	<?php else : ?>
		<?= anchor("produtos/formulario", "Novo Produto", array("class" => "btn btn-success")) ?>
		<?= anchor("login/logout", "Logout", array("class" => "btn btn-danger")) ?>
	<?php endif ?>

	</div><!-- Fecha a div .container -->
</body>
</html>