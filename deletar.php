<?php include("head.php");?>
<?php include("menu.php");?>


<!DOCTYPE html>
<html lang="pt">



<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Deletar Registro</title>
</head>



<body>



<form method="post" action="delete.php" name="dados" onSubmit="return enviardados();">



<table width="588" border="0" align="center">



<tr>
<td width="118">
<font size="1" face="Verdana, Arial, Helvetica, sans-serif">Deletar Registro (id):</font>
</td>
<td width="460">
<input name="idOrdem" type="text" class="formbutton" id="idOrdem" size="52" maxlength="150">
</td>
</tr>
<tr>
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
<input name="Submit" type="submit" class="formobjects" value="Deletar">
<input name="Reset" type="reset" class="formobjects" value="Limpar campos">

<!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
</td>
</tr>
</table>
</form>
</body>



</html>