
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil - FactSophia</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hotel.css">
  </head>
  <body>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="container entete">
      <h1>FACTURATION - HOTEL RESTAURANT SOPHIA</h1>

    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>

    <div class="container">
      <form class="form-horizontal" method="post" action="Accueil.php">
        <fieldset>

<!-- Nom Formulaire -->
          <legend><img src="Images/connexion.png" alt="connexion"></legend>

<!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nom utilisateur</label>
      <div class="col-md-4">
        <input name="nom_utilisateur" placeholder="nom utilisateur" class="form-control input-md" type="text" value="Reception">

      </div>
    </div>

<!-- Entrée Mot de passe-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="password">Mot de passe</label>
      <div class="col-md-4">
        <input name="password" placeholder="mot de passe" class="form-control input-md" type="password">

      </div>
    </div>

<!-- Bouton -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="connexion"></label>
      <div class="col-md-4">
        <button name="connexion" class="btn btn-warning" type="submit">Connexion</button>
      </div>
    </div>

    </fieldset>
  </form>
</div>
<!--Fin .container -->


</body>

</html>
