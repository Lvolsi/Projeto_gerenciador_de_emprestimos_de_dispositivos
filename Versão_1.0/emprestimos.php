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
			<link rel="icon" href="https://img.icons8.com/fluency/256/technology-items.png" type="image/x-icon">
</head>

<body>
<!--Cabeçalho -->  
	<header id="cps-header">
    
        <div class="cps-header__logo">
            <a href="https://fatecararas.cps.sp.gov.br/" rel="home" title="Fatec Araras"><a href="https://fatecararas.cps.sp.gov.br/" class="custom-logo-link" rel="home" aria-current="page"><img width="280" height="75" src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/19/2022/11/fatec_ra_campinas__araras_e_marilia__editavel_araras.png" class="custom-logo" alt="Fatec Araras" /></a></a>
        </div>     
    
  </header>  
  <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #a51b0b;">
  
    <div class="collapse navbar-collapse justify-content-end mx-auto" style="height: 50px;">
        <ul class="navbar-nav">

            <li class="navbar-item">
                <a href="https://github.com/Lvolsi/Projeto_gerenciador_de_emprestimos_de_dispositivos" class="nav-link"
                    style="color: #ffffff; font-size: 18  px; margin-top: 50px;">Sobre nós</a>
            </li>

        </ul>
    </div>
</nav>

<form method="post" action="emp.php">
    <h5>Nome do professor:</h5>
        <input type="text" name="nome" size="40" /> 


<h5>Equipamento:</h5>
    <input type="text" name="equip" size="40" /> 

<!-- preenchimento dinamico com php depois-->

<h5>Data:</h5>
    <input type="date" name="data" id="data">


<h5>Período de utilização:</h5>
    <select name="periodo">
        <option value="1">19h00 às 20h40</option>
        <option value="2">20h40 às 22h30</option>
        <option value="3">19h00 às 22h30</option>
        
        <option value="4">09h30 às 11h00</option>
        <option value="5">11h00 às 13h00</option>
        <option value="6">07h00 às 13h00</option>
    </select>


<h5>Observações:</h5>
    <input type="text" name="obs" size="250" /> 

<!-- <button class="btn btn-primary" type="button">Realizar empréstimo</button> -->

<input type="submit" name="Enviar">

</form>
</body>