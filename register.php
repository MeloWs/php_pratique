<?php 
require_once('session.php'); 
include('bddconnexion.php');
require_once ('User.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
if (isset($_POST['submit']))
{
	$username = htmlspecialchars($_POST['username']);
	$lastname = htmlspecialchars($_POST['lastname']);
	$email = htmlspecialchars($_POST['email']);
	// Hachage du mot de passe
	$userpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
	// recherche si l'ardesse mail existe déjà
	$stmt = $conn->prepare("SELECT * FROM user WHERE email=?");
	$stmt->execute([$email]); 
	$alreadyExist = $stmt->fetch();

	if (!$alreadyExist) 
	{
		// envoie les infos dans la classe User
		$newUser = new User($_POST['username'], $_POST['lastname'], $_POST['email']);
		$_SESSION['newUser'] = $newUser->getInfoUser();
		// implémentation BDD
		$req = $conn->prepare('INSERT INTO user(username, lastname, email, userpassword) VALUES(:username, :lastname, :email, :userpassword)');
		$req->execute(array(
			'username' => $username,
			'lastname' => $lastname,
			'email' => $email,
			'userpassword' => $userpassword
		));
	
		if (isset($_SESSION['newUser']))
		{
		echo ("<div class='sucess'>
		<h3>Vous êtes inscrit avec succès.</h3>
		<p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
		</div>");
		}
	} 
	else 
	{
		$message = "Vous etes déjà inscrit";
		include ('registerForm.php');
	}	
}
else 
{
	include ('registerForm.php');
}
?>
</body>
</html>

<?php
$conn = NULL;
?>
