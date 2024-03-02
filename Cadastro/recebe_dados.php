<html>
  <head>
    <title>Aprendendo HTML</title>
  </head>
  <body>
  <h1>Cadastro Pessoal<h1>
	
	<?php
		$nome = $_GET["nome"];
		$sobrenome = $_GET["sobrenome"];
		$email = $_GET["email"];
		$idade = $_GET["idade"];
		
		echo "<p>Idade: $idade</p>";
		echo "<p>Nome: $nome</p>";
		echo "<p>Sobrenome: $sobrenome</p>";
		echo "<p>Email: $email</p>";
	?>
  </body>
</html>