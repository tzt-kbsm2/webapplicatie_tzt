<?php
if (isset($_POST['Vorige2'])) {
    header("location: pakketFormulier.php");
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container col-md-10" style="border: 1px solid black">
            <div class="col-md-12 stappenbalk">
                <!--stap 1  gegevens verzender / ontvanger-->
                <a href="">Stap 1</a> 
                <b>-</b>
                <!--stap 2 pakket gegevens-->
                <a href="">Stap 2</a>
                <b>-</b>
                <!--stap 3 betalen-->
                <a href="">Stap 3</a>
                <b>-</b>
                <!--stap 4 bevestiging-->
                <a href="bevestiging.php"  class="actief">Stap 4</a><br><br>
            </div>
            <?php
            if(isset($_POST['Volgende2'])){
            $to =$_POST['email'];
            print($to);
            $subject = "Verzendbevestiging";
            $message="<p>Uw verzoek wordt bij ons verwerkt en wordt zo snel mogelijk bij u opgehaald </p>";
            mail($to, $subject, $message);
            }
            ?>
            <div>
                <p>
                    Bedankt voor het aanmelden van u pakket! Uw betaling is ontvangen en uw aanmelding wordt verwerkt.
                </p>
            </div>
    </body>
</html>
