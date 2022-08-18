sis

<?php

 $servidor = 'localhost';  //Nome do servidor = localhost (com aspas simples)
$banco = 'sistema_login'; // Nome do banco de dados que sera aberto
$usuario = 'root'; // nome do usuario do banco
$senha = ''; // senha do banco em branco

//1° passo: Conectar ao servidor

$conexao = mysqli_connect($servidor, $usuario, $senha);
if (! ($conexao)) 

{
echo "Não foi possível estabelecer uma conexão com o MySQL.";
exit;
}

//2° passo: Selecionar o Banco de Dados 
$selecao = mysqli_select_db($banco,$conexao);
if (! ($selecao)) 
{
echo "Não foi possível selecionar o gerenciador MySQL.";
exit;
}
?>
