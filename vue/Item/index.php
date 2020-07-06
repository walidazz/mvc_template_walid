<h1>Liste de tout les items</h1>

<?php 
if (isset($items)) {
	echo '<ul>';
	foreach ($items as $key => $item) {
		echo '<li><a href="'.WEBROOT.'Item/read/'.$item->getId().'">'.$item->getNom().'</a></li>';
	}
	echo '</ul>';
}
 ?>
 <a href="<?= WEBROOT ?>Item/create">Ajouter un item</a>