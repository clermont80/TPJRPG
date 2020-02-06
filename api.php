<?php require ("Mage.php"); ?>
<?php require ("Guerrier.php"); ?>
<?php
//page de traitement de l'appel API depuis un code javascript
//je vais juste retourner un chiffre aléatoire
// mais je pourrais récupérer des données POST OU GET
// je pourrais faire des actions metier ( exemple des calculs pour mon appli)
//je pourrais faire des actions sur ma BDD    

$magtamp = new Mage(300,25,90);
$guerriertamp = new Guerrier(300,50,100); 
$vieactuelle = $magetamp->sendhp();
$guerriertamp->attackobject($magtamp);
$vierestante[0] = $magetamp->sendhp();




//il est preferable de retourner un string compatible JSON qui sera encodé via la méthode 
echo json_encode($vierestante);

?>