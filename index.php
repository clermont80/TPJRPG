<?php require ("Mage.php"); ?>
<?php require ("Guerrier.php"); ?>

<?php

    $guerrier1 = new Guerrier(300,50,100);
    $mage1= new Mage(300,25,90);
    $guerrier1->setatck(120);
    $guerrier1->attackobject($mage1);
    $mage1->displayhp();

    $mage1->attackobject($guerrier1);
    $guerrier1->displayhp();
    $guerrier1->getForce();



















?>