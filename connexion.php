<?php 
function bd()
{
try {
$bdd= new PDO('mysql:host=localhost;dbname=db_eln','root','');

} catch (Exception $e) {
	    $e->getMessage();
}
 return $bdd;
}
?>