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

<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Fatec Araras';
         header("location: pagina_inicial.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
      
   
</head>
<body>
    <div  style="text-align:center">
        <h3>Gerenciador de empréstimos Fatec/Araras</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label font size = "2">Usuário: </label>
                <input type="text" name="username" value="">
                <span class="help-block"></span>
    </div>    
        <div class="form-group"  style="text-align:center">
            <label font size = "2">Senha: </label>
            <input type="password" name="password" value="">
            <span class="help-block"></span>
        </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
        </form>
    </div>    
</body>
</html>