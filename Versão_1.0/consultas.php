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


<h4>Selecione o dia e hora desejadas para realizar a consulta de dispositivos disponíveis para empréstimos:</h4>


<h5>Data:</h5>
<input id="date" type="date">

<h5>Período de utilização:</h5>
<form method="post" action="cadastrar-enquete.php">
    <select name="qtd">
    <option value="bota">19h00 às 20h40</option>
    <option value="fla">20h40 às 22h30</option>
    <option value="flu">19h00 às 22h30</option>
    </select>
</form>

<button class="btn btn-primary" type="button">Realizar consulta</button>

</body>