<h1>Création monstre</h1>
	<form action="<?= WEBROOT ?>Monstre/create" method="POST">
		<input type="text" name="nom" placeholder="Nom">
		<input type="text" name="hp" placeholder="hp">
		<input type="text" name="mp" placeholder="mp">
		<input type="text" name="xp" placeholder="xp">
		<input type="text" name="atk" placeholder="atk">
		<input type="text" name="def" placeholder="def">
		<input type="text" name="spd" placeholder="spd">
		<input type="text" name="dmg" placeholder="dmg">
		<input type="submit" value="Créer monstre">
	</form>