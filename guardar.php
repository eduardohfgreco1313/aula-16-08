<?php 

$dsn = "mysql:dbname=blog;host=127.0.0.1"; 
$dbuser = "root";
$dbpass = ""; 

// conectando ao banco 
try 
{
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$titulo = "Tudo sobre CMS"; 
	$autor = "Denny"; 
	$data_criado = "2019-08-16 00:00:00"; 
	$conteudo = 'YIIIIIIIIIIIIIIIIIIIIIIIIKES'; 

	$sql = "INSERT INTO posts SET titulo ='$titulo',autor = '$autor',data_criado = '$data_criado',conteudo = '$conteudo'"; 

	$pdo->query($sql); 

	echo "Titulo inserido com sucesso:".$pdo->lastInsertId();
} 

catch (PDOException $e) 
{
	echo "Falhou:".$e->getMessage();
} 
