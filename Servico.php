<?php require_once("banco.php")?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <?php include("head.php") ?>
    <script language="javascript" type="text/javascript">
    function formatarMoeda() {
        var elemento = document.getElementById('idOrdem');
        var valor = idOrdem.value;
        valor = valor + '';
        valor = parseInt(valor.replace(/[\D]+/g, ''));
        valor = valor + '';
        valor = valor.replace(/([0-9]{2})$/g, ",$1");
        if (valor.length > 6) {
            valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
        }
        elemento.value = valor;
    }
    function validar(formulario) {
        var nomeCli = form.nomeCli.value;
        var idOrdem = form.idOrdem.value;
        for (i = 0; i <= formulario.length - 2; i++) {
            if ((formulario[i].value == "")) {
            alert("Preencha o campo " + formulario[i].name);
            formulario[i].focus();
            return false;
            }
        }
        if (quantidade <= 0) {
            alert('A quantidade de páginas não pode ser igual ou inferior a 0');
            form.nomeCli.focus();
            return false;
        }
        if (preco <= 0) {
            alert('O preço do livro não pode ser igual ou infeiror a 0');
            form.idOrdem.focus();
            return false;
        }
        formulario.submit();
    }
    </script>

<body>

    <?php new Banco();?>
    <?php include("menu.php");?>

      <table width="480" height="240" border="1" align="center">
            <form method="post" action="ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Ordem de Serviço</font>
            </td>
            <td width="20">
               <font size="2">
                  <input name="idOrdem" type="text" id="idOrdem" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif"> Andamento do serviço </font>
            </td>
            <td width="20">
               <font size="2">
                  <input name=" andaServico " type="text" id="andaServico" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Pagamento </font>
            </td>
            <td width="20">
               <font size="2">
                  <input name="pagamento " type="text" id="pagamento " size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">IdTecnico</font>
            </td>
            <td width="20">
               <font size="2">
                  <input name="idTecnico" type="text" id="idTecnico" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>

    </table>
    
    <table align="center">
        <tr>
            <td height="10"></td>
            <td>
               <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
               <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
            </td>
        </tr>
        </form>
    </table>

    
</body>
</html>