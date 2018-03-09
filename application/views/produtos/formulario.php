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
		//echo validation_errors("<h4 class='alert alert-danger'>" , "</h4>")
	 ?>
	<?php  
	echo form_open("produtos/novo");

	echo form_label("Nome: ", "nome");
	echo form_input(array(
		"name"		=>	"nome",
		"id" 		=> 	"nome",
		"class"		=>	"form-control",
		"maxlength"	=>	"255",
		"value"		=>	set_value("nome", "")
	));
	echo form_error("nome");

	echo form_label("Descrição: ", "descricao");
	echo form_textarea(array(
		"name"	=>	"descricao",
		"id"	=>	"descricao",
		"class"	=>	"form-control",
		"value"	=>	set_value("descricao", "")
	));
	echo form_error("descricao");

	echo form_label("Preço: ", "preco");
	echo form_input(array(
		"name"		=>	"preco",
		"id"		=>	"preco",
		"class"		=>	"form-control",
		"maxlength"	=>	"255",
		"type"		=>	"number",
		"value"		=>	set_value("preco", "")
	));
	echo form_error("preco");

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