<?php
include('bddconnexion.php');
require_once('session.php');
require_once ('User.php');
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["id"]))
{
	header("Location: login.php");
	exit(); 
}
if (isset($_POST['submit']))
{
	$newUsername = htmlspecialchars($_POST['username']);
	$newLastname = htmlspecialchars($_POST['lastname']);
	$newEmail = htmlspecialchars($_POST['email']);
	$userId = $_SESSION['id'];

	// envoie les infos dans la classe User
	$_SESSION['newUser'] = User::updateinfo($_POST['username'], $_POST['lastname'], $_POST['email']);

	$update = $conn->prepare('UPDATE user SET username = :newUsername, lastname = :newLastname, email = :newEmail WHERE ID = :userid');
	$update->execute(array(
		'newUsername' => $newUsername,
		'newLastname' => $newLastname,
		'newEmail' => $newEmail,
		'userid' => $userId
	));

}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION["newUser"]["userName"]; ?>!</h1>
		<p>C'est votre espace utilisateur.</p>
		<div>
			<?php 
			include('profil.php');
			?>
		</div>
		<a href="logout.php">Déconnexion</a>
		</div>
	</body>
</html>
<?php
$conn = NULL;
?>