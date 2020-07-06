<h1>Liste des personnages</h1>

<?php 
if (isset($personnages)) {
	echo '<ul>';
	foreach ($personnages as $key => $perso) {
		echo '<li>';
		echo '<a href="'.WEBROOT.'Personnage/read/'.$perso->getId().'">'.$perso->getNom().'</a>';
		echo '</li>';
	}
	echo '</ul>';
}

 ?>
 <a href="<?= WEBROOT ?>Personnage/create">Ajouter un personnage</a>