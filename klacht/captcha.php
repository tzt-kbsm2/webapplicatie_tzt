<?php

include("phptextClass.php");

/* class object aanmaken */
$phptextObj = new phptextClass();
/* phptext functie genereert plaatje met text. */
$phptextObj->phpcaptcha('#ff5800', '#fff', 120, 40, 10, 25);
?>