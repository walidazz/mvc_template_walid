<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php 
		// WEBROOT => dossier du projet de la racine serveur
		define('WEBROOT',str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
		// ROOT => dossier du projet de la racine du disque dur
		define('ROOT',str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
		$info = json_decode(file_get_contents(ROOT.'js/info.json'));
	 ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo WEBROOT ?>css/style.css">
	<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
	
	<title></title>
	<meta name="description" content="" />
</head>
<body>
	<header>
		<?php if (isset($_SESSION['id'])) { ?>
		<nav>

		</nav>
		<?php } ?>
	</header>
	<?php 
	
		// Init 
		require_once('core/bdd.php');
		require_once('core/controller.php');
		require_once('core/abstractEntity.php');

		// Page par default
		if (isset($_GET['p'])) {
			if ($_GET['p'] == "") {
				$_GET['p'] = "User/logIn";
			}
		} else {
			$_GET['p'] = "User/logIn";
		}

		// Chargement du controleur
		// $tabControlleur est le tableau contenant tout les nom de controlleurs accepté par l'appli
		$tabControlleur = array("User","Item","Personnage","Monstre","Combat","Drop");
		$param = explode("/",$_GET['p']);

		// Si le nom de controlleur venant de l'url est dans le $tabControlleur
		if (in_array($param[0], $tabControlleur)) {
			$controller = $param[0];
			if (isset($param[1])) {
				$action = $param[1];
			} else {
				$action = 'index';
			}
			// Chargement du controlleur
			require_once('controlleur/'.$controller.'.ctrl.php');
			// Nomage de la classe du controlleur
			$controller = 'Ctrl'.$controller;
			// Intanciation du controlleur
			$controller = new $controller();
			
			// Execution de l' $action du $controller avec les $param supplementaire si existant
			// Si action non présente dans le controleur, alors page 404
		
			// Si $action existe dans $controller
			if (method_exists($controller,$action)) {
				// On enlève les indices 0 et 1 du tableau $param
				unset($param[0]);
				unset($param[1]);

				// Ont execute $action de $controller avec $param en paramètre
				call_user_func_array(array($controller,$action), $param);
			// Sinon $action non présente dans $controller
			} else {
				// Page 404
				echo 'erreur 404';
			}
		}


		
	 ?>
	 <footer></footer>
	 <script src="<?= WEBROOT ?>js/script.js"></script>
	 <script>
	 	var url = "<?php echo $_SESSION['url']?>";
		window.onload = changeUrl(url);
	</script>
	<script src="<?= WEBROOT ?>js/info.js"></script>
</body>
</html>