<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<p>Voici la liste des films avec utilisateurs :</p>	
<?php

try

{
    $bdd = new PDO('mysql:host=localhost;dbname=filmographie;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}







?>
























</body>
</html>