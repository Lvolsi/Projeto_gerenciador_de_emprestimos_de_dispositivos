<?php
include_once('emp.php');


if(isset($_POST['Devolver'])){
    
   // $data_dev = date("d/m/y");
   // $obs_dev = $_POST["obs_dev"];
   // $status_emp = $_POST["status_emp"];
   

    $consulta = "SELECT nome, periodo, equipamento, observacoes, data_emp AS data FROM emprestimos";
    $result = $con->query($consulta);
    print_r($result);

    if (!$con){
        die("Conexão falha" . mysqli_connect_error());
    }
    
    if(mysqli_query($con, $sql,$result)){
        echo "Devolução realizada com sucesso.";
    } else{
        echo "Erro: " . mysqli_error($con);
    }
    mysqli_close($con);
}

//DICA PARA O 'TRIGGER' DO BANCO PARA MUDAR O STATUS $sql = "UPDATE emprestimos SET status_emp='1' WHERE authorid=1";



/*


    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }

if(isset($_POST['Devolver'])){
    
    $data_dev = date("d/m/y");
    $obs_dev = $_POST["obs_dev"];
    $status_emp = $_POST["status_emp"];

    $host = "localhost";
    $banco = "gerenciador_v1";
    $user = "root";
    $senha_user = ""; // senha do banco de dados

    $con = mysqli_connect($host, $user, $senha_user, $banco);
    
    if (!$con){
        die("Conexão falha" . mysqli_connect_error());
    }

    /*Mostrar os dados dos empréstimos ativos na tela, inserir data e observações de devolução
    $sql = "INSERT INTO emprestimos (data_dev, obs_dev) 
            VALUES ('$data_dev', '$obs_dev')
            WHERE 'empréstimo selecionado para devolução";
    DICA PARA O BANCO PARA MUDAR O STATUS $sql = "UPDATE emprestimos SET status_emp='1' WHERE 'empréstimo selecionado para devolução' ";

        
    if(mysqli_query($con, $sql)){
        echo "Devolução realizada com sucesso.";
    } else{
        echo "Erro: " . mysqli_error($con);
    }
    mysqli_close($con);
}

$sql = "SELECT nome, equipamento, periodo, observacoes, data_emp, id_emp FROM emprestimos";
                    
$result = $con->query($sql);

print_r($result);*/
?>