<?php
//CÓDIGO PARA ENVIAR AS INFORMAÇÕES DO EMPRÉSTIMO PARA O BANCO 
include('conexao_banco.php');  
if(isset($_POST['Enviar'])){

    $vnome = $_POST["nome"];
    $vequip = $_POST["equip"];
    $vdata_emp = $_POST["data"];
    $vperiodo = $_POST["periodo"];
    $vobs = $_POST["obs"];
    
   
   
    if (!$con){
        die("Conexão falha" . mysqli_connect_error());
    }

    $sql = "INSERT INTO emprestimos (nome, equipamento, periodo, observacoes, data_emp) 
            VALUES ('$vnome', '$vequip', '$vperiodo', '$vobs', '$vdata_emp')";

    if(mysqli_query($con, $sql)){
        echo "Empréstimo realizado com sucesso.";
    } else{
        echo "Erro: " . mysqli_error($con);
    }

    mysqli_close($con);
}


?>