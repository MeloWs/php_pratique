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
	$email = htmlspecialchars($_POST['email']);
	$userpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$req = $conn->prepare('SELECT id, userpassword, username, lastname, email FROM user WHERE email = :email');
	$req->bindParam(":email", $email);
	$req->execute();    
    $resultat = $req->fetch();
	// verifie la concordance entre le mdp et le mdp hashé
	$isPasswordCorrect = password_verify($_POST['password'], $resultat['userpassword']);

    if (!$resultat)
    {
        $message = 'Mauvais identifiant ou mot de passe !';
    }
    else
    {	
		if($isPasswordCorrect)
		{
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['newUser'] = User::updateInfo($resultat['username'], $resultat['lastname'], $resultat['email']);
			header('location: index.php');
		}
    }
	
}

?>
<form class="box" action="login.php" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="email" class="box-input" name="email" placeholder="Adresse Email" required>
<input type="password" class="box-input" name="password" placeholder="Mot de passe" required>
<input type="submit" value="Connexion" name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>

<?php
$conn = NULL;
?>