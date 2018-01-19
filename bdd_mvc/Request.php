<?php
/**
* 
*/
class Request 
{
	// CREATION D'UNE PROPRIETE
	public $url;

	function __construct()

	{
		// ON VA déjà INITIALISER la Request, donc on va lui passer les INFORMATIONS DE L'URL
		// POUR CONNAÏTRE L'URL DE L'UTILISATEUR, IL VA FALLOIR REGARDER DANS LA VARIABLE DU SERVER
		$this->url = $_SERVER['REQUEST_URI'];
	}
}
?>