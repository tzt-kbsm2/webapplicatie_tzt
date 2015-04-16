<?php
$database = mysqli_connect("localhost","root","usbw","TZTDB",3307);
        if($database)   
        {
            
        }       
        else 
        {
            print("Kan helaas geen verbinding maken");
            print(mysqli_connect_error());
        }
?>
