<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viwport" content="width=device-width">
</head>
<body>
	

	<h1>Ótima escolha!</h1>
	<p>Obrigado por comprar na Mirror fashion!
	Preencha seus dados para efetivar a compra</p>
	<h2>Sua compra</h2>
	<dl>
	 <dt>Produto</dt>
	 <dd><?= $_POST["nome"] ?></dd>
	 <dt>Cor</dt>
	 <dd><?=$_POST["cor"]?></dd>
	 <dt>Tamanho</dt>
	 <dd><?= $_POST["tamanho"]?></dd>
	 </dl>
</body>
</html>