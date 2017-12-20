<!DOCTYPE html>
<html lang="FR-fr">
<head>
	<meta charset="UTF-8">
	<title>Portfolio en ligne de Sonia Daguet</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="icon" type="image/png" href="assets/images/icon.png" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body id="index">

	

	<nav class="navigation">

		<ul class="nav-list">
			<li class="list" id="button-list">
				<i class="fa fa-bars fa-fw fa-1x" id="burger-button"></i>
			</li>
			<li class="list casual"><a href="#index" id="second">Accueil</a></li>
			<li class="list casual"><a href="#portfolio">Portfolio</a></li>
			<li class="list casual"><a href="#course">Parcours</a></li>
			<li class="list casual"><a href="#contact">Contact</a></li>
			<li class="list casual"><a href="#about">Coordonnées</a></li>
			<li class="list casual"><a href="#cv" id="curriculum">Cv</a></li>

		</ul>

	</nav>

	<header class="header">

		<div class="first-content">
			
			<h1 class="first-title">Bienvenue
			<br>
			sur le site de Sonia Daguet !</h1>

			<img src="assets/images/sonia.jpg" alt="image de presentation" id="first-picture">

			<p class="presentation">
			Enchantée, je suis ravie de votre passage sur cette page.
			</p>
			<br>
			<p class="presentation">Si vous êtes à la recherche d'une intégratrice et développeuse Web, n'hésitez pas à faire un tour sur mon portfolio et à me contacter.
			</p>
			<br>
			<a href="#cv" class="primary">En savoir plus</a>
		</div>

	</header>

	<main>

		<section class="full-box">
			<div class="popin">
			
				<h2 class="title" id="popin-maintitle">Nom du projet</h2>

				<img id="img-project" src="assets/images/portfolio-1.jpg" alt="image">

				<h3 class="popin-title">Description du projet</h3>
				<p class="popin-paragraph" id="popin-description"></p>

				<h3 class="popin-title">Technologies utilisées</h3>

				<ul class="popin-list"></ul>
			
				<p class="popin-paragraph" >
					<a href="" id="popin-link" target="_blank">Lien vers le projet</a>
				</p>

				<p class="popin-paragraph" >
					<a href="" id="popin-sourcecode" target="_blank">Voir le code source</a>
				</p>
			
				<button class="primary" id="popin-button">Fermer</button>
			</div>
		</section>

		<section class="container" id="cv">
		<div class="content">
			<!-- <h2 class="title">Mon CV actuel</h2> -->
				<div class="round">
				<a href="assets/pdf/cv-2017.pdf" target="_blank" class="download"><h2 class="cv-title">Consulter mon CV</h2></a>
				</div>
			</div>
		</section>

		
		

		<!-- <section class="container" id="Compétences">
		
			<div class="content">
			<h2 class="title">Compétences Web</h2>
		
		
			</div>
		
		</section> -->

		<section class="container" id="portfolio">

			<div class="content">

				<h2 class="title">Portfolio</h2>

				<section class="images">

					<figure id="project1" class="project">
						<img src="assets/images/portfolio-1.jpg" alt="image">
						<figcaption>
							<h3 class="project-title">Projet 1</h3>
							<p class="project">Politismos Quiz</p>
						</figcaption>
					</figure>
				
					<figure id="project2" class="project">
						<img src="assets/images/image-portfolio1.jpg" alt="image">
						<figcaption>
							<h3 class="project-title">Projet 2</h3>
							<p class="project">Annonceo</p>
						</figcaption>
					</figure>

				

					<figure id="project3" class="project">
						<img src="assets/images/shop.jpg" alt="image">
						<figcaption>
							<h3 class="project-title">Projet 3</h3>
							<p class="project">Boutique en ligne</p>
						</figcaption>
					</figure>


					<figure id="project4" class="project">
						<img src="assets/images/exemple-brochure.jpg" alt="image">
						<figcaption>
							<h3 class="project-title">Projet 4</h3>
							<p class="project">Brochure</p>
						</figcaption>
					</figure>
				

					<figure id="project5" class="project">
						<img src="assets/images/screen1.jpg" alt="image">
						<figcaption>
							<h3 class="project-title">Projet 5</h3>
							<p class="project">Portfolio itself</p>
						</figcaption>
					</figure>

					<!-- <figure id="project6" class="project">
						<img src="assets/images/portfolio-3.jpg" alt="image">
						<figcaption>
							<h3 class="project-title">Projet 6</h3>
							<p class="project">En Bootstrap</p>
						</figcaption>
					</figure> -->
					
					<!-- <figure id="project7" class="project">
						<img src="assets/images/portfolio-4.jpg" alt="image">
						<figcaption>
							<h3 class="project-title">Projet 7</h3>
							<p class="project">Lorem ipsum dolor</p>
						</figcaption>
					</figure>
					
					<figure id="project8" class="project">
						<img src="assets/images/portfolio-1.jpg" alt="image">
						<figcaption>
							<h3 class="project-title">Projet 8</h3>
							<p class="project">Lorem ipsum dolor</p>
						</figcaption>
					</figure> -->

				</section>

			</div>

		</section>
		
		<section class="container" id="course">

			<div class="content">

				<h2 class="title">Mon parcours</h2>

				<div class="box">
					
					<div class="text-first">

					<p class="text"><strong>WebForce 3, Paris 14E 2017</strong><br>
					Labellisée « Grande École du Numérique»
					Formation professionnalisante de 490 heures, en
					présentiel.<br>
					Préparation au métier d’intégrateur et de
					développeur Web front et back-end.<br>
					Obtention de la certification CNCP aux techniques
					de développement et intégration web et mobile.<br><a href="http://www.wf3.fr/pret-a-tous-changer/developpeur-integrateur-web" target="_blank" class="external-link">Site de l'école</a>
					<br>
					<a href="assets/pdf/livret-webforce3.pdf" target="_blank" class="external-link pdf">Programme de l'école</a></p>

					<img src="assets/images/portfolio-3.jpg" alt="photo1" class="image image-last">
					
					</div>
						
				</div>

				<div class="box">

					<div class="picture-first">

						<img src="assets/images/miki-house-shop.jpg" alt="photo2" class="image image-first">

						<p class="text-last"><strong>Miki House, Paris 1E 2015-2016</strong><br>
						<strong>Fonction:</strong> Conseillère de vente dans le prêt à porter de luxe pour enfants
						<br>
						<strong>Mission :</strong> Accueil, conseil et vente, détaxe, mise en rayon, reporting des ventes
						<br>
						<a href="http://www.mikihouse.fr/les_magasins.php" target="_blank" class="external-link">Lien de la boutique</a></p>

					</div>

				</div>

				<div class="box">

					<div class="text-first">

						<p class="text"><strong>Active Gaming Media, Osaka 2013</strong><br><strong>Fonction:</strong> Traduction en free-lance(télé-travail) de sous-titres de dessins-animés japonais, du japonais vers le français.
						<br>
						<a href="https://activegamingmedia.com/en/" target="_blank" class="external-link">Lien (en anglais)</a></p>

						<img src="assets/images/translation.png" alt="photo3" class="image image-last">

					</div>

				</div>

				<div class="box">

					<div class="picture-first">

						<img src="assets/images/narajoshidaigaku.jpg" alt="photo4" class="image image-first">

						<p class="text-last"><strong>Université Pour Filles de Nara, Japon 2012-2013</strong>
						<br>
						Echange universitaire bi-latéral d'un an avec l'Université pour Filles de Nara(奈良女子大学). Cours de japonais,recherches et préparation au mémoire de deuxiéme année de master.
						<br>
						<a href="http://www.nara-wu.ac.jp/nwu/en/index.html" target="_blank" class="external-link">Lien vers l'université (site en anglais)</a>
						</p>

					</div>

				</div>

				<div class="box">

					<div class="text-first">

						<p class="text"><strong>Université Paris 7, 2011-2012</strong><br>Obtention Maitrise Mention Langues et Cultures Etrangéres spécialité japonais.<br>Préparation mémoire de recherche parcours histoire et sciences humaines<br><a href="http://w3.univ-paris-diderot.fr/ufr_lcao/pg.php?np=ETUDLAP" target="_blank" class="external-link">Lien vers l'UFR</a><br><a href="assets/pdf/kosode.pdf" target="_blank" class="external-link pdf">Mon mémoire</a></p>

						<img src="assets/images/grands-moulins.jpg" alt="photo5" class="image image-last">

					</div>

				</div>

				<!-- <div class="box">
				
					<div class="picture-first">
				
						<img src="assets/images/portfolio-4.jpg" alt="photo6" class="image image-first">
				
						<h3 class="title-last">Temporibus in corrupti</h3>
				
						<p class="text-last"><strong>Temporibus in corrupti</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, nesciunt, minus. Illo, quas, accusamus! Quod aut quasi nulla hic porro, esse excepturi unde beatae blanditiis nobis, quos, debitis inventore soluta.</p>
				
					</div>
				
				</div> -->
			</div>

		</section>
		<section class="container" id="contact">


			<div class="content">

				<h2 class="title contact" >Me contacter</h2>

<?php

	if($_POST){

		$content="";
	
		if(empty($_POST['lastname'])){

			$content .='<div class="error"><p>N\'oubliez pas d\'indiquer votre nom!</p></div>'; 

		}

		if(empty($_POST['mail'])){

			$content .='<div class="error"><p>N\'oubliez pas d\'indiquer votre adresse mail!</p></div>'; 
		}


		if(strlen($_POST['subject'])<=2 || strlen($_POST['subject'])>=40 || empty($_POST['subject'])){

			$content .='<div class="error"><p>Votre sujet doit contenir au moins 2 caractéres et au maximum 40 caractéres</p></div>'; 
		}


		if(strlen($_POST['message'])<=9 || strlen($_POST['message'])>=10000 || empty($_POST['message'])){

			$content .='<div class="error"><p>Votre message doit comprendre au moins 10 caractéres</p></div>'; 
		}

		if(empty($content)){

			$mail='postmaster@sdaguet-portfolio.fr';

			if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)){

				$affichage_mail = "\r\n";

			}

			else{

				$affichage_mail = "\n";

			}

			$subject = $_POST['subject'];

			$header = "From: 'postmaster'<postmaster@sdaguet-portfolio.fr> " .$affichage_mail;

			$header.= "Reply-to: 'postmaster' <postmaster@sdaguet-portfolio.fr>".$affichage_mail;

			$header.= "MIME-Version: 1.0".$affichage_mail;

			$header .= "Content-type: text/html; charset=\"UTF8\"".$affichage_mail;

			/*$message = "Content-type:text/html; charset=\"UTF8\"".$affichage_mail;*/

			/*$message .= "Content-Transfer-Encoding: 8bit".$affichage_mail;*/

			$message = $affichage_mail . "Civilité " . $_POST['civility'] . "<br>" ." Nom : " . $_POST['lastname'] . "<br>" ." Prénom : " . $_POST['firstname'] . "<br>" .$affichage_mail."Mail : ".$_POST['mail'] . "<br>" . $affichage_mail."Téléphone : " . $_POST['phone'] . "<br>" . $affichage_mail."Message : " . $_POST['message'];

			mail($mail,$subject,$message,$header);

			$content.='<div class="validation">';
			$content.='<p>Merci! Votre message a bien été envoyé.</p>';
			$content.='<p>Vous recevrez une réponse sous peu.</p>';
			$content.='</div>';

		}

		echo $content;
	}

?>
				

				<form method="post" action="index.php#contact">

					<div class="first-form">

						<!-- <label for="civility">Civilité</label> -->
						<select name="civility">
							<option value="m" selected="selected">M</option>
							<option value="mme">Mme</option>
						</select>

						<!-- <label for="name">Nom</label> -->
						<input type="text" name="lastname" placeholder="Votre Nom*">

						<!-- <label for="firstname">Prénom</label> -->
						<input type="text" name="firstname" placeholder="Votre Prénom">

						<!-- <label for="email">E-mail</label> -->
						<input type="email" name="mail" placeholder="Votre e-mail*">

						<!-- <label for="phone">Téléphone</label> -->
						<input type="text" name="phone" placeholder="Votre numéro de téléphone">
					</div>

					<div class="second-form">
						<!-- <label for="subject">Sujet</label> -->
						<input type="text" name="subject" placeholder="Sujet*">
					
						<!-- <label for="message">Votre message</label> -->
						 <textarea placeholder="Votre message*" rows="7" cols="50" name="message"></textarea>


						<p>Les champs accompagnés d'une * sont obligatoires</p>

					</div>
					
					<div class="submit">
						<input type="submit" name="Envoyer">
					</div>

				</form>
			</div>
		</section>

	</main>
	
	<footer id="about">
		<section class="last-container">

			<div class="content" id="last-content">

				<h2 class="title" id="last-title">Mes Coordonnées</h2>

				

				<ul class="footer-list">
					<li class="list-element">Sonia Daguet</li>
					<li class="list-element"><a href="tel:06-29-21-11-75">06-29-21-11-75</a></li>
					<li class="list-element"><a href="mailto:cinnamonpan@gmail.com">cinnamonpan@gmail.com</a></li>
					<li class="list-element"><a href="skype:sonia.daguet?call">sonia.daguet</a>
						<hr id="footer-hr">
					</li>
					<li class="list-element">
						<a href="https://www.linkedin.com/in/sonia-daguet-176915153/" target="_blank" class="link"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
					</li>
					<li class="list-element">
						<a href="https://github.com/littleAsteria" target="_blank" class="link"><i class="fa fa-github fa-fw fa-2x"></i></a>
					</li>
				</ul>

				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.839474593186!2d2.6194276152873246!3d48.804042279282164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60f7a081e049d%3A0xd0976d2460517198!2s1+Rue+des+Tilleuls%2C+77340+Pontault-Combault!5e0!3m2!1sfr!2sfr!4v1504020130893"></iframe>
				</div>
				
			</div>
			
		</section>
				<p class="last-paragraph">Copyright ©portfolio-de-sonia 2017 All rights reserved.<p>
	</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
