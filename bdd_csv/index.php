<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<p>Voici la liste des films disponible :</p>
<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=filmographie;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



// On récupère tout le contenu de la table jeux_video

$reponse = $bdd->query('SELECT * FROM films');


// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())

{

?>


<!-- EXERCICE 1 -->
    <p>
    <strong>Titre</strong> : <?php echo $donnees['titre']; ?><br />
    <strong>Année</strong> : <?php echo $donnees['annee']; ?><br />
    <strong>Genre</strong> : <?php echo $donnees['genre']; ?><br />
   </p>

<?php

}


$reponse->closeCursor(); // Termine le traitement de la requête











?>
























</body>
</html>