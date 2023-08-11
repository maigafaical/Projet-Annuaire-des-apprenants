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
    <section class="bg-danger mb-3 m-3" >
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            
            <div class="col-lg-3">
                    <img src="image/logo simplon.png" alt="" class="w-100">
                </div>
                <div >
                <a href="index.php" class="nav-link active text-dark">
                <button class="btn btn-outline-dark btn btn-light  me-5" type="button">ACCUEIL</button>

                    </button></a>
                </div>
                <div>
                <a href="" class="nav-link text-dark">
                <button class="btn btn-outline-dark btn btn-light  me-5" type="button">APPRENANTS</button>
                  </a>
                 </div>
                </div>
                <div class="col-lg-3">
                <a href="tuteurs.php" class="nav-link text-light">
                <button class="btn btn-outline-dark btn btn-light  me-5" type="button">TUTEURS</button>
                     </a>
                </div>
                <div class="col-lg-3">
                    <img src="image/Hcr logo.png" alt="" class="w-75">
                </div>

            </div>
        
            </div>
        </nav> 
       </section>
    <div class="text-center mt-5 m-3 bg-danger text-light">
   <h2>LISTE DES APPRENANTS</h2>
    </div>
    
    <section class="contenair">
  <table class="table table-bordered">
       <tbody>
       
           <tr>
           <td>Id</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Age</td>
            <td>Adresse</td>
            <td>telephone</td>
            <td>Email</td>
           </tr>
           
       </tbody>   
    </table>
    </section>

    <div class="text-center">
          <a class="btn btn-danger" href="ajout.php" role="button"> Ajouter Apprenant</a>
       </div>


 <div class="mt-5 m-3 bg-danger text-center text-light">
  <h2>COPYRIGHT OMEGA </h2>
 </div>
  
 <script type="text/javascript" src="js/navigateur.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/details.js"></script>
  <script type="text/javascript">
    afficher('formulaire');
  </script>

</body>

</html>