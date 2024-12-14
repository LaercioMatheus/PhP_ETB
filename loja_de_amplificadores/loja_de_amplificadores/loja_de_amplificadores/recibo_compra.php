<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Recibo da compra</title>
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
					<h1> RECIBO </h1>
					
					<?php
						//CONECCAO COM O BANCO DE DADOS
						$conectar = mysqli_connect ("localhost", "root", "", "35936x");

						$data = date('d/m/Y');
						$cod_fun = $_SESSION['codigo'];

						//INSERINDO OS DADOS DENTRO DO BANCO DE DADOS
						$sql_registro_vendas = "INSERT INTO vendas
											(Data_VEND, Funcionarios_Cod_FUN)
										VALUES
											('$data', '$cod_fun')";

						$resultado_registro_vendas = mysqli_query ($conectar, $sql_registro_vendas);

						$sql_consulta_ultima_venda = "SELECT
											Cod_VEND
										FROM 
											vendas										
										ORDER BY Cod_VEND DESC LIMIT 1";

						$resultado_consulta = mysqli_query ($conectar, $sql_consulta_ultima_venda);
						$registro_cod_ven = mysqli_fetch_row ($resultado_consulta);

						$sql_codigo_venda_em_amp = "UPDATE
														amplificadores
													SET
														Vendas_Cod_VEND = '$registro_cod_ven[0]',
														Fila_Compra_AMP = 'V'
													WHERE
														Fila_Compra_AMP = 'S'";

						$resultado_alteracao_amp = mysqli_query($conectar, $sql_codigo_venda_em_amp);

						$sql_consulta_recibo = "SELECT
													Marca_AMP,
													Modelo_AMP,
													Preco_AMP
												FROM
													amplificadores
												WHERE
													Vendas_Cod_VEND = '$registro_cod_ven[0]'";

						$resultado_consulta = mysqli_query($conectar, $sql_consulta_recibo);
					
						echo "<p> Vendas nº: $registro_cod_ven[0]</p>";
						echo "<p> Data: $data</p>";
					?>
					
					<table class="style_tabela">
						<tr>
							<td>
								<p> MARCA </p>
							</td>				
							<td>
								<p> MODELO </p>
							</td>
							<td>
								<p> PREÇO </p>
							</td>
						</tr>

						<?php
							$valor_total = 0;
							while ($registro = mysqli_fetch_row($resultado_consulta)) {
						?>
							<tr>
								<td>									
									<p> <?php echo $registro[0]; ?> </p>
								</td>
								<td>
									<p> <?php echo $registro[1]; ?> </p>
								</td>
								<td>
									<p>
										<?php
											echo $registro[2];
											$valor_total += $registro[2];
										?>
									</p>
								</td>
							</tr>
						<?php
							}
						?>
					</table>
					
					<p>Total: <?php echo $valor_total; ?></p>
					<p> <a href="vendas.php"> Fechar recibo </a> </p>
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