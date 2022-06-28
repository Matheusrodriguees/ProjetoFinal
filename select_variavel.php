<?php include("head.php");?>
<?php include("menu.php");?>

<body>
    <table >
        <h1 align='center'>
            Status do Serviços
        </h1>
    </table>
</body>

<?php
require_once"banco.php";
date_default_timezone_set('America/Sao_Paulo');


echo "</br></br>";

$sqlSelect = "SELECT * FROM Empr";
$rs = mysqli_query($banco, $sqlSelect);


if (mysqli_num_rows($rs) > 0){
    echo "<div class='container row' >";
    echo "<table  class='table table-white table-borderless d-flex justify-content-center' >";
    echo "<tr>";
        echo "<th> idOrdem </th>";
        echo "<th> idTecnico </th>";
        echo "<th> nomeCli </th>";
        echo "<th> nomeTec </th>";
        echo "<th> produto </th>";
        echo "<th> servico </th>";
        echo "<th> pagamento </th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($rs)){
    echo "<tr>";
        echo "<td>".$row["idOrdem"]."</td>";
        echo "<td>".$row["idTecnico"]."</td>";
        echo "<td>".$row["nomeCli"]."</td>";
        echo "<td>".$row["nomeTec"]."</td>";
        echo "<td>".$row["produto"]."</td>";
        echo "<td>".$row["servico"]."</td>";
        echo "<td>".$row["pagamento"]."</td>";
    echo "</tr>";
    }
    echo "</table>";
    echo "</div>";

} else{
echo "Não foram encontrados registros cadastrados!";
}
mysqli_close($banco);
?>
        <table>
            <td>
                
            </td>
        </table>
        <table width="60" border="1" align="center">
            <form method="post" action="ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10" color="#40EB8D">
            <tr>
                <td>
               <button class="waves-effect waves-light btn" type="submit" name="action" formaction="atualizar.php">Update
               </button> 
               </td>
               <td>
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="deletar.php">deleta
                </button> 
                </td>
                <td>
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="select_variavel.php">Ler
                </button> 
                </td>
                <td>
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="CadastroEmp.php">inserir
                </button> 
                </td>
            </tr>     
            </form>
        </table>