<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-10">

					<h2 class="page-title">Gestion des utilisateurs</h2>

					<h3>Bonjour </h3>
					
					Cliquez sur un des menus en haut :) <br/>
					Le lien "Ajouter" permet d'ajouter un nouvel utilisateur<bt/>
					LE lien "Liste" permet de lister tous les utilisateurs existants. A partir de cette page on pourra aussi modifier ou supprimer un utilisateur existant.</br>

					<div class="alert alert-dismissible alert-success">
						<button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
						<p><strong>NEW</strong></p> Ce gabarit a été développé en Boostrap, une bibliothèque CSS/Javascript qui facilite la création d'interfaces web modernes et responsives. <br/>
						Vous pouvez accéder à la <a href="demo/" target="_blank"><u>demo complète</u></a> afin d'avoir une idée plus exacte de la puissance de Bootstrap

					</div>
					
					<div class="hr-dashed"></div>
					
					<h3>Structure </h3>
					Le fichier actuel (accueil.php) fait appel à deux fichier : header.inc.php et footer.inc.php. Ces fichiers contiennent respectivement le code HTML/CSS/JS nécessaire pour l'affichage du header et du footer, ces élements sont commun à toutes les pages. Donc toutes les pages visible de ce mini-site auront la même structure. <br/>

					<div class="alert alert-dismissible alert-warning">
						<button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button>
						<h2>Travail demandé</h2>

						<h3>Création de la BdD</h3>
						<p>
						Votre mission, si vous l'acceptez, et de lancer votre serveur web préféré (easyPHP, wamp, xamp ...), créer une nouvelle base de données appelée "<a href="https://fr.wikipedia.org/wiki/Cosmos_1999" target="_blank">cosmos1999</a>" (sans espace) en utilisant phpMyAdmin OU <a href="adminer.php" target="_blank">"adminer.php"</a> fourni avec ce TP (ce dernier étant plus léger que phpMyAdmin). Utiliser l'interclassement "utf8_general_ci" afin de bien géré les caractères spéciaux (accentués ...)
						</p>
						
						<p>
						Ensuite vous devez créer une table nommée "user" avec les champs suivants (ATTENTION à la casse) : 
						<ol>
							<li>id : int, clé primaire, auto-incremtent</li>
							<li>nom : varchar(50), NOT NULL</li>
							<li>prenom (sans accentué) : varchar(50), NOT NULL</li>
							<li>email : varchar(50), unique, NOT NULL</li>
						</ol>
						Insérer manuellement 3 enregistrements.
						</p>

						<h3>Préparation du projet</h3>
						<p>
						Ajoutez le dossier courant dans la liste des projets de votre éditeur de code (Sublime Text : aller au menu "Projet > Add Folder to Projet ...")
						</p>


						<h3>Liste des utilisateurs</h3>
						<p>
						Développez la page "liste.php" dont le code est le suivant :
						<ol>
							<li>Se conneceter à la BdD : mysqli()</li>
							<li>Exécuter une requête SQL pour récupèrer le contenu de la table : $obj->query() </li>
							<li>Afficher le résultat dans le tableau HTML du gabarit (boucle while) : $obj->fetch_object() </li>
						</ol>
						Pour le moment ne pas faire attention aux deux boutons "Modifier" et "Supprimer"
						</p>

						<h3>Ajout d'un utilisateur</h3>
						<p>
							Compléter le code de la page "ajout.php" afin d'afficher un 3ème champ appelé "E-mail" (id = email). Tous les champs sont obligatoire, le 3ème champ doit être une adresse valide (ajoutez les instructions HTML5 nécessaires) Créer ensuite la page "ajout_action.php" qui :
							<ol>
								<li>Se connecter à la BdD</li>
								<li>Créer un statement : Préparer la requête SQL paramétrée à exécuter : prepare()</li>
								<li>Effectuer le binding entre les paramètres et la requête et les valeurs saisie au clavier : $obj->bind_param()</li>
								<li>Exécuter la requête : $obj->execute()</li>
								<li>L'attribut affected_rows retourne -1 en cas d'erreur de requête, une valeur positive dans le cas contraire. Faire une redirection vers la page "ajout.php" avec l'instruction header("Location: ajout.php") en passant un paramètre permettant à la page cible d'afficher un message d'information (confirmation OU erreur d'ajout), utiliser le code suivant pour afficher un message : 

								<div class="alert alert-dismissible alert-danger">
									<button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button>
									Oups, ceci est une erreur :(
								</div>

								<div class="alert alert-dismissible alert-success">
									<button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button>
									Cool mec ça a marché :)
								</div>

								</li>

								<li><strong>IMPORTANT</strong> Faire en sorte que la validation de "ajout.php" envoie les données du formulaire à "ajout_action.php"</li>

							</ol>
							
						</p>

						<p>
							<h3>Modifier/Supprimer</h3>
							Créer la page "supprimer.php" qui prend un paramètre appelé "id" (qui est l'identifiant de l'utilisateur à supprimer), le supprime (via une requête SQL) et revient à la page "liste.php" en affichant un message de notification.<br/>
							Créer deux nouvelles pages : "modifier.php" et "modifier_action.php". La 1ère reprend le code de "ajout.php", en plus elle prend en paramètre (GET) l'identifiant de l'utilisateur à modifier, fait un SELECT et initialise les champs. Créez alors un 4ème champ pour stocker l'identifiant courant. La validation de ce formulaire envoie les données à "modifier_action.php" qui lancera alors une requête UPDATE et revient vers la page "liste.php". <strong>Pour faciliter</strong> le traitement de la modification, "modifier.php" ne comportera PAS de champ "email" (donc on ne pourra pas modifier l'email d'un utilisateur)
						</p>

						<h3>Améliorer l'intreface</h3>
						<p>
						 Dans "ajout.php", faire en sorte que le formulaire perenne le 10/12ème de l'écran, dans le 2/12ème restant (à droite) insérer une icône représentant l'ajout d'un utilisateur (à chercher sur inconefinde.com ou autre). Idem pour "liste.php" (bien analyser le code HTML de la page courant, plus exactement les classes "col-md-??" )
						</p>
					</div>

				</div>

				<div class="col-md-2">
					<img src="img/users.png"/>
					<div class="hr-dashed"></div>
					<h3>AIDE</h3>
					<a href="pdf/mysqli.pdf" target="_blank"><img src="img/php.png"/></a>
					<a href="pdf/jquery.pdf" target="_blank"><img src="img/jquery.png"/></a>
				</div>
			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>