<?php
    $vnome = $_POST["nome"];
    $vequip = $_POST["equip"];
    $vdata = $_POST["data"];
    $vobs = $_POST["obs"];
    $vqtd = $_REQUEST["qtd"];
    $vperiodo = $_POST["periodo"];

    echo "Nome do professor: ".$vnome;

    echo "<br/> Equipamento: ".$vequip;

    echo "<br/> Quantidade: ".$vqtd;
   
    echo "<br/> Data: ".$vdata;
   
    echo "<br/> Período de utilização: ".$vperiodo;
    
    echo "<br/> Observações: ".$vobs;


     $arq = "emprestimos.txt";

    if(!file_exists("emprestimos.txt"))
                    
        {
            $handle = fopen("emprestimos.txt", "w");
        }     else {
            $handle = fopen("emprestimos.txt", "a");
        }
        
    fwrite($handle, "\n");
    fwrite($handle, "*************************************** \n");
    fwrite($handle, "ID do empréstimo: ");
    fwrite($handle, $vnome.$vdata."\n");
    fwrite($handle, "Nome do professor: ");
    fwrite($handle,$vnome."\n");
    fwrite($handle, "Equipamento: ");
    fwrite($handle,$vequip."\n");
    fwrite($handle, "Quantidade: ");
    fwrite($handle,$vqtd."\n");
    fwrite($handle, "Data: ");
    fwrite($handle,$vdata."\n");
    fwrite($handle, "Período: ");
    fwrite($handle,$vperiodo."\n");
    fwrite($handle, "Observações: ");
    fwrite($handle,$vobs."\n");
    fwrite($handle, "***************************************");  

    fflush($handle);
    fclose($handle);

?>