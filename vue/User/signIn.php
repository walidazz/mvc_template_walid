<main id="signIn">
	<h1>S'inscrire</h1>
	<span>
	<?php 
	if (isset($log)) {
		echo $log;
	}
	 ?>
	 </span>
	<form action="<?php echo WEBROOT ?>User/signIn" method="POST">
		<input type="text" name="firstName" placeholder="Entrez votre prénom">
		<input type="text" name="lastName" placeholder="Entrez votre nom">
		<input type="email" name="email" placeholder="Entrez votre email">
		<input type="password" name="password" placeholder="Entrez votre mot de passe">
		<input type="submit" value="S'enregistrer">
	</form>
	<a href="<?= WEBROOT ?>User/logIn">Connexion</a>
</main>