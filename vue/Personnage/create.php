<h1>Création du personnage</h1>
<?php 
if (isset($log)) {
	echo $log;
}
 ?>
<form action="<?= WEBROOT ?>Personnage/create" method="POST">
		<input type="text" name="nom" placeholder="Nom">
		<input type="radio" name="genre" id="h" value="0"><label for="h">Homme</label>
		<input type="radio" name="genre" id="f" value="1"><label for="f">Femme</label>
		<select name="race">
			<option value="0">Humain</option>
			<option value="1">Elf</option>
			<option value="2">Nain</option>
			<option value="3">Orc</option>
		</select>
		<select name="classe">
			<option value="0">Guerrier</option>
			<option value="1">Mage</option>
			<option value="2">Voleur</option>
		</select>
		<input type="submit" value="Création personnage">
	</form>