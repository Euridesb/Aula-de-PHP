<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="lic_it.css">
	<link href="https://fonts.googleapis.com/css2?family=Literata:ital,wght@1,300&display=swap" rel="stylesheet">
<title>ITAJAÍ</title>
</head>
<body>

	<h1>CAD. DE LICITAÇÃO DE ITAJAÍ</h1>
<form id="saude" action="" method="post">
	<fieldset>
			<div>
				<input type="hidden" name="id">
				<img src="cid_It.png"> 
				<label for="name">Empresa:</label><br>
				<input type="hidden" name="name">
				<input type="text" id="name" name="name">
				<p>PREENCHER O NOME DA EMPRESA.</p>
				
				<label for="cpf">CNPJ</label><br>
				<input type="hidden" name="cpf">
				<input type="number" id="cpf" name="cpf" >
				<p>PREEN. O CAD. DE PESSOA JURITICA</p>
				
				<label for="rg">PRODUTO</label><br>
				<input type="hidden" name="rg">
				<input type="number" id="rg" name="rg" >	
				<p>NOME DO PRODUTO</p>

				<label for="sanguineo">DESCRIÇÃO DO PRODUTO</label><br>
				 <input type="hidden" name="sanguineo">
				<input type="number" id="sanguineo" name="sanguineo" maxlength="4" >
				<p>FAZER A DESCRIÇÃO DO PRODUTO</p>

				<input type="hidden" name="salvar" value="salvar">
        		<input type="submit" value="CADASTRAR">
        		<input id="reset" type="reset" value="LIMPAR">
        		<a href="http://localhost/Cidades/cidade_IT.php#"><input id="voltar" type="" name="reset" value="VOLTAR"></a>
			</div> 	
	</fieldset>
</form>
</body>
</html>