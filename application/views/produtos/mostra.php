<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href=<?= base_url("css/bootstrap.css") ?>>
	<meta charset="UTF-8" />
	<title>Mercado</title>
</head>
<body>
	<div class="container">
		<h1><?= $produto["nome"] ?></h1>
		<p><?= auto_typography(html_escape($produto["descricao"])) ?></p>
		<p><?= $produto["preco"] ?></p>
	</div>
</body>
</html>