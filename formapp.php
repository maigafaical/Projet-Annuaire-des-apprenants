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
        <div class="row mt-3">
           

        <div class="col-5 m-3">
            <input type="text" name="nom" class="form-control m-2" placeholder="nom">
        </div>


                <div class="row mt-3">
                    <div class="col-5 m-3">
                    <input type="adresse" name="prenom" class="form-control m-2 " placeholder="prenom">
                </div>

                <div class="col-5 m-3">
                            <input type="text" name="adresse" class="form-control m-2" placeholder="adresse">
                         </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-5 m-3">
                                <input type="text" name="age" class="form-control m-2" placeholder="age">
                            </div>
                            <div class="col-5 m-3">
                                <input type="email" name="email" class="form-control m-2" placeholder="email">
                            </div>
                            <div class="col-5 m-3">
                                <input type="telephone" name="telephone" class="form-control m-2" placeholder="telephone">
                            </div>
                            <div class="col-5 m-3">
                                <input type="telephone" name="id_tuteurs" class="form-control m-2" placeholder="id_tuteurs">
                            </div>
                            
                        </div>

                    <div class="row">
                        <div class="col-6 m-2">
                                <div class="col-auto">
                                        <button type="submit" class="btn btn-danger text-light mb-2">Ajouter</button>
                                </div>
                                
                        </div>
                </form>
                    
                                </div>

                <?php include 'footer.php';?>