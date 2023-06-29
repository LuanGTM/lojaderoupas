<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> LIZZ </h1>
					<h4> Venda de roupas masculinas e femininas </h4>
				</div>
				<div id="menu_global"  class="menu_global">
					<ul>
                        <li> Olá <?php include "valida_login.php";?></li>
						<li><a href="logout.php" class="active">Sair</a></li>
					</ul>                
				</div>
			</div>
			<div id="conteudo_especifico">
				<div class="div_central centralizar menu_local">
					<h1> ADMINISTRAÇÃO </h1>
					<?php

						include "menu_local.php";
					
					?>
				</div>
			</div>
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> LIZZ - CONTROL </h6> 
						<h6> Rua 324, CJ 788 -- E-mail: contato@lizzroupas.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
				
		</div>
    </body>
</html> ABACATE
