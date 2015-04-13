<?php
if (isset($_POST['Volgende'])) {
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
        <div class="container col-md-8" style="border: 1px solid black">
            <div class="col-md-12 stappenbalk">
                <!--stap 1  gegevens verzender / ontvanger-->
                <a href="adresFormulier.php" class="actief">Stap 1</a> 
                <b>-</b>
                <!--stap 2 pakket gegevens-->
                <a href="pakketFormulier.php">Stap 2</a>
                <b>-</b>
                <!--stap 3 betalen-->
                <a href="betalenFormulier.php">Stap 3</a>
                <b>-</b>
                <!--stap 4 bevestiging-->
                <a href="bevestiging.php">Stap 4</a>

            </div>
            <?php
            $bedrijfzender = "";
            $bedrijfontvanger = "";
            $voornaamzender = "";
            $voornaamontvanger = "";
            $achternaamzender = "";
            $achternaamontvanger = "";
            $adreszender = "";
            $adresontvanger = "";
            $postcodezender = "";
            $postcodeontvanger = "";
            $plaatszender = "";
            $plaatsontvanger = "";
            $emailadreszender = "";
            $emailadresontvanger = "";
            $telefoonnummerzender = "";
            $telefoonnummerontvanger = "";
            ?>
            <h4>Om uw pakket aan te melden dient u de volgende gegevens in te vullen.</h4><br><br>
            <div class="row">
                <div class="container col-md-5">
                    <h5>Verzender</h5>
                    <form method='POST' action='aanmelden.php' class="form-horizontal">
                        <div class="form-group">
                            <label for="naam" class="col-sm-2 control-label">Voornaam </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="firstnameV" value="<?php print($voornaamzender); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-2 control-label">Achternaam</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="lastnameV" value="<?php print($achternaamverzender); ?>" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="naam" class="col-sm-2 control-label">Adres</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="adresV" value="<?php print($adreszender); ?>" required>
                            </div>
                        </div>
                        
                </div>
                <div class="container col-md-5">
                    <div class="container ">
                        <h5>Ontvanger</h5>
                        <div class="form-group">
                            <label for="naam" class="col-sm-2 control-label">Voornaam </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="firstnameO" value="<?php print($voornaamontvanger); ?>" required>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <table><tr><td><th> Verzendadres </th> <th> Ontvangstadres </th></td></tr>"
                . "<br><br>"
                . "<tr><td><input type='text' name='bedrijfzender' placeholder='Bedrijf' value='" . $bedrijfzender . "'></td>"
                    . "<td><input type='text' name='bedrijfontvanger' placeholder='Bedrijf' value='" . $bedrijfontvanger . "' required></td></tr>"
                . "<br><br>"
                . "<tr><td><input type='text' name='lastname' placeholder='Voornaam' value='" . $voornaamzender . "' required></td></tr>"
                . "<td><input type='text' name='lastname' placeholder='Voornaam' value='" . $voornaamontvanger . "' required></td></tr>"
                . "<br><br>"
                . "<td><input type='text' name='lastname' placeholder='Achternaam' value='" . $achternaamzender . "' required></td></tr>"
                . "<td><input type='text' name='lastname' placeholder='Achternaam' value='" . $achternaamontvanger . "' required></td></tr>"
                . "<br><br>"
                . "<tr><td><input type='text' name='adres' placeholder='Straatnaam + huisnummer' value='" . $adreszender . "' required></td>"
                    . "<td><input type='text' name='lastname' placeholder='Straatnaam + huisnummer' value='" . $adresontvanger . "' required></td></tr>"
                . "<br><br>"
                . "<tr><td><input type='text' name='postcode' placeholder='Postcode' value='" . $postcodezender . "' required></td>"
                    . "<td><input type='text' name='lastname' placeholder='Postcode' value='" . $postcodeontvanger . "' required></td></tr>"
                . "<br><br>"
                . "<td><input type='text' name='city' placeholder='Woonplaats' value='" . $plaatszender . "' required></td>"
                . "<td><input type='text' name='lastname' placeholder='Woonplaats' value='" . $plaatsontvanger . "' required></td></tr>"
                . "<br><br>"
                . "<tr><td><input type='email' name='email' placeholder='Email-adres' value='" . $emailadreszender . "' required></td>"
                    . "<td><input type='text' name='lastname' placeholder='Email-adres' value='" . $emailadresontvanger . "' required></td></tr>"
                . "<br><br>"
                . "<tr><td><input type='tel' name='telefoonnummer' placeholder='Telefoonnummer' value='" . $telefoonnummerzender . "' required></td></tr>"
                . "<td><input type='text' name='lastname' placeholder='Telefoonnummer' value='" . $telefoonnummerontvanger . "' required></td></tr>"
                . "<br><br>"
                . "<tr><td><input type='submit' name='doorgaan' value='Doorgaan'"
                                  . "</td></tr></table></form>");
    </div>
    <?php
    if (isset($_POST["doorgaan"])) {
        mysqli_query($connect, "INSERT INTO  VALUES ('" . $bedrijfszender . "','" . $voornaamzender . "','" . $achternaamzender . "','" . $adreszender . "','" . $adreszender . "','" . $postcodezender . "','" . $plaatszender . "','" . $emailadreszender . "','" . $telefoonzender . "");
        mysqli_query($connect, "INSERT INTO  VALUES ('" . $bedrijfsontvanger . "','" . $voornaamontvanger . "','" . $achternaamontvanger . "','" . $adresontvanger . "','" . $adresontvanger . "','" . $postcodeontvanger . "','" . $plaatsontvanger . "','" . $emailadresontvanger . "','" . $telefoonontvanger . "");
    }
    ?>
</body>
</html>
