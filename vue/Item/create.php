<h1>Création d'un item</h1>
<?php 
if (isset($log)) {
	echo $log;
}
if (isset($item)) {
	echo 'Votre item '.$item->getNom().' à bien été ajouté !<br>';
	echo '<h2>Résumé de l\'item :</h2>';
	echo '<ul>';
	echo '<li> Nom : '.$item->getNom().'</li>';
	echo '<li> Lvl : '.$item->getLvl().'</li>';
	echo '<li> Info : '.$item->getInfo().'</li>';
	echo '<li> Bonus : '.$item->getBonus().'</li>';
	echo '<li> Prix : '.$item->getPrix().' po</li>';
	echo '</ul>';
}
 ?>
<form action="<?= WEBROOT ?>Item/create" method="POST">
	<input type="text" name="nom" placeholder="Nom">
	<input type="text" name="info" placeholder="Info">
	<input type="text" name="lvl" placeholder="Lvl">
	<input type="text" name="bonus" placeholder="Bonus">
	<input type="text" name="prix" placeholder="Prix">
	<input type="submit" value="Créer item">
</form>