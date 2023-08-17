<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Annuaire Apprenants</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/apprenants.css">
  <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/apprenants.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/impression.css" media="print">
</head>

<body>
  <?php include 'menu.php'; ?>
  <div class="text-center mt-5 m-3 bg-danger text-light">
    <h2>LISTE DES APPRENANTS</h2>
  </div>

  <section class="contenair">
    <table class="table table-bordered">

      <?php
      $bdd = new PDO('mysql:host=localhost;dbname=annuaire', 'root', '');

      $reponse = $bdd->query('SELECT * FROM apprenants');

      echo " <tbody>
          <tr>
            <td>nom</td>
            <td>prenom</td>
            <td>adresse</td>
            <td>age</td>
            <td>telephone</td>
            <td>email</td>
            <td>tuteur</td>
          </tr>
        </tbody> 
        ";

      while ($donnes = $reponse->fetch()) {
        echo "
      <tr>
      <td>" . $donnes['nom'] . "</td>
      <td>" . $donnes['prenom'] . "</td>
      <td>" . $donnes['adresse'] . "</td>
      <td>" . $donnes['age'] . "</td>
      <td>" . $donnes['telephone'] . "</td>
      <td>" . $donnes['email'] . "</td>
      <td>" . $donnes['tuteur'] . "</td>
    </tr>
    ";
      }

      ?>
    </table>
  </section>

  <div class="m-3">
    <a class="btn btn-danger" href="formapp.php" role="button"> Ajouter apprenant</a>
  </div>

  <?php include 'footer.php'; ?>

  <script type="text/javascript" src="js/navigateur.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/details.js"></script>
  <script type="text/javascript">
    afficher('formulaire');
  </script>

</body>

</html>