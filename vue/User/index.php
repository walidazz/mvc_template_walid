<?php 

if (isset($_SESSION['id'])) {
	echo '<a href="'.WEBROOT.'User/logOut"><button>Déconnexion</button></a>';

	echo '<section id="userUpdate">
		<form action="'.WEBROOT.'User/update" method="POST">
			<input type="text" name="firstName" value="'.$user->getFirstName().'">
			<input type="text" name="lastName" value="'.$user->getLastName().'">
			<input type="email" name="email" value="'.$user->getEmail().'">
			<input type="submit" value="Modifier">
		</form>
	</section>';

	echo '<section id="userView">
		<ul>
			<li>'.htmlentities($user->getFirstName()).'</li>
			<li>'.$user->getLastName().'</li>
			<li>'.$user->getEmail().'</li>
		</ul>
		<button>Editer</button>
	</section>';



}

 ?>