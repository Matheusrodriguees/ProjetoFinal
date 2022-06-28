     <?php include("head.php");?>
     <?php include("menu.php");?>
<?php

require_once "banco.php";

        $idOrdem = $_POST['idOrdem'];
        $nomeCli = $_POST['nomeCli'];
        $produto = $_POST['produto'];
        $idTecnico = $_POST['idTecnico'];
        $nomeTec = $_POST['nomeTec'];
        $servico = $_POST['servico'];
        $pagamento = $_POST['pagamento'];        
        
        
        $sqlUpdate = "UPDATE Empr SET nomeCli = '" . $nomeCli . "', produto = '" . $produto . "', idTecnico = '" . $idTecnico . "', nomeTec = '" . $nomeTec ."', servico = '" . $servico ."', pagamento = '" . $pagamento . "' WHERE idOrdem = '" . $idOrdem . "'";
        
        if (!mysqli_query($banco, $sqlUpdate)){
            die('</br> Erro no comando SQL UPDATE: ' . mysqli_error($banco));
        }else{
            echo "<script language='javascript' type='text/javascript'>
            alert('Dados Atualizados com Sucesso!')</script>";
        }
        
        mysqli_close($banco);