<?php

$reponse = $conn->query('SELECT * FROM user');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	$lastname = $donnees['lastname'];
	$username = $donnees['username'];
	$useremail = $donnees['email'];
}
?>
<div class="box">
<h1 class="box-title">Vos Infos</h1>
	<p class="profil" style="color:#000;">
		<strong>Nom</strong> : <?php echo $lastname; ?><br />
		<strong>Prénom</strong> : <?php echo $username; ?><br />
		<strong>Email</strong> : <?php echo $useremail; ?><br />
	</p>
</div>

<form class="box" action="" method="post">
	<h1 class="box-title">Modifier vos infos</h1>
	<input type="text" class="box-input" name="username" placeholder="Prénom" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } else { echo $username;} ?>" required />
    <input type="text" class="box-input" name="lastname" placeholder="Nom de Famille" value="<?php if(isset($_POST['lastname'])){ echo $_POST['lastname']; } else { echo $lastname;} ?>" required />
    <input type="email" class="box-input" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }  else {echo $useremail;}?>" required />
    <input type="submit" name="submit" value="Modifier" class="box-button" />
</form>