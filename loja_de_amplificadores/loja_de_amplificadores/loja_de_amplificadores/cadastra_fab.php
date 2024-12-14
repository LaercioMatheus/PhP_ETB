<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro de Funcionários</title>
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
				
				<h1> CADASTRO DE FORNECEDORES </h1>
			
				<form method="post" action="processa_cadastra_fab.php">
					<table class="centralizar">	
						<tr>
							<td>
								<p> Nome: </p>
							</td>
							<td>
								<p> <input type="text" name="nome" required> </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Endereço:  </p>
							</td>
							<td> 
								<p> <input type="text" name="endereco" required> </p>
							</td>
						</tr>

						<tr>
							<td>
								<p> Telefone:  </p>
							</td>
							<td>
								<p> <input type="tel" name="telefone" required>  </p>
							</td>
						</tr>


						<tr>
							<td>
								<p> Nome do Encarregado:  </p>
							</td>
							<td>
								<p> <input type="text" name="nome_enc" required>  </p>
							</td>
						</tr>

						<tr>
							<td>
								<p> Tipo de amplificador fornecido:  </p>
							</td>
							<td>
								<p>
									<input type="radio" name="produto" value="guitarra" checked> Guitarra
									<input type="radio" name="produto" value="baixo"> Baixo
									<input type="radio" name="produto" value="violao"> Violão
								</p>
							</td>
						</tr>

						<tr>
							<td>
								<p> Nome da Empresa:  </p>
							</td>
							<td>
								<p> <input type="text" name="nome_emp" required>  </p>
							</td>
						</tr>

						<tr>
							<td colspan="2">
								<!--BOTÃO DE CADASTRAR-->
								<p> <input type="submit" value="Cadastrar Fabricante"> </p>
							</td>
						</tr>
					</table>
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