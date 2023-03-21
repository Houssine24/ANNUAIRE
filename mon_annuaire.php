<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <div class="card-panel teal lighten-2"></div> 
  <title></title>
</head>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Annuaire</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons left">search</i>Modifier un contact</a></li>
        <li><a href="badges.html"><i class="material-icons right">view_module</i>Supprimer un contact</a></li>
    </ul>
    </div>
  </nav>
<body>
<center><h1>ANNUAIRE</h1></center>
   <table>

 <?php 
try{
    $bdd = new PDO('mysql:host=localhost;dbname=annuaire_sql;charset=utf8', '***', '***');}
catch (Exception $e){
      die('Erreur : ' . $e->getMessage());}
     $reponse = $bdd->query('SELECT * FROM contacts') ;
     $cpt = $bdd->query('SELECT COUNT(*) AS nb_contacts FROM contacts') ;
while($result=$cpt->fetch()){
      echo '<p>Nombre de contacts= ' . $result[0];}
while($donnees=$reponse->fetch()){
      echo '<tr><td>Nom: ' . $donnees['nom'] . '<td>Prenom: ' . $donnees['prenom'] . '<td>Email: ' . $donnees['email'];}
?>
   </table>

<?php
     $reponse = $bdd->query(' SELECT * FROM contacts WHERE ville = "Auch"') ;
     $cpt = $bdd->query('SELECT * FROM contacts WHERE ville = "Auch"') ;
while($donnees=$reponse->fetch()){
      echo '<p>Auch= ' . $donnees['nom'];}
     $cpt = $bdd->query('SELECT * FROM contacts WHERE email LIKE "%gmail%"') ;
while($gmail=$cpt->fetch()){
      echo '<p>gmail= ' . $gmail['email'];}
?>
 <footer class="page-footer">
      <div class="container">
      <div class="row">
      <div class="col l6 s12">
          <h5 class="white-text">EN SAVOIR PLUS</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
      <div class="col l4 offset-l2 s12">
          <h5 class="white-text">NOS RÉSEAUX SOCIAUX</h5>
           <ul>
          <li><a class="waves-effect waves-light btn-floating social twitter">
                    <i class="fa fa-twitter"></i> Sign in with twitter</a></li>
              <a class="waves-effect waves-light btn-floating social facebook">
                    <i class="fa fa-facebook"></i> Sign in with facebook</a>
          <li><a class="grey-text text-lighten-3" href="#!">facebook</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">twitter</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">instagram</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
           </ul>
      </div>
      </div>
      </div>
      <div class="footer-copyright">
      <div class="container">
            © 2018 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
      </div>
 </footer>            
</body>
</html>
