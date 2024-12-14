<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exibe Amplificadores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> ROCK N´ROLL </h1>
					<h1> Amplificadores </h1>
				</div>
				<div id="menu_global"  class="menu_global">
					<p> Olá <?php include "valida_login.php"; ?>
					<?php include "menu_local.php"; ?></p>
					               
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> EXIBIÇÃO DE AMPLIFICADORES </h1>							

				<?php
					//CONECCAO COM O BANCO DE DADOS
					$conectar = mysqli_connect ("localhost", "root", "", "35936x");

					$codigo_amp = $_GET["codigo"];

					//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
					$sql_pesquisa = "SELECT
										Marca_AMP, Modelo_AMP, Tipo_AMP, Preco_AMP, Foto_AMP
									FROM
										amplificadores
									WHERE
										Cod_AMP = '$codigo_amp'";

#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
					$tabela_resultado = mysqli_query($conectar, $sql_pesquisa);

					$registro_amp = mysqli_fetch_row($tabela_resultado);

				?>

					<p><img src="<?php echo $registro_amp[4]; ?>" alt="A foto do amplificador"></p>
				<?php
					echo "<p>Marca: $registro_amp[0] </p>";
					echo "<p>Modelo: $registro_amp[1] </p>";
					echo "<p>Tipo: $registro_amp[2] </p>";
					echo "<p>Preço: $registro_amp[3] </p>";
				?>				
			</div>	
				
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> AMPLI - CONTROL </h6> 
						<h6> Rua do Rock, 666 -- E-mail: contato@ampli_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
		</div>
    </body>
</html>