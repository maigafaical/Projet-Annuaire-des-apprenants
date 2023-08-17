<?php
try{
$db = new PDO('mysql:host=localhost;dbname=annuaire', 'root', '');
 
}
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
     
}
     
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $genre = $_POST['genre'];         
             
          
        $query = $db->prepare( 'INSERT INTO tuteurs (nom,prenom,adresse,email,telephone,genre) VALUES (?,?,?,?,?,?)');

        $query->execute(array($nom,$prenom,$adresse,$email,$telephone,$genre));

        header('location:tuteurs.php')
         
?>