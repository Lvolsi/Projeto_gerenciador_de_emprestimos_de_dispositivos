<?php
if(isset($_POST['Enviar'])){
    $vnome = $_POST["nome"];
    $vequip = $_POST["equip"];
    $vdata = $_POST["data"];
    $vperiodo = $_POST["periodo"];
    $vobs = $_POST["obs"];
  

    $host = "localhost";
    $banco = "gerenciador_v1";
    $user = "root";
    $senha_user = ""; // put your database password here

    $con = mysqli_connect($host, $user, $senha_user, $banco);

    if (!$con){
        die("Conexão falha" . mysqli_connect_error());
       
    }

    $sql = "INSERT INTO emprestimos (nome, equipamento, periodo, observacoes, data_emp) 
            VALUES ('$vnome', '$vequip', '$vperiodo', '$vobs','$vdata')";

    if(mysqli_query($con, $sql)){
        echo "Empréstimo realizado com sucesso.";
    } else{
        echo "Erro: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

<?php
/*<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'teste pi');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');*/