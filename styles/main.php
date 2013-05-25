<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/">

	<head>
		
		<title>Love Cube</title>
		<meta name="keywords" lang="fr" content="love cube, ACME, cadeaux, saint valentin" />
		<meta name="description" content="site de lancement du lovecube" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="fr" />
		<meta name="date-creation-ddmmyyyy" content="27/01/2012" />
		<meta name="author" content="Joachim Sabourin, Calypso Skinner, Thibault de Villemandy, Th�o Ehrsam, Maxime Perez, Baptiste Lenormand" />
		
		<meta itemprop="name" content="Love Cube">
		<meta itemprop="description" content="L'amour est un jeu">
		<meta itemprop="image" content="https://plus.google.com/u/0/105808830075811637777/posts">
		
		
		<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Rouge+Script' rel='stylesheet' type='text/css' />
		
		<link rel="stylesheet" type="text/css" href="styles/main.css" />
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="includes/validationForm.js"></script>
		<script type="text/javascript" src="actionGroup/commande.js"></script>
		
		<script type="text/javascript"> 
		
		function myFooter() 
		{
			document.getElementById("myFooter").style.display="block";
		}

		function myBlur()
		{
			document.getElementById("contactJS").style.display="block";
		}

		function myContact()
		{
			document.getElementById("contactJS").style.display="none";
		}

		function myAnnonces()
		{
			document.getElementById("news").style.display="none";
			document.getElementById("annonces").style.display="block";
		}

		function myFlyer()
		{
			
			document.getElementById("flyer").style.display="block";
			document.getElementById("coupon").style.display="none";
		}

		function myCoupon()
		{
			document.getElementById("flyer").style.display="none";
			document.getElementById("coupon").style.display="block";
		}
		
		$(document).ready(function()
		{
			$("#boutonFooter").mouseover(function()
			{
				$("#boutonFooter").animate({height:200},"slow");
    			$("#boutonFooter").animate({height:200},"slow");
 			 });
		});

		$(document).ready(function()
		{
			$("#declencheurAnnonces").mouseover(function()
			{
				$("#declencheurAnnonces").animate({height:290},"slow");
				$("#declencheurAnnonces").animate({width:1600},"slow");
			});
		});
		
		</script> 	
		
	</head>

	<body>
		
		<div id="header">
			<?php include '/templates/header.php';?>
		</div>
		
		<div id="navigation">
			<?php include '/templates/navigation.php';?>
		</div>
		
		<div id="wrapper">
			
			<div id="content">
			
			<?php 
			
				if ($page == 'accueil')
				{
					//afficher la page d'accueil
					$template = 'accueil';
				}
				elseif ($page == 'commande')
				{
					//afficher le formulaire de commande.
					$template = 'commande';
				}
				elseif ($page == 'contact')
				{
					//afficher le formulaire de commande.
					$template = 'contact';
				}
				elseif ($page == 'events')
				{
					//afficher le formulaire de commande.
					$template = 'events';
				}
				elseif ($page == 'produit')
				{
					//afficher la page produit.
					$template = 'produit';
				}
				elseif ($page == 'redir')
				{
					$template = 'redir';
				}
				else
					echo 'Ooops nous sommes de très mauvais développeur';
				
				
				if (isset($template))
				{
					include 'templates/'.$template.'.php';
				}
				
			?>
				<div class="clearFix"></div>
			
			</div>
		
		</div>
		
		<div id="footer">
		
			<?php include '/templates/footer.php';?>
		</div>
	
	
	</body>

</html>