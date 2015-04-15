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
                <a href="adresFormulier.php" class="actief">Stap 1</a> 
                <b>-</b>
                <!--stap 2 pakket gegevens-->
                <a href="pakketFormulier.php">Stap 2</a>
                <b>-</b>
                <!--stap 3 betalen-->
                <a href="betalenFormulier.php">Stap 3</a>
                <b>-</b>
                <!--stap 4 bevestiging-->
                <a href="">Stap 4</a><br><br>

            </div>
            <?php
            if (isset($_POST['Vorige'])) {
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
            } else {
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
                $telefoonnummerzender = "";
            }
            ?>
            <h4>Om uw pakket aan te melden dient u de volgende gegevens in te vullen.</h4><br><br>
            <div class="row">
                <form method='POST' action='pakketFormulier.php' class="form-horizontal">
                    <div class="container col-md-6">
                        <h4>Verzender</h4><br>

                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Bedrijf </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="(optioneel)" name="BedrijfV" value="<?php print($bedrijfzender); ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Voornaam </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="FirstnameV" value="<?php print($voornaamzender); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Achternaam</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="LastnameV" value="<?php print($achternaamzender); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Adres</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="AdresV" value="<?php print($adreszender); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Postcode</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="PostcodeV" value="<?php print($postcodezender); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Plaats</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="PlaatsV" value="<?php print($plaatszender); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">E-mail</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="EmailV" value="<?php print($emailadreszender); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Telefoonnummer</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" name="TelefoonnumerV" value="<?php print($telefoonnummerzender); ?>" required>
                            </div>
                        </div>

                    </div>
                    <div class="container col-md-6">
                        <h4>Ontvanger</h4><br>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Bedrijf </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="BedrijfO" placeholder="(optioneel)" value="<?php print($bedrijfontvanger); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Voornaam </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="FirstnameO" value="<?php print($voornaamontvanger); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Achternaam</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="LastnameO" value="<?php print($achternaamontvanger); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Adres</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="AdresO" value="<?php print($adresontvanger); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Postcode</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="PostcodeO" value="<?php print($postcodeontvanger); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naam" class="col-sm-3 control-label">Plaats</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="PlaatsO" value="<?php print($plaatsontvanger); ?>" required>
                            </div>
                        </div>

                    </div>
                    <div class="container col-sm-12">
                        <input style="float: right" class="btn btn-default" type="submit" value="Volgende" name="Volgende">
                        <input style="float: right" class="btn btn-default" type="submit" value="Annuleren" name="Annuleren">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
