<h1>Combat !</h1>
	<form action="<?= WEBROOT ?>Combat/duel" method="POST">
		<select name="perso">
			<?php 
			foreach ($tabPerso as $key => $perso) {
				echo '<option value='.$perso->getId().'>'.$perso->getNom().' lvl '.$perso->getLvl().'</option>';
			}
			 ?>
		</select>
		<select name="mob">
			<?php 
			foreach ($tabMob as $key => $mob) {
				echo '<option value='.$mob->getId().'>'.$mob->getNom().'</option>';
			}
			 ?>
		</select>
		<input type="submit" value="Combat !">
	</form>