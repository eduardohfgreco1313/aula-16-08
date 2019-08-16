<?php 

$dsn = "mysql:dbname=blog;host=127.0.0.1"; 
$dbuser = "root";
$dbpass = ""; 

// conectando ao banco 
try 
{
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	echo "Conexão estabelecida!!!"; 

	$sql = "SELECT * FROM posts"; 
	$dado = $pdo->query($sql); 

	if($dado->rowCount() > 0) 
	{
		echo "tem posts cadastrados";
	} 

	else 
	{
		echo "não ha posts nenhum";
	}

} 
catch(PDOExce ption $e) 
{
	echo "Falhou:".$e->getMessage();
} 

