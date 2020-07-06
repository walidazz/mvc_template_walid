<h1>Création de drop</h1>
	<form action="<?= WEBROOT ?>Drop/create" method="POST">
		<select name="mob">
			<?php 
			foreach ($tabMob as $key => $mob) {
				echo '<option value='.$mob->getId().'>'.$mob->getNom().'</option>';
			}
			 ?>
		</select>
		<select name="item">
			<?php 
			foreach ($tabItem as $key => $item) {
				echo '<option value='.$item->getId().'>'.$item->getNom().'</option>';
			}
			 ?>
		</select>
		<input type="text" name="drop_rate" placeholder="drop_rate">
		<input type="text" name="drop_max" placeholder="drop_max">
		<input type="submit" name="Créer drop">
	</form>