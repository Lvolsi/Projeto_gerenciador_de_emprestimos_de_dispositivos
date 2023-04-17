<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }
?> 

<!DOCTYPE html>

    <html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<title>Gerenciador de empréstimos de dispositivos</title>
			<link rel="stylesheet" type="text/css" href=".\style\style.css">
			<link rel="icon" href="https://img.icons8.com/external-icongeek26-outline-icongeek26/256/external-education-education-icongeek26-outline-icongeek26-1.png" type="image/x-icon">
</head>

<body>
<!--Cabeçalho -->  
	<header>
    
        <div class="cps-header__logo">
            <a href="https://fatecararas.cps.sp.gov.br/" rel="home" title="Fatec Araras"><a href="https://fatecararas.cps.sp.gov.br/" class="custom-logo-link" rel="home" aria-current="page"><img width="280" height="75" src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/19/2022/11/fatec_ra_campinas__araras_e_marilia__editavel_araras.png" class="custom-logo" alt="Fatec Araras" /></a></a>
        </div>     
    
  </header>  
  <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #a51b0b;">
  
    <div class="collapse navbar-collapse justify-content-end mx-auto" style="height: 50px;">
        <ul>

            <li>
                <a href="https://github.com/Lvolsi/Projeto_gerenciador_de_emprestimos_de_dispositivos"
                    style="color: #ffffff; font-size: 18  px; margin-top: 50px;">Sobre nós</a>
            </li>

        </ul>
    </div>
</nav>
 
   

<div>
  <a href="./emprestimos.php"><button class="btn btn-primary" type="button">Empréstimos</button></a>
  <a href="./devolucoes.php"><button class="btn btn-primary" type="button">Devoluções</button></a>
  <a href="./consultas.php"><button class="btn btn-primary" type="button">Consultas</button></a>
  <a href="./relatorios.php"><button class="btn btn-primary" type="button">Emissão de relatórios</button></a>
  <a href="logout.php"><button class="btn btn-primary" type="button">Sair</button>/a>
</div>

</body>