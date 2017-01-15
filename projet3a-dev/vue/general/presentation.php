<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title>Schoolab</title>
		
		<!-- Our CSS stylesheet file -->
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive-menu.css" />
		
		<script src="js/modernizr.custom.js"></script>
		
	</head>

   
   <body>
<div id="log-in">

	<div class="bckground"></div>


<div  class="newpage">

<h1>Connexion</h1>

<img src="img/blackboard.png"/>
<form align="center" id="form_login" method="POST" action="">
	<div class="line"><span>Votre identifiant</span><input class="w3-input" id="mail_login" type="text" name="mail_login" placeholder="mail"></div>
	<div class="line"><span>Votre mot de passe</span><input class="w3-input" id="mdp_login" type="password" name="mdp_login" placeholder="password"></div>
	<div class="line"><input class="myButton2" id="bouton_login" type="submit" placeholder="se connecter"></div>
	<br><br><div class="remember"><span>Se souvenir de moi</span><input name="souvenir" type="checkbox"></div>
</form>

</div>
</div>

<div id="sign-in">

	<div class="bckground"></div>
<div class="newpage">

<h1>Inscription</h1>

<form id="form_inscription" method="POST">

<h2>Informations personnelles</h2>
	<span>Votre adresse email:</span><input class="w3-input" id="mail_master" type="email" name="mail_master" placeholder="Mail">*<br>
	<span>Votre mot de passe:</span><input class="w3-input" id="mdp_master" type="password" name="mdp_master" placeholder="Mot de passe">*<br>
	<span>Confirmation de votre mot de passe:</span><input id="mdp_check_master" type="password" name="mdp_check_master" placeholder="Confirmation mot de passe">*<br>
	<span>Votre nom:</span><input id="nom_master" type="text" name="nom_master" placeholder="Nom"><br>
	<span>Votre prénom:</span><input id="prenom_master" type="text" name="prenom_master" placeholder="Prénom"><br>
	<span>Votre date de naissance:</span><input id="date_nai_master" type="date" name="date_nai_master" placeholder="Date de naissance"><br>
	<span>Votre numéro de téléphone:</span><input id="tel_master" type="tel" name="tel_master" placeholder="Téléphone"><br>
	<h2>Informations de votre établissement</h2>
	<span>Le nom de votre établissement:</span><input id="nom_eta_master" type="text" name="nom_eta_master" placeholder="Nom de l'établissment scolaire">*<br>
	<span>L'adresse de votre établissement:</span><input id="adresse_eta_master" type="text" name="adresse_eta_master" placeholder="Adresse de l'établissment scolaire"><br>
	<span>Votre ville:</span><input id="ville_eta_master" type="text" name="ville_eta_master" placeholder="Ville de l'établissment scolaire"><br>

	<span>Votre type d'établissement:</span><select id="type_eta_master1" type="text" name="type_eta_master1">
		<option>école</option>
		<option>collège</option>
		<option>lycée</option>
		<option>école supérieur</option>
	</select>*<br>
	<span>Spécialité n°1:</span><input id="spe_eta_master1" type="text" name="spe_eta_master1" placeholder="Spécialité 1 (BTS, école de commerce...)"><br>
	<span>Spécialité n°2:</span><input id="spe_eta_master2" type="text" name="spe_eta_master2" placeholder="Spécialité 2"><br>
	<span>Spécialité n°3:</span><input id="spe_eta_master3" type="text" name="spe_eta_master3" placeholder="Spécialité 3"><br>

	<input class="myButton2" id="bouton_inscription" type="submit" name=""><br>
</form>

</div>
</div>


<div class="menu">

<img class="logo" src="img/logo.png">


<ul class="sous-menu">
<li class="home"><a href="#">Accueil</a></li>
<li class="service"><a href="#">Concept</a></li>
<li class="offre"><a href="#">Nos Offres</a></li>
<li>Nous Contacter</li>
</ul>

<ul id="login" class="sous-menu">
<li class="connexion"><a href="#">connexion</a></li>
<li class="inscription"><a href="#">inscription</a></li>
</ul>



</div>

<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
					<li class="home"><a href="#">Accueil</a></li>
<li class="service"><a href="#">Concept</a></li>
<li class="offre"><a href="#">Nos Offres</a></li>
<li><a href="#">Nous Contacter</a></li>
<li><a href="#">S'inscrire à la Newsletter</a></li>
<li class="connexion"><a href="#">connexion</a></li>
<li class="inscription"><a href="#">inscription</a></li>
						</ul>
					</div><!-- /dl-menuwrapper -->


<div class="info">
<h1>Bienvenue sur Schoolab</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar nisi eget diam varius, at fringilla neque sollicitudin. Sed tellus ex, feugiat vel lobortis ut, ullamcorper non tellus. Maecenas posuere nunc vel porttitor scelerisque. Proin at arcu luctus, dignissim neque at, vulputate massa. Fusce quis imperdiet lorem, id semper massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Donec quis neque sed odio commodo suscipit ac a lorem. Donec quis nibh at est consequat interdum</p>


<div class="button">
<a href="#" class="myButton2">En savoir plus</a>
<a href="#" class="myButton">Essayer</a>
</div>

<div id="carousel" >
  <ul class="slides">


    <li>
	<h1>L'outil d'organisation scolaire</h1>
      <img src="img/pics1.jpg" alt="image1"/>
    </li>


    <li><h1>Version mobile en développement</h1>
   <img src="img/pics2.jpg" alt="image2"/>
    </li>

    <li><h1>Synchronisation à Google Agenda</h1>
      <img src="img/pics3.jpg" alt="image3"/> 
    </li>

  </ul>
</div>



</div>

<div class="space"></div>

<ul class="concept">
<h1 align="center">Notre Concept</h1>

<li class="info-concept">
<img  class="image-concept" src="img/school2.png"/><br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar nisi eget diam varius, at fringilla neque sollicitudin. Sed tellus ex, feugiat vel lobortis ut, ullamcorper non tellus. Maecenas posuere nunc vel porttitor scelerisque.</p>

</li>


<li class="info-concept">
<img  class="image-concept" src="img/computer2.png"/>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar nisi eget diam varius, at fringilla neque sollicitudin. Sed tellus ex, feugiat vel lobortis ut, ullamcorper non tellus. Maecenas posuere nunc vel porttitor scelerisque.</p>
</li>

<li class="info-concept">
<img  class="image-concept" src="img/teacher-desk2.png"/>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar nisi eget diam varius, at fringilla neque sollicitudin. Sed tellus ex, feugiat vel lobortis ut, ullamcorper non tellus. Maecenas posuere nunc vel porttitor scelerisque.</p>
</li>


</ul>

<ul id="formule" class="concept">
<h1 align="center">Nos Formules</h1>
<br>
<br>
<li class="info-concept" id="offer1">
<h2 align="center">Formules annuel</h2><br>
<h2 class="price"align="center">50€/AN</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar nisi eget diam varius, at fringilla neque sollicitudin. </p>
<a href="#" align="center" id="button1" class="myButton">Continuer</a>
</li>


<li class="info-concept" id="offer2">
<h2 align="center">Formules trimestriel</h2><br>
<h2 class="price"align="center">60€/3 mois</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar nisi eget diam varius, at fringilla neque sollicitudin. </p>
<a href="#" align="center" id="button2" class="myButton">Continuer</a>
</li>


<li class="info-concept" id="offer3">
<h2 align="center">Formules mensuel</h2><br>
<h2 class="price"align="center">75€/Mois</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar nisi eget diam varius, at fringilla neque sollicitudin. </p>
<a href="#" align="center" id="button3" class="myButton">Continuer</a>
</li>


</ul>

<form>
<ul class="footer" align="center">
	<li>Condition d’utilisation</li>
	<li>Charte de confidentialité</li>
	<li>Qui-nous-sommes?</li>
	<li>Nous suivre:<img class="social" src="img/facebook-logo.png"/><img class="social" src="img/linkedin.png"/>
		<img  class="social" src="img/twitter-logo.png"/></li>
		<li>
<span>S'inscrire à la newsletter</span><input type="text"/><button class="myButton2" id="bouton_newsletter" type="submit">S'inscrire</button>

		</li>

</ul>
</form>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="js/jquery.dlmenu.js"></script>
<script src="js/scroll.js"></script>
	<script src="js/slide.js"></script>
		
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
				});
			});
		</script>

    	</body>
</html>