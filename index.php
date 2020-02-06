<?php require ("Mage.php"); ?>
<?php require ("Guerrier.php"); ?>
<script type="text/javascript" src="codemat.js"> </script>

<?php

    $guerrier1 = new Guerrier(300,50,100);              
    $mage1= new Mage(300,25,90);
    $guerrier1->setatck(120);                               
    ?>
    <button onclick="getLife()">afficher vie</button>
    <div id="life">100</div>
    <?php
    $guerrier1->attackobject($mage1);
    $mage1->displayhp();

    $mage1->attackobject($guerrier1);
    $guerrier1->displayhp();
    $guerrier1->getForce();



















?>