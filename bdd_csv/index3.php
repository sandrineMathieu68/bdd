<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<p>Voici la liste des films rajouté :</p>	
<?php

try

{
    $bdd = new PDO('mysql:host=localhost;dbname=filmographie;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// On ajoute une entrée dans la table jeux_video

$bdd->exec('INSERT INTO films(titre, annee, description, realisateur, genre) VALUES(\'Old boy\', 2003, \'L’histoire de Joe Doucette (Josh Brolin) brutalement kidnappé et séquestré en cellule d’isolement pendant 20 ans, sans la moindre explication. Enfin libéré, sans plus de raisons apparentes, il se lance dans une quête forcenée pour découvrir qui l’a emprisonné, prenant progressivement conscience que le vrai mystère demeure dans sa libération.\', \'Park Chan-Wook\',\'Thriller\')');


echo 'Le jeu a bien été ajouté !';

?>
























</body>
</html>