<?php require ("Mage.php"); ?>
<?php require ("Guerrier.php"); ?>
<script type="text/javascript" src="codemat.js"></script>

<?php

    $guerrier1 = new Guerrier(300,50,100);              
    $mage1= new Mage(300,25,90);
    $guerrier1->setatck(120);                               
    $guerrier1->attackobject($mage1);
    $mage1->displayhp();
    
    ?>
    <button onclick="getLife()">vie mage</button>
    <div id="life">300<span>%</span></div>
    
    <?php
   

    $mage1->attackobject($guerrier1);
    $guerrier1->displayhp();
    $guerrier1->getForce();









?>









