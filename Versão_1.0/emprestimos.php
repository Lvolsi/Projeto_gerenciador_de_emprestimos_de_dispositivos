<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }
    
?> 


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	<title>Gerenciador de empréstimos de dispositivos</title>
		<link rel="icon" href="https://img.icons8.com/external-icongeek26-outline-icongeek26/256/external-education-education-icongeek26-outline-icongeek26-1.png" type="image/x-icon">
<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light" style=" background-color: #e4e4e4">
    <a href="https://fatecararas.cps.sp.gov.br/" rel="home" title="Fatec Araras">
    <a href="https://fatecararas.cps.sp.gov.br/" class="custom-logo-link" rel="home" aria-current="page">
    <img width="280" height="75" src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/19/2022/11/fatec_ra_campinas__araras_e_marilia__editavel_araras.png" class="custom-logo" alt="Fatec Araras" /></a></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/Lvolsi/Projeto_gerenciador_de_emprestimos_de_dispositivos">Sobre nós</a>
      </li>
  </ul>
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
<!--<input type="submit" name="Enviar">-->
<button class="btn btn-danger" type="submit" name="Enviar">Enviar</button>
</form>
</body>