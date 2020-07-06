<h1>Résumé de l'objet <?= $item->getNom() ?></h1>
<ul>
	<?php 
	echo '<li> Lvl : '.$item->getLvl().'</li>';
	echo '<li> Info : '.$item->getInfo().'</li>';
	echo '<li> Bonus : '.$item->getBonus().'</li>';
	echo '<li> Prix : '.$item->getPrix().' po</li>';
	 ?>
</ul>