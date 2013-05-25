<?php

	function myQuery($nom, $prenom, $mail, $adresse, $codePostal, $telephone, $purete, $sulfureuse, $gourmande, $romance, $newsletter) //stocke des données dans une BDD.
	{	
		$query = "INSERT INTO commande (nom, prenom, mail, adresse, codePostal, telephone, purete, sulfureuse, gourmande, romance, newsletter) 
			   	  VALUES ('".mysql_real_escape_string($nom)."',
						'".mysql_real_escape_string($prenom)."',
						'".mysql_real_escape_string($mail)."',
						'".mysql_real_escape_string($adresse)."',
						'".mysql_real_escape_string($codePostal)."',
						'".mysql_real_escape_string($telephone)."',
						'".mysql_real_escape_string($purete)."',
						'".mysql_real_escape_string($sulfureuse)."',
						'".mysql_real_escape_string($gourmande)."',
						'".mysql_real_escape_string($romance)."',
						'".mysql_real_escape_string($newsletter)."')";
		
		$result= mysql_query($query);
		
		if ($result === false)
		{
			die(mysql_error()); 
		}
	}
	
?>