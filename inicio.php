 <html>
    
    <body> 

     <?php include("head.php");?>
     <?php include("menu.php");?>
        <table width="888" height="400" border="1" align="center">
            
            <tr>
                <td align="center" color="#40EB8D">
                    <font size="150" face="Verdana, Arial, Helvetica, sans-serif">Seja Bem-Vindo</font>
 
                </td>
            </tr>


        </table>
                <br></br>
        <table width="115" border="1" align="center">
            <form method="post" action="ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10" color="#40EB8D">
            <tr>
                <td>
               <button class="waves-effect waves-light btn" type="submit" name="action" formaction="select_variavel.php">Ver serviços
               </button> 
                </td>
            </tr>     
            </form>
        </table>




</body>
</html>