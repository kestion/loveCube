<?php

	require_once 'models/commande.php';
	
	if ($action == 'acheter') //traitement du formulaire.
	{
		if(!isset($_POST["prenom"]) || !ctype_alpha($_POST["prenom"])) //test prénom.
		{
			echo 'Vous devez saisir un prénom composé uniquement de lettres majuscules et minuscules.<br />';
		}
		
		if(!isset($_POST["nom"]) || !ctype_alpha($_POST["nom"]))//test nom.
		{
			echo 'Vous devez saisir un nom composé uniquement de lettres majuscules et minuscules.<br />';
		}
		
		if(($_POST["mail"] != $_POST["verif_mail"]))//test e-mail.
		{
			echo 'Vos e-mail doivent correspondrent.<br />';
		}
		
		if(!isset ($_POST["adresse"])) //test adresse.
		{
			echo 'Vous devez entrer une adresse postale valide.<br />';
		}
		
		if(!isset ($_POST["codePostal"]) || strlen ($_POST["codePostal"]) != 5) //test Code postal.
		{
			echo 'Vous devez entrer un code postal comportant au moins 5 chiffres ou "99999" si vous habitez à l\'étranger.<br />';
		}
		
		if(!isset ($_POST["telephone"])) // test telephone.
		{
			echo 'Vous devez entrer un numéro de téléphone valide.<br />';
		}
		else //stocke les données dans des variables qui sont envoyés dans la BDD. 
		{
			$prenom = htmlspecialchars ($_POST['prenom']);
			$nom = htmlspecialchars ($_POST['nom']);
			$mail = htmlspecialchars($_POST['mail']);
			$adresse = htmlspecialchars($_POST['adresse']);
			$codePostal = htmlspecialchars($_POST['codePostal']);
			$telephone = htmlspecialchars($_POST['telephone']);
			$purete = $_POST['purete']; 
			$sulfureuse = $_POST['sulfureuse'];
			$gourmande = $_POST['gourmande'];
			$romance = $_POST['romance'];
			$newsletter = $_POST['newsletter'];

			myQuery($nom, $prenom, $mail, $adresse, $codePostal, $telephone, $purete, $sulfureuse, $gourmande, $romance, $newsletter);
		}
		
	}

?>
