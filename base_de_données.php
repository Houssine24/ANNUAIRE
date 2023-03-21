<?php
try  {
       $bdd = new
       PDO('mysql:host=localhost;dbname=ma_premiere_base;charset=utf8', '****', '******');
}catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>

	<title> Ma Base</title>

</head>
<body>

<?php

    $nom ="";
    $email ="";
    $password ="";
$req = $bdd->prepare('INSERT INTO exemple_simplon(nom, email, password) VALUES("nom", "email", "password")');
$req->execute(array(
    'nom' => $nom,
    'email' => $email,
    'password' => $password,
  ));
$reponse = $bdd->query('SELECT * FROM exemple_simplon') ;

while($donnees=$reponse->fetch()){
  	echo '<p>Nom user= ' . $donnees['nom'] . ' - Email user= ' . $donnees['email'] ;
}

?>

</body>
</html>
