<?php
/**
* 
*/
class Router 
{


	//on va crée une fonction dans le router  pour récupérer les informations après le dernier/ on récupère le controller qui sera post ou un autre nom ,puis on récupère l'action et les paramètres
	public static function parse($url, $request) // Ne pas oublier de la mattre en static
	{

		// AFIN D'EVITER UNE CHAINE DE CARACTERE VIDE, on utilise la fonction trim POUR UNE CHAINE A SUPPRIMER cela evite des erreurs
		$url = trim($url);// en mettant ensuite $url = trim('-',$url);
		
		// On va lui demander d'EXPLOSER la chaine de l'url afin de remplacer les /
		$parts = explode('/', $url);
		// On va prendre une fonction end qui va prendre le dernier index d'un tableau  ex :var_dump(end($morceau));
		
		$pattern = explode('-', end($parts));//on doit rajouter ces informations à l'objet Request var_dump($pattern);
		// On ajoute le controller
		$request->controller = $pattern[0];
		// On ajoute l'action
		$request->action = $pattern[1];
		// On ajoute les paramétres Comme on ne sait pas combien de paramétre prendra une fonction DONC on va devoir dire qu'on veut toutes les informations après le deuxième index en utilisant la fonction array_slice ($pattern, 2//je saute les 2 premiers elements)
		$request->params = array_slice($pattern, 2);

		

	}

}

?>