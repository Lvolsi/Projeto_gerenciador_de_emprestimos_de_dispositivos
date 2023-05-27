<?php //CÓDIGO PARA MANDAR AS INFORMAÇÕES DO ITEM A SER DEVOLVIDO PARA O BANCO

include_once('devolucoes.php');

    $id_emp = isset($_POST['id_emp']) ? $_POST['id_emp'] : 0;

    $consulta = "SELECT nome, periodo, equipamento, observacoes, data_emp, id_emp 
                FROM emprestimos
                where status_emp = 0";
    $result = $con->query($consulta);  

if(isset($_POST['Devolver'])){
    $data_devolucao = $_POST['data_dev'];
    $observacoes_dev = $_POST['observacoes_dev'];
    
    $id_emprestimo_selecionado = $_POST['selecionar'];
    
    if (!$con){
        die("Conexão falha" . mysqli_connect_error());
    }
 



    // Verificação se há um empréstimo selecionado
    if (!empty($id_emprestimo_selecionado)) {
    $id_emp = $id_emprestimo_selecionado[0]; // Acessando o primeiro empréstimo selecionado

    // Atualização do campo status_emp para 1 (verdadeiro)
    $sql = "UPDATE emprestimos
            SET 
            status_emp = 1,
            observacoes_dev = '$observacoes_dev', 
            data_dev = '$data_dev'
            WHERE id_emp = $id_emp";
    }

    if(mysqli_query($con, $sql)){
        echo "Devolução realizada com sucesso.";
        
    } else{
        echo "Erro: " . mysqli_error($con);
    }
//   mysqli_close($con);
}

?>