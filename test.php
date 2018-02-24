<?php
session_start();
$_SESSION['non_utilisateur']=$_POST['nom_utilisateur'];
 ?>
//demarrage de la session





<?php
if((isset($_POST['nom_utilisateur']) AND $_POST['nom_utilisateur']== "direction") AND (isset($_POST['password']) AND $_POST['password']== "sophiaplage"))//si le nom utilisateur et le mot de passe est bon
{
  //Alors on affiche le tableau de bord
?>
