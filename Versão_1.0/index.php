<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
	<title>Gerenciador de empréstimos de dispositivos</title>
	
		<link rel="icon" href="https://img.icons8.com/fluency/256/technology-items.png" type="image/x-icon">
<!-- Bootstrap CSS -->
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
        
</head>
<nav class="navbar navbar-expand-lg navbar-light" style=" background-color: #e4e4e4">
<a href="https://fatecararas.cps.sp.gov.br/" rel="home" title="Fatec Araras">
    <a href="https://fatecararas.cps.sp.gov.br/" class="custom-logo-link" rel="home" aria-current="page">
    <img width="280" height="75" src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/19/2022/11/fatec_ra_campinas__araras_e_marilia__editavel_araras.png" class="custom-logo" alt="Fatec Araras" /></a>

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
 
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw mb-4" font=>Gerenciador de dispositivos Fatec</h2>

            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <!-- Username input -->
                <div class="form-outline mb-4">
                    <label class="form-label">Usuário</label>
                    <input type="text" name="username" value="" class="form-control">
                    <span class="help-block"></span>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label">Senha</label>
                    <input type="password" name="password" value="" class="form-control">
                   
                    <span class="help-block"></span>
                </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-danger">Entrar</button>
            
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="./img/work3.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
</body>
</html>