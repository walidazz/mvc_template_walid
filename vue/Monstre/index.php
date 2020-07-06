<h1>Liste des monstres</h1>

<?php 
if (isset($monstres)) {
	echo '<ul>';
	foreach ($monstres as $key => $mob) {
		echo '<li>';
		echo '<a href="'.WEBROOT.'Monstre/read/'.$mob->getId().'">'.$mob->getNom().'</a>';
		echo '</li>';
	}
	echo '</ul>';
}

 ?>
 <a href="<?= WEBROOT ?>Monstre/create">Ajouter un monstre</a>