<?php include("menu.php");?>
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
    
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Atualizar</title>
</head>

<body>

      <table width="490" height="440" border="1" align="center">
            <form method="post" action="update.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Ordem de Serviço</font>
            </td>
            <td width="20">
               <font size="2">
                  <input name="idOrdem" type="number" id="idOrdem" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome do Cliente</font>
            </td>
            <td width="20">
               <font size="2">
                  <input name="nomeCli" type="text" id="nomeCli" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Produto</font>
            </td>
            <td width="20">
               <font size="2">
                  <input name="produto" type="text" id="produto" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">IdTecnico</font>
            </td>
            <td width="20">
               <font size="2">
                  <input name="idTecnico" type="number" id="idTecnico" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome do Tecnico</font>
            </td>
            <td width="20">
               <font size="2">
                  <input name="nomeTec" type="text" id="nomeTec" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>
         
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Pagamento</font>
            </td>
            <td width="20">
               <font size="2">
                  <input name="pagamento" type="text" id="pagamento" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>        
         
        <tr> 
            <td>
               <font face="Verdana, Arial, Helvetica, sans-serif">
                  <font size="1">Descrição<strong>:</strong></font>
               </font>
            </td>
            <td rowspan="2">
               <font size="2">
                  <textarea name="servico" cols="50" rows="8" class="formbutton" id="servico" input></textarea>
               </font>
            </td>
         </tr>
            <td height="85">
               <p><strong>
                     <font face="Verdana, Arial, Helvetica, sans-serif">
                        <font size="1">
                        </font>
                     </font>
                  </strong></p>
            </td>
         </tr>
         <tr>
            <td height="22"></td>
            <td>
               <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
               <input name="Reset" type="reset" class="formobjects" value="Limpar campos">


               <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
         </tr>
      </table>
   </form>
</body>

</html>