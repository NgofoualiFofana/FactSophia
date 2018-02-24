<?php
  try
  {
    //On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=sophia;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
    //En cas d'erreur on affiche un message et on arrête tout
    die('Erreur :'.$e->getMessage());
  }

  //si tout va bien on continue

  $errorMessage = '';

  //On envoi une requête sur la BD pour récupérer le contenu des utilisateurs

  $USERS = $bdd->query('SELECT * FROM utilisateurs');

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
