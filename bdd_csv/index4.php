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

$titre = "Sheitan";

$annee = 2005;

$description = "Bart, Ladj, Thai, Yasmine et Eve se font virer de la boîte dans laquelle ils passaient la veille de Noël à cause de Bart qui est complètement déchiré et super violent quand il a trop bu. Les cinq jeunes ne savent pas trop comment finir leur soirée jusqu'à ce qu'Eve leur propose de passer le reste de la nuit et pourquoi pas plus, dans sa maison de campagne. Là-bas, ils se retrouvent face à des campagnards complètement arriérés qui fleurent bon la congénitalité. Il y a en particulier le grand Joseph aussi con qu'il est fort, gardien de la maison des parents d'Eve, qui se met à suivre les jeunes partout et à devenir de plus en plus louche...";

$realisateur = "Kim Chapiron";

$genre ="Thriller";

// On ajoute une entrée dans la table jeux_video

$req = $bdd->prepare('INSERT INTO films(titre, annee, description, realisateur, genre) VALUES(:titre, :annee, :description, :realisateur, :genre)');

$req->execute(array(

    'titre' => $titre,

    'annee' => $annee,

    'description' => $description,

    'realisateur' => $realisateur,

    'genre' => $genre,

    ));


echo 'Le jeu a bien été ajouté !';




?>
























</body>
</html>