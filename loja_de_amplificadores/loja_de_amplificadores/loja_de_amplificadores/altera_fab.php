<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alterar Usuários</title>
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
			<div id="conteudo_especifico" class="centralisar">
				<h1> ALTERAÇÃO DE USUÁRIOS </h1>
			
				<?php

					//CONECCAO COM O BANCO DE DADOS
					$conectar = mysqli_connect ("localhost", "root", "", "35936x");
					$cod = $_GET["codigo"];

					//PESQUISANDO OS DADOS DENTRO DO BANCO DE DADOS
					$sql_pesquisa = "SELECT
										Nome_FAB, Endereco_FAB, Telefone_FAB, Encarregado_Vendas_FAB, Produto_FAB, Empresa_FAB
									FROM 
										fabricantes
									WHERE
										Cod_FAB = '$cod'";

					$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

					$registro = mysqli_fetch_row($resultado_pesquisa);

				?>

				<form action="processa_altera_fab.php" method="post">
				
				<!--<input type="text" name="codigo" value="</*?php echo $cod;?*/>">-->
					<input type="hidden" name="codigo" value="<?php echo $cod;?>">
			
						<p>
						Nome:
							<input type="text" name="nome" value="<?php echo $registro[0];?>" required>
						</p>

						<p>
							Endereço:
							<input type="text" name="endereco" value="<?php echo $registro[1];?>" required>
						</p>


                        <p>
							Telefone:
							<input type="tel" name="telefone" value="<?php echo $registro[2];?>" required>
						</p>

                        <p>
							Encarregado:
							<input type="text" name="nome_enc" value="<?php echo $registro[3];?>" required>
						</p>

                        <p>
                        Produto:
							<input type="radio" name="produto" value="guitarra"
							<?php
								if ($registro[4] == "guitarra") {
									echo "checked";
								}
							?>>  Guitarra

							<input type="radio" name="produto" value="baixo"
							<?php
								if ($registro[4] == "baixo") {
									echo "checked";
								}
							?>> Baixo

                            <input type="radio" name="produto" value="violao"
							<?php
								if ($registro[4] == "violao") {
									echo "checked";
								}
							?>> Violão
						</p>

                        <p>
							Empresa:
							<input type="text" name="nome_emp" value="<?php echo $registro[5];?>" required>
						</p>

					<p><input type="submit" value="Alterar Fornecedores"></p>

				</form>

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