<?php 

$dsn = "mysql:dbname=blog;host=127.0.0.1"; 
$dbuser = "root";
$dbpass = ""; 

// conectando ao banco 
try 
{
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	echo "Conexão estabelecida!!"; 

	$sql = "SELECT * FROM posts"; 
	$dado = $pdo->query($sql); 

	if($dado->rowCount() > 0) 
	{
		echo "tem posts cadastrados";
		foreach ($dado->fetchAll() as $post) 
	     {
			echo "<p><b>Título</b>:".$post['titulo']."<br>"; 
			echo "<b>Autor:<i>".$post['autor']."</i>";
			echo "- <b>Data de criação:</b>".$post['data_criado']."</p>"; 
			echo "<p><b>Conteudo: </b><br>".$post['conteudo']."</p></b>"; 
			echo "<hr>";
		}
	} 

	else 
	{
		echo "não ha posts nenhum"; 

	}

} 
catch (PDOException $e) 
{
	echo "Falhou:".$e->getMessage();
} 

