<?php include("head.php");?>
<?php include("menu.php");?>
<?php

include_once "banco.php";

$idOrdem = $_POST['idOrdem'];


$sqlDelete = "DELETE FROM Empr WHERE  idOrdem = '" .$idOrdem."' ";

if (!mysqli_query($banco, $sqlDelete)){
    die('Erro ao excluir o registro: ' .mysql_error($banco));
}

echo "<CENTER> registro deletado com sucesso. <br/></CENTER>";
mysqli_close($banco);

?>