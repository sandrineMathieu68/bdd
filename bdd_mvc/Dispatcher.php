<?php
/**
* 
*/
class Dispatcher  // le dispatcher va appelé le controllers
{
	//IL VA PRENDRE DES INFORMATIONS DE L'URL QUI SERONT DANS L'OBJET Request ET VA LES TRAITER
	// ET VA REDIRIGER L'UTILISATEUR SUR LA PAGE DEMANDEE 

	// ON CREE UNE FONCTION DISPATCH sans paramétre


	//ON ECRIT UNE VARIABLE PRIVEE QUI SERA LA REQUETE
	private $request;
	public function dispatch(){
		// ON VA déjà INITIALISER la Request, donc on va lui passer les INFORMATIONS DE L'URL

		// DONC LA REQUËTE EST égal à l'objet Request pour rediriger l'utilisateur on a besoin de savoir ce qu'il a tapé dans l'url est dans l'objet Request
		$this-> request = new Request();


		//on va crée une fonction dans le router  pour récupérer les informations après le dernier/ on récupère le controller qui sera post ou un autre nom ,puis on récupère l'action et les paramètres
		// ON CREE LA CLASS Router QUI SERA UNE FONCTION STATIQUE avec en paramètre l'url router::parse($this->request->url);
		router::parse($this->request->url, $this-> request);
		$this->loadController();
		
	}

		// le dispatcher va appelé le controllers en créant une fonction 
		public function loadController() //QUI SE TROUVE DANS LE DOSSIER CONTROLLERS
		{
			//le nom du controller sera avec son préfixe
			$name = $this->request->controller.'Controller'; // qui auront le préfixe Controller
			$file = 'controllers/'.$name.'.php';// Lui indiquer ou se trouve le nom du fichier
			require $file;
			//INITIALISER LA CLASS QU'ON VIENT D'APPELER 
			$controller = new $name($this->request);
			return $controller;
		}

}

?>