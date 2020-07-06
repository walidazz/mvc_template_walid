<main id="drop">
<h1>Liste de drop</h1>
<?php 
if (isset($log)) {
	echo $log;
}
 ?>
<a href="<?= WEBROOT ?>Drop/create">Ajouter un drop</a>
<?php 
if (isset($tabDrop)) {
	$lastMob = "";  
	echo '<section>';
	foreach ($tabDrop as $key => $drop) {
		$mob = $drop->getFk_monstre();
		$item = $drop->getFk_item();

		if ($mob->getNom() != $lastMob && $lastMob == "") {
			echo '<a href="'.WEBROOT.'Drop/read/'.$mob->getId().'"><article>';
			echo '<h3>'.$mob->getNom().'</h3>';
			$lastMob = $mob->getNom();
		}

		if ($mob->getNom() != $lastMob) {
			echo '</article></a>';
			echo '<a href="'.WEBROOT.'Drop/read/'.$mob->getId().'"><article>';
			echo '<h3>'.$mob->getNom().'</h3>';
			$lastMob = $mob->getNom();
		}
		echo '<p>'.$item->getNom().' '.$drop->getDrop_rate().'% '.$drop->getDrop_max().' max</p>';
	}
	echo '</article></a>';
	echo '</section>';
}
 ?>
</main>