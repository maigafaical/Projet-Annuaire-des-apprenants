<?php
require_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/apprenants.css">
  <title>Annuaire Apprenant</title>
  <style>
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
        }
  </style>
</head>

<body>

          <div class="col-9">
            <h1 id="bienvenu">Formulaire Apprenant</h1>
            <form action="insertion-apprenants.php" method="post">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="nom" placeholder="Nom" required="required">
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="prenom" placeholder="Prénom" required="required">
                </div>
              </div><br>
              <div class="row">
                <div class="col">
                  <input type="date" class="form-control" name="date_naiss" placeholder="Date de naissance" required="required">
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="contact" placeholder="Contact" required="required">
                </div>
              </div><br>
              
              <label>Genre:</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="Masculin">
                <label class="form-check-label" for="inlineRadio1">Masculin</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="Femme">
                <label class="form-check-label" for="inlineRadio2">Feminin</label>
              </div>
              <div class="buttonap">
                <input id="sendTuteurs" type="submit" value="Ajouter" name="valider" class="btn btn-danger sbouton2">
              </div>
            </form>
          </div>
        </div>

    <div id="footer">
      <h4 style="color:white;">COPY</h4>
    </div>
  </div>
  <script type="text/javascript" src="js/navigateur.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/details.js"></script>
  <script type="text/javascript">
    afficher('formulaire');
  </script>
</body>

</html>