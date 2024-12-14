<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fornecedores</title>
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
					<p> Olá <?php include "valida_login.php"?>
					<?php include "menu_local.php"; ?></p>

				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> FORNECEDORES </h1>
				<p text-align="right">
					<a href="cadastra_fab.php">
						Cadastro de Fornecedores
					</a>				
				</p>
				
				<?php
				//CONECCAO COM O BANCO DE DADOS
					$conectar = mysqli_connect ("localhost", "root", "", "35936x");

					//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
					$sql_pesquisa = "SELECT
                                        Cod_FAB, Nome_FAB, Endereco_FAB, Telefone_FAB, Encarregado_Vendas_FAB, Produto_FAB, Empresa_FAB
									FROM 
										fabricantes";

#ONDE ESTA A TABELA VINDA DO BANCO DE DADOS
					$sql_resultado = mysqli_query($conectar, $sql_pesquisa);

				?>

		<table class="style_tabela">
				<tr>
					<td>
						NOME DO FABRICANTE
					</td>				
					<td>
						ENDEREÇO
					</td>				
					<td>
						TELEFONE
					</td>
                    <td>
                        NOME DO ENCARREGADO
                    </td>
                    <td>
                        AMPLIFICADORES FORNECIDOS
                    </td>
					<td>
						EMPRESA
					</td>
					<td>
						AÇÃO
					</td>
				</tr>

				<?php
					while ($registro = mysqli_fetch_row($sql_resultado)) {
				?>

				<tr>
					<td><!--NOME-->
						<!--ISSO CASO ESSE LINHA DA TABELA FOR UM LINK-->
						<a href="exibe_fab.php?codigo=<?php echo $registro[0]; ?>">
							<?php echo $registro[1]; ?>
						</a>
					</td>				
					<td>
						<!--ENDERECO-->						
						<?php echo $registro[2]; ?>
					</td>
					<td>
                        <!--TELEFONE-->
                        <?php echo $registro[3]; ?>
					</td>
                    <td>
                        <!--NOME ENCARREGADO-->
						<?php echo $registro[4]; ?>
					</td>
                    <td>
                        <!--PRODUTOS-->
						<?php echo $registro[5]; ?>
                    </td>

					<td>
                        <!--NOME DA EMPRESA-->
						<?php echo $registro[6]; ?>
                    </td>

					<td><!--CODIGO ACAO-->
						<a href="altera_fab.php?codigo=<?php echo $registro[0]; ?>">
							Alterar
						</a>
					</td>
				</tr>

				<?php
					}
				?>
		</table>

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