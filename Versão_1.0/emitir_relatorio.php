<?php //CÓDIGO PARA EMITIR O RELATORIO DE EMPRESTIMOS NO PERIODO SELECIONADO PELO USUARIO

include('relatorios.php');



    if(isset($_POST['emissao'])){
        $data_inicial = $_POST['data_inicial'];
        $data_final = $_POST['data_final'];
        
        if (!$con){
            die("Conexão falha" . mysqli_connect_error());
        }

  //      $consulta_relatorio = "SELECT nome, periodo, equipamento, observacoes, data_emp, id_emp, data_dev, observacoes_dev 
  //                             FROM emprestimos
   //                            WHERE data_emp >= '" . $data_inicial . "' and data_emp <= '" . $data_final . "'";
        
    //    $result_relatorio = $con->query($consulta_relatorio);  
        
    }
    mysqli_close($con);
?>