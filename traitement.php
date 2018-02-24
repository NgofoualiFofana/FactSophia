

<?php  
//Test de l'envoi du formulaire

if(!empty($_POST))
{
  //Les identifiants sont ils transmis ?
  if(!empty($_POST['nom_utilisateur']) && !empty($_POST['password']))
  {
    while ($recuperation_user = $USER->fetch())
    {
      //Sont ils les mêmes que ceux de la BD
      if($_POST['nom_utilisateur'] !== $recuperation_user['nom_utilisateur'])
      {
        $errorMessage = 'Nom utilisateur incorrect !';
      }
      elseif ($_POST['password'] !== $recuperation_user['password'])
      {
        $errorMessage = 'Mot de passe incorrect !';
      }
    else
    {
      //On ouvre une session
      session_start();
      //On enregistre le nom utilisateur en session
      $_SESSION['nom_utilisateur'] = $recuperation_user['nom_utilisateur'];
      // On redirige vers le tableau de bord tableaudebord.php
      header('Location: tableaudebord.php');
      exit();
    }
  }
  $USERS->closeCursor();
}

?>
