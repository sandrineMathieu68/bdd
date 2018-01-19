<?php



/**
* 
*/
class postController
{
	//C'EST LA CLASSE QUI VA GERER PLUSIEURS ACTIONS
	// TOUJOURS NOMMER LE MEME NOM QUE LE FICHIER
	function __construct($request)
	{
		$servername = "localhost";
$username = "root";
$password = "";

try {
$pdo = new PDO("mysql:host=$servername;dbname=films", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connected successfully"; 
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
	}
}

?>