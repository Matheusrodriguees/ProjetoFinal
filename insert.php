<?php

require_once "banco.php";

    $idOrdem = $_POST['idOrdem'];
    $nomeCli = $_POST['nomeCli'];
    $produto = $_POST['produto'];
    $idTecnico = $_POST['idTecnico'];
    $nomeTec = $_POST['nomeTec'];

$sqlInsert = "INSERT INTO Empr (idOrdem,nomeCli,user_produto,idTecnico,nomeTec) values ($idOrdem, $nomeCli, $produto, $idTecnico, $nomeTec)";

$rs = mysqli_query($banco,$sqlInsert)
or
die("Erro ao cadastrar os dados");

echo "Dados cadastrados com sucesso!";

?>