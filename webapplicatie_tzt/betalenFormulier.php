<?php
if (isset($_POST['Vorige2'])) {
    header("location: pakketFormulier.php");
    exit();
} elseif (isset($_POST['Volgende2'])) {
    header("location: bevestiging.php");
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container col-md-10" style="border: 1px solid black">
            <div class="col-md-12 stappenbalk">
                <!--stap 1  gegevens verzender / ontvanger-->
                <a href="adresFormulier.php">Stap 1</a> 
                <b>-</b>
                <!--stap 2 pakket gegevens-->
                <a href="pakketFormulier.php">Stap 2</a>
                <b>-</b>
                <!--stap 3 betalen-->
                <a href="betalenFormulier.php" class="actief">Stap 3</a>
                <b>-</b>
                <!--stap 4 bevestiging-->
                <a href="bevestiging.php">Stap 4</a><br><br>

            </div>
            <div class="container col-sm-6 m-l35">
                <form class="form-horizontal col-md-8" method="POST" action="pakketFormulier.php">
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" name="Ideal" value="Ideal"> Ideal
                    </label><br>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" name="Factuur" value="Factuur"> Factuur
                    </label><br>
                    <input style="float: right" class="btn btn-default" type="submit" value="Volgende" name="Volgende2">
                    <input style="float: right" class="btn btn-default" type="submit" value="Vorige" name="Vorige2">
                </form>
            </div>
        </div>
    </body>
</html>
