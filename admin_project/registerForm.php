<form class="box" action="register.php" method="post">
    <h1 class="box-title">S'inscrire</h1>
    <input type="text" class="box-input" name="username" placeholder="Prénom" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>" required />
    <input type="text" class="box-input" name="lastname" placeholder="Nom de Famille" value="<?php if(isset($_POST['lastname'])){ echo $_POST['lastname']; } ?>" required />
    <input type="email" class="box-input" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
    <?php 
    if (! empty($message)) 
    { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
</form>
