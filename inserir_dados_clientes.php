<html> 
<head>
	<meta charset="UTF-8">
<title> </title>
</head>
<body> 


<?php 

// Comando para inserir dados no banco
include "conecta_banco.php"; // include de abertura de conecção com banco

mysql_query ("INSERT INTO cadastro_cliente (codigo,nome,endereco) VALUES ('','$_POST[nome]','$_POST[endereco]') ")
or die ("Não inseriu");

echo "<br><br><br><br><br>";

echo " <h2> <center> Dados inseridos no banco com sucesso!</center></h2>";

?>
<br><br><br><br><br>
<h2>
<a href="cad_clientes.php" >  <center>Voltar ao cadastro </center></a> 
</h2>

</body> 
</html>

