<?php 
if (isset($monstre)) {
	echo '<h1>Information de '.$monstre->getNom().'</h1>';
	echo '<ul>';
	echo '<li>Hp : '.$monstre->getHp().'</li>';
	echo '<li>Mp : '.$monstre->getMp().'</li>';
	echo '<li>Xp : '.$monstre->getXp().'</li>';
	echo '<li>Atk : '.$monstre->getAtk().'</li>';
	echo '<li>Def : '.$monstre->getDef().'</li>';
	echo '<li>Dmg : '.$monstre->getDmg().'</li>';
	echo '<li>Spd : '.$monstre->getSpd().'</li>';
	echo '</ul>';
}

 ?>