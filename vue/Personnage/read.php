<?php 
if (isset($perso)) {
	echo '<h1>Information de '.$perso->getNom().'</h1>';
	echo '<ul>';
	echo '<li>Race : ';
	switch ($perso->getRace()) {
		case '0':
			echo 'Humain';
			break;
		case '1':
			echo 'Elf';
			break;
		case '2':
			echo 'Nain';
			break;
		case '3':
			echo 'Orc';
			break;
	}
	echo '</li>';
	
	echo '<li>Classe : ';
	switch ($perso->getClasse()) {
		case '0':
			echo 'Guerrier';
			break;
		case '1':
			echo 'Mage';
			break;
		case '2':
			echo 'Voleur';
			break;
	}
	echo '</li>';
	
	echo '<li>Lvl : '.$perso->getLvl().'</li>';
	echo '<li>Hp : '.$perso->getHp().'</li>';
	echo '<li>Mp : '.$perso->getMp().'</li>';
	echo '<li>Xp : '.$perso->getXp().'</li>';
	echo '<li>Force : '.$perso->getStr().'</li>';
	echo '<li>Agilité : '.$perso->getAgi().'</li>';
	echo '<li>Magie : '.$perso->getMgc().'</li>';
	echo '<li>Vitesse : '.$perso->getSpd().'</li>';
	echo '</ul>';
}
 ?>