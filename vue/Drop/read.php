<main id="drop">
<?php 
if (isset($tabDrop)) {
	$mob = $tabDrop[0]->getFk_monstre();
	echo '<h3>'.$mob->getNom().'</h3>';

	echo '<section>';
	foreach ($tabDrop as $key => $drop) {
		$item = $drop->getFk_item();
		echo '<article>';
		echo '<h4>'.$item->getNom().'</h4>';
		echo '<ul>';
		echo '<li>Lvl : '.$item->getLvl().'</li>';
		echo '<li>Description : '.$item->getInfo().'</li>';
		echo '<li>Bonus : '.$item->getBonus().'</li>';
		echo '<li>Prix : '.$item->getPrix().'</li>';
		echo '<li>% drop : '.$drop->getDrop_rate().'</li>';
		echo '<li>Max drop : '.$drop->getDrop_max().'</li>';
		echo '</ul>';
		echo '</article>';
	}
	echo '<section>';
}

 ?>
</main>