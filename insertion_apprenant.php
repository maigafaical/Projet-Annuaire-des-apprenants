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
    $age = $_POST['age'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $tuteur = $_POST['tuteur'];
          
             
          
        $query = $db->prepare( 'INSERT INTO apprenants (nom,prenom,adresse,age,email,telephone,tuteur) VALUES (?,?,?,?,?,?,?)');

        $query->execute(array($nom,$prenom,$adresse,$age,$email,$telephone,$tuteur));

        header('location:apprenant.php')
         
?>