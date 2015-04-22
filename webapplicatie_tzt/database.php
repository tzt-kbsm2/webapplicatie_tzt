<?php
$database = mysqli_connect("localhost","root","usbw","842831",3306);
        if($database)   
        {
            
        }       
        else 
        {
            print("Kan helaas geen verbinding maken");
            print(mysqli_connect_error());
        }
?>
