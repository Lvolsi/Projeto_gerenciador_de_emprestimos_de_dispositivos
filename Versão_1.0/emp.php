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
    $senha_user = ""; // senha do banco de dados

    $con = mysqli_connect($host, $user, $senha_user, $banco);

    if (!$con){
        die("Conexão falha" . mysqli_connect_error());
    }

    $sql = "INSERT INTO emprestimos (nome, equipamento, periodo, observacoes, data_emp) 
            VALUES ('$vnome', '$vequip', '$vperiodo', '$vobs', '$vdata')";

    if(mysqli_query($con, $sql)){
        echo "Empréstimo realizado com sucesso.";
    } else{
        echo "Erro: " . mysqli_error($con);
    }

    mysqli_close($con);
}


?>