<?php
    include('emp.php');
    
    $sql = "SELECT nome, periodo, equipamento, observacoes, data_emp AS data FROM emprestimos";
    $result = $con->query($sql);
    print_r($result);

    if (!$con){
        die("Conexão falha" . mysqli_connect_error());
    }
    
    mysqli_close($con);


?>