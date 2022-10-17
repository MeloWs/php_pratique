<?php
//On essaie de se connecter
try{
    $conn = new PDO("mysql:host=localhost;dbname=exam_bdd;charset=utf8", "root", "root");
    //On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Erreur : " . $e->getMessage();
}
?>