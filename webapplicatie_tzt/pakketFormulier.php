<?php
if (isset($_POST['Annuleren'])) {
    header("location: index.php");
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
                <a href="adresFormulier.php">Stap 1</a> 
                <b>-</b>
                <!--stap 2 pakket gegevens-->
                <a href="pakketFormulier.php" class="actief">Stap 2</a>
                <b>-</b>
                <!--stap 3 betalen-->
                <a href="betalenFormulier.php">Stap 3</a>
                <b>-</b>
                <!--stap 4 bevestiging-->
                <a href="">Stap 4</a><br><br>

            </div>
            <?php
            if (isset($_POST['Volgende'])) {
                $bedrijfzender = $_POST['BedrijfV'];
                $bedrijfontvanger = $_POST['BedrijfO'];
                $voornaamzender = $_POST['FirstnameV'];
                $voornaamontvanger = $_POST['FirstnameO'];
                $achternaamzender = $_POST['LastnameV'];
                $achternaamontvanger = $_POST['LastnameO'];
                $adreszender = $_POST['AdresV'];
                $adresontvanger = $_POST['AdresO'];
                $postcodezender = $_POST['PostcodeV'];
                $postcodeontvanger = $_POST['PostcodeO'];
                $plaatszender = $_POST['PlaatsV'];
                $plaatsontvanger = $_POST['PlaatsO'];
                $emailadreszender = $_POST['EmailV'];
                $telefoonnummerzender = $_POST['TelefoonnumerV'];
                $resultaatZender = mysqli_query($connect, "INSERT INTO  VALUES ('" . $bedrijfszender . "','" . $voornaamzender . "','" . $achternaamzender . "','" . $adreszender . "','" . $adreszender . "','" . $postcodezender . "','" . $plaatszender . "','" . $emailadreszender . "','" . $telefoonzender . "'");
                $resultaatOntvanger = mysqli_query($connect, "INSERT INTO  VALUES ('" . $bedrijfsontvanger . "','" . $voornaamontvanger . "','" . $achternaamontvanger . "','" . $adresontvanger . "','" . $adresontvanger . "','" . $postcodeontvanger . "','" . $plaatsontvanger . "'");

//                if (!$result) {
//                    echo "FOUT: " . mysqli_error($link);
//                }
                ?>
            <div class="col-md-8 m-l20">
                <table class="table table-condensed">
                    <tr><th></th><th>Verzender</th><th>Ontvanger</th></tr>
                    <tr><td>Bedrijf</td><td><?php print($bedrijfzender); ?></td><td><?php print($bedrijfontvanger); ?></td></tr>
                    <tr><td>Voornaam</td><td><?php print($voornaamzender); ?></td><td><?php print($voornaamontvanger); ?></td></tr>
                    <tr><td>Achternaam</td><td><?php print($achternaamzender); ?></td><td><?php print($achternaamontvanger); ?></td></tr>
                    <tr><td>Adres</td><td><?php print($adreszender); ?></td><td><?php print($adresontvanger); ?></td></tr>
                    <tr><td>Postcode</td><td><?php print($postcodezender); ?></td><td><?php print($postcodeontvanger); ?></td></tr>
                    <tr><td>Plaats</td><td><?php print($plaatszender); ?></td><td><?php print($plaatsontvanger); ?></td></tr>
                    <tr><td>E-mail</td><td><?php print($emailadreszender); ?></td><td></td></tr>
                    <tr><td>Telefoonnummer</td><td><?php print($telefoonnummerzender); ?></td><td></td></tr>
                </table>
            </div>
            <?php
            }
            ?>
            
            <form class="form-horizontal col-md-8 m-l20" method="POST" action="betalenFormulier.php">
                <h4>Selecteer hier de grootte van u pakket. </h4><br><br>
                <div class="form-group">
                    <label class="col-sm-4 control-label"> Pakket grootte </label>
                    <div class="col-sm-6">
                        <select class="form-control" name="Grootte" required>
                            <option value="Klein"> kleiner dan 50 cm bij 50 cm </option>
                            <option value="Groot"> groter dan 50 cm bij 50 cm </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"> Gewicht pakket </label>
                    <div class="col-sm-6">
                        <select class="form-control" name="Gewicht" required>
                            <option value="klein"> kleiner dan 10 kg </option>
                            <option value="groot"> groter dan 10 kg </option>
                        </select>
                    </div>
                </div>
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                    letop! Als het pakket fragiel is, vermeld het dan duidelijk op het pakket.
                </div>
                <input type="hidden" value="<?php print($emailadreszender); ?>" name="email">
                <input style="float: right" class="btn btn-default" type="submit" value="Volgende" name="Volgende1">
                <input style="float: right" class="btn btn-default" type="submit" value="Vorige" name="Vorige">
            </form>
        </div>
    </body>
</html>
