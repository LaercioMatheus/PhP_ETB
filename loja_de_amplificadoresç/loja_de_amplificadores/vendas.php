<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Vendas</title>
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
				<h1> VENDAS </h1>							
				
				<?php
					//CONECCAO COM O BANCO DE DADOS
					$conectar = mysqli_connect ("localhost", "root", "", "35936x");									

					//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
					$sql_pesquisa = "SELECT
										Cod_AMP, Marca_AMP, Modelo_AMP, Tipo_AMP, Preco_AMP
									FROM 
										amplificadores
									WHERE
										Fila_Compra_AMP = 'N'";

					$resultado_consulta = mysqli_query ($conectar, $sql_pesquisa);

				?>

				<table class="style_tabela">
				<tr>
					<td>
						MARCA
					</td>				
					<td>
						MODELO
					</td>				
					<td>
						TIPO
					</td>
					<td>
						PREÇO
					</td>
					<td>
						AÇÃO
					</td>
				</tr>

				<?php
					while ($registro = mysqli_fetch_row($resultado_consulta)) {
				?>

				<tr>
					<td>
						<?php echo $registro[1]; ?>
						<!--MARCA-->
					</td>
					<td>
						<!--MODELO-->
						<!--ISSO É CASO ESSA LINHA DA TABELA FOR UM LINK-->
						<a href="exibe_amp.php?codigo=<?php echo $registro[0]; ?>">
							<?php echo $registro[2]; ?>
						</a>
					</td>
					<td>
						<!--TIPO-->
						<?php echo $registro[3]; ?>
					</td>
					<td>
						<!--PREÇO-->
						<?php echo $registro[4]; ?>
					</td>
					<td>
						<!--AÇÃO-->
						<a href="processa_fila_compras.php?codigo=<?php echo $registro[0]; ?>">
							Colocar na fila de compras
						</a>
					</td>
				</tr>
				
				<?php
					}
				?>
		</table>
				<p> <a href="ver_fila_compras.php"> Ver a fila de compras </a> </p>
							
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