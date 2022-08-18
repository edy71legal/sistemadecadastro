<html> 
<head>
	<meta charset="UTF-8">
<title>Formulário cadastro de cliente </title>
</head>
<body> 
	<br>
	<br>
	<br>
	<br>

<?php

ini_set('default_charset','UTF-8');

 include "menu.inc";


?>


<div id= "aluno" align="center"> 	
<h3> Formulário para Inserir Dados do cliente </h3> 
<font size="5">

<form action="inserir_dados_clientes.php" method="post"> 
Nome : <input type="text" size="50"  name="nome" required/> <br><br>
Endereço : <input type="text" size="50" name="endereco" required/> <br><br> 
Telefone : <input type="text" size="50" name="telefone" required/> <br><br> 

<button type="submit"  style="width:90;height:30"> Cadastrar </button> 
<br><br>
<button type="reset" style="width:90;height:30" > Limpar</button> 
<br>

</font>
</form>
</div>
</body> 
</html>