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
    <?php include 'menu.php';?>

</body>
<form method="post" action="insertion_apprenant.php">
<section class="contenair p-2 bg-danger mt-3 m-3">       
<div class="row mt-3">
           
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <input type="text" name="nom" class="form-control" placeholder="nom">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="prenom" class="form-control" placeholder="prenom">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-6">
                        <input type="text" name="age" class="form-control" placeholder="age">
                    </div>
                    <div class="col-lg-6">
                        <input type="adresse" name="adresse" class="form-control" placeholder="adresse">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-6">
                        <input type="text" name="telephone" class="form-control" placeholder="telephone">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="email" class="form-control" placeholder="email">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-6">
                        <label class="text-danger" for="" required>tuteur</label>
                        <?php              
                            $bdd= new PDO('mysql:host=localhost;dbname=annuaire','root','');

                            $reponse = $bdd->query('SELECT nom, prenom FROM tuteurs');
                            ?>
                            <select class="form-control"  name="tuteur">
                                <option value="">tuteur...</option>
                                <?php while ($d = $reponse->fetch()) { ?>

                                <option><?= $d['nom'] ?> <?= $d['prenom'] ?></option>
                                <?php } ?>
                            </select>
                    </div>
                </div>
    
        <div class="row m-3">
            <div class="col-6">
                <div class="col-auto">
                    <button type="submit" class="btn btn-dark text-light mb-2">Ajouter</button>
                </div>
            </div>
        </div>
    </section>
</form>

</div>

<?php include 'footer.php';?>
