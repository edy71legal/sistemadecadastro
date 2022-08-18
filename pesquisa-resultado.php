<?php
 // Conectando ao banco de dados:
 include_once("conecta.php");
 
 // Recebendo os dados a pesquisar
 $pesquisa = $_POST['clientes'];
?>

 <html>
 <head>
 <link href="estilos.css" rel="stylesheet" type="text/css">
 <title>Resultado da pesquisa</title>
 </head>
 <body>
 
 <!-- Criando tabela e cabeçalho de dados: -->
 <table border="1" style='width:50%'>
 <tr>
 <th>NOME</th>
 <th>ENDEREÇO</th>
 <th>CIDADE</th>
 <th>Opções</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM cadastro_cliente WHERE nome = '$pesquisa'";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $nome = $registro['nome'];
   $endereco = $registro['endereco'];
   $telefone = $registro['telefone'];
   echo "<tr>";
   echo "<td>".$nome."</td>";
   echo "<td>".$endereco."</td>";
   echo "<td>".$telefone."</td>";
    echo "<td>
		<a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
		<a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
						</td>";

   echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";
?>
</body>
</html>