
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tableaudebord.css">

<!--***UTILISATION DES ICONES FONTAWESOME***!-->
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>Tableau de bord - FactSophia</title>
  </head>
  <body class="principal">
    <!--Verification des entrees utilisatuers-->

    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->

    <?php  include 'entete.php'; ?>

    <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
<!--le corp du tableau de bord start-->
  <section>

    <?php include'menu.php' ?>
<div class="clearfix">&nbsp;</div>
<div class="container">
  <table class="table table-striped table-condensed">
    <thead>
      <th>
        <h4>
          <i class="fa fa-home fa-2x "></i>TABLEAU DE BORD
        </h4>

      </th>

    </thead>

    <tbody>
      <tr>
        <td>
          <br>
          <br>
          <br>
          <br>
          <button type="button" name="button"><i class="fa fa-file-text-o fa-2x"></i><h3>FACTURATION</h3></button>
          <button type="button" name="button"><i class="fa fa-book fa-2x"></i><h3>LES ETATS</h3></button>
          <button type="button" name="button"><i class="fa fa-window-close fa-2x"></i><h3>GESTION DES ERREURS</h3></button>
        </td>
      </tr>

    </tbody>
  </table>

</div>

  <!--</div>-->

</section>
  <?php include 'footer.php'; ?>
</body>
</html>
