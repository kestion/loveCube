<?php
	
	$link = mysql_connect('localhost', 'root', ''); //se connecte à la bdd.
	if (!$link)  // erreur mysql
	{
    	die(mysql_error());
    }
	
    $bdd_select = mysql_select_db('loveCube', $link); //selection de la bdd.
	if (!$bdd_select) //erreur mysql
	{
    	die (mysql_error());
	}
	
	$page = null;
	
	if(isset ($_GET['page'])) //inclut les pages.
	{
		$page = $_GET['page'];
	}
	
	$action = null;
	
	if(isset ($_GET['action'])) //inclut les actions.
	{
		$action = $_GET['action'];
	} 	
	
	if(file_exists('actionGroup/commande.php'))
	{
		include 'actionGroup/commande.php'; //inclut le controlleur.
	}
	
	if(!$page && file_exists('views/portail.php'))
	{
		include 'views/portail.php'; //inclut les views via le portail.
	}

	if($page && file_exists('views/main.php'))
	{
		include 'views/main.php'; //inclut les views via la page main.
	}
?>