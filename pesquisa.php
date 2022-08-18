<html>
<head>
<title> Pesquisando Clientes </title>


</head>
<body>


<?php
ini_set('default_charset','UTF-8');

 include "menu.inc";

 ?>

<center> <font color="#000000"> <h3> Consultar Clientes</h3></font></center>
<br><br>
<center>
	<form method="POST" action="pesquisa-resultado.php" name="clientes">
    <font color="#000000">Digite o nome do cliente: </font> <input type="text" name="clientes" size="30" >
      <input type="submit" value="Pesquisar" size="20">
 </form>
</center>
</body>
</html>

