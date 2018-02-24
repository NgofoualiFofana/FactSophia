<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tableaudebord.css">
    <link rel="stylesheet" href="css/fact.css">

<!--***UTILISATION DES ICONES FONTAWESOME***!-->
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>Saisie - Facture groupe - Societe</title>
  </head>
  <body>
    <?php include 'entete.php';?>

    <section>

    <?php include 'menu.php'; ?>

    <div class="clearfix">&nbsp;</div>

    <div class="container">
      <table class="table table-striped table-condensed">
        <thead>
          <th>
            <h4>
              <i class="fa fa-users fa-2x "></i> SAISIE FACTURE - GROUPE - SOCIETE
            </h4>

          </th>

        </thead>

        <tbody>

          <tr>
            <td class="col-md-6">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">Date:</label>
                  <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="jj / mm / aaaa" id="text">
                  </div>

                  <label for="text" class="col-md-3 control-label">N Facture:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">Client:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <label for="text" class="col-md-3 control-label">N NBDC:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">Adresse:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">N CC:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">Liste des Chambres:</label>
                  <div class="form-group">
                    <textarea id="textarea" class="col-md-6 col="4"form-control"></textarea><br>
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-1 control-label">Du:</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <label for="text" class="col-md-1 control-label">Au:</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" id="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">Libellé:</label>
                  <div class="form-group">
                    <textarea id="textarea" class="col-md-6 col="4"form-control"></textarea><br>
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-2 control-label">CH.Simples</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <label for="text" class="col-md-3 control-label">Nuitées X</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <div class="col-md-2">
                    <input type="text" class="form-control" id="text">
                  </div>

                </div>

                <div class="form-group">
                  <label for="text" class="col-md-2 control-label">CH.Mézanine</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <label for="text" class="col-md-3 control-label">Nuitées X</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <div class="col-md-2">
                    <input type="text" class="form-control" id="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-2 control-label">Supplément:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <label for="text" class="col-md-3 control-label">Nuitées X:</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <div class="col-md-2">
                    <input type="text" class="form-control" id="text">
                  </div>

                </div>

            </form>

            </td>


<!--2eme Colonne du tableau-->

            <td class="col-md-6">

              <form class="form-horizontal">

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">Restaurant bar:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <label for="text" class="col-md-3 control-label">Mini Bar:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">Tel-Fax-Photocopie:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <label for="text" class="col-md-3 control-label">Buanderie-lingerie</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>

                </div>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">Salle conference:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                    </div>

                    <label for="text" class="col-md-3 control-label">Divers:</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="text">
                    </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">Accompte:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="text">
                  </div>

                  <label for="text" class="col-md-3 control-label">Remise:</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="remise">
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-2 control-label">Espèces:</label>
                  <div class="col-md-2">
                    <input type="checkbox" class="form-control" id="espece">
                  </div>

                  <label for="text" class="col-md-2 control-label">Chèques:</label>
                  <div class="col-md-2">
                    <input type="checkbox" class="form-control" id="espece">
                  </div>

                  <label for="text" class="col-md-2 control-label">CC/CHF/FRF:</label>
                  <div class="col-md-2">
                    <input type="checkbox" class="form-control" id="espece">
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">S/TOTAL</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="s_total">

                  </div>
                  <label for="text" class="col-md-3 control-label">REMISE</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="s_total">

                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-md-3 control-label">RESTE DU</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="s_total">

                  </div>
                  <label for="text" class="col-md-3 control-label">TOTAL FACTURE</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="s_total">

                  </div>
                </div>

              </form><br>

                <div class=" col-md-9 editer_facture">
                  <button type="submit" name="edit_fact" class="btn btn-success pull-right">Editer facture</button>
                </div>

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
