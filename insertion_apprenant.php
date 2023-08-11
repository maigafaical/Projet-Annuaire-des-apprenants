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
    $id_tuteurs = $_POST['id_tuteurs'];
          
             
          
        $query = $db->prepare( 'INSERT INTO apprenants (nom,prenom,adresse,age,email,telephone,id_tuteurs) VALUES (?,?,?,?,?,?,?)');

        $query->execute(array($nom,$prenom,$adresse,$age,$email,$telephone,$id_tuteurs));

        header('location:apprenant.php')
         
?>