<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href=<?= base_url("css/bootstrap.css") ?>>
	<meta charset="UTF-8" />
	<title>Mercado</title>
</head>
<body>
	<div class="container">
	<h1>Cadastro de Produto</h1>

	<?php  
	echo form_open("produtos/novo");

	echo form_label("Nome: ", "nome");
	echo form_input(array(
		"name"		=>	"nome",
		"id" 		=> 	"nome",
		"class"		=>	"form-control",
		"maxlength"	=>	"255"
	));

	echo form_label("Descrição: ", "descricao");
	echo form_textarea(array(
		"name"	=>	"descricao",
		"id"	=>	"descricao",
		"class"	=>	"form-control"
	));

	echo form_label("Preço: ", "preco");
	echo form_input(array(
		"name"		=>	"preco",
		"id"		=>	"preco",
		"class"		=>	"form-control",
		"maxlength"	=>	"255",
		"type"		=>	"number"
	));

	echo "<br>";

	echo form_button(array(
		"content"	=>	"Cadastrar Produto",
		"class"		=>	"btn btn-primary",
		"type"		=>	"submit"
	));

	echo form_close();
	?>
	</div>
</body>
</html>	