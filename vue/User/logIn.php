
<main id="logIn">
	<h1>Se connecter</h1>
	<?php 

	if (isset($log)) {
		echo $log;
	}
 ?>
	<form action="<?php echo WEBROOT ?>User/logIn" method="POST">
		<input type="email" name="email" placeholder="Entrez votre email">
		<input type="password" name="password" placeholder="Entrez votre mot de passe">
		<input type="submit" value="Se connecter">
	</form>
	<a href="<?= WEBROOT ?>User/signIn">Inscription</a>
</main>

