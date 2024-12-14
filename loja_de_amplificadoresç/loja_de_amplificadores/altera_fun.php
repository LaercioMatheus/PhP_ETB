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
										Nome_FUN, Funcao_FUN, Login_FUN, Senha_FUN, Status_FUN
									FROM 
										funcionarios
									WHERE
										Cod_FUN = '$cod'";

					$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

					$registro = mysqli_fetch_row($resultado_pesquisa);

				?>

				<form action="processa_altera_fun.php" method="post">
				
				<!--<input type="text" name="codigo" value="</*?php echo $cod;?*/>">-->
					<input type="hidden" name="codigo" value="<?php echo $cod;?>">
				<?php
					if ($registro[1] == "administrador") {
				?>
						<input type="hidden" name="funcao" value="<?php echo $registro[1];?>">
						<p>
							Senha:
							<input type="password" name="senha" value="<?php echo $registro[3];?>" required>
						</p>
				<?php
					} else {
				?>
						<p>
						Nome:
							<input type="text" name="nome" value="<?php echo $registro[0];?>" required>
						</p>
						<p>
						Função:
							<input type="radio" name="funcao" value="estoquista"
							<?php
								if ($registro[1] == "estoquista") {
									echo "checked";
								}
							?>>  Estoquista

							<input type="radio" name="funcao" value="vendedor"
							<?php
								if ($registro[1] == "vendedor") {
									echo "checked";
								}
							?>> Vendedor
						</p>

						<p>
							Login:
							<input type="text" name="login" value="<?php echo $registro[2];?>" required>
						</p>

						<p>
							Senha:
							<input type="password" name="senha" value="<?php echo $registro[3];?>" required>
						</p>

						<p>
							Status:
							<select name="status">
								<option value="ativo"
									<?php
										if ($registro[4] == "Ativo") {
											echo "selected";
										}
									?>> Ativo
								</option>
								<option value="inativo"
									<?php
										if ($registro[4] == "Inativo") {
											echo "selected";
										}
									?>> Inativo
								</option>
							</select>
						</p>

				<?php
					}	
				?>
					<p><input type="submit" value="Alterar Funcionário"></p>

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