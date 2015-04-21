<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <title>Tzt WebApplicatie</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="image/logoTzt.jpg" alt="" width="" height="80"/>
                </div>
                <div id="menu">
                    <ul class="nav nav-pills">
                        <li role="presentation" ><a href="index.php">Home</a></li>
                        <li role="presentation"><a href="#">Over</a></li>
                        <li role="presentation" class="active"><a href="onlineVersturen.php">Online versturen</a></li>
                        <li role="presentation"><a href="contactPagina.php">Contact</a></li>
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" data-whatever="Inloggen">Login</button>

                            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel">Inloggen</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Gebruikersnaam:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-ww" class="control-label">Wachtwoord:</label>
                                                    <input type="password" class="form-control" id="recipient-ww">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Terug</button>
                                            <button type="button" class="btn btn-primary">Inloggen</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="container">
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
	    if (!$_SESSION) {
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
		$_SESSION['Verpakken'] = "";
	    } else {
		$bedrijfzender = $_SESSION['BedrijfV'];
		$bedrijfontvanger = $_SESSION['BedrijfO'];
		$voornaamzender = $_SESSION['FirstnameV'];
		$voornaamontvanger = $_SESSION['FirstnameO'];
		$achternaamzender = $_SESSION['LastnameV'];
		$achternaamontvanger = $_SESSION['LastnameO'];
		$adreszender = $_SESSION['AdresV'];
		$adresontvanger = $_SESSION['AdresO'];
		$postcodezender = $_SESSION['PostcodeV'];
		$postcodeontvanger = $_SESSION['PostcodeO'];
		$plaatszender = $_SESSION['PlaatsV'];
		$plaatsontvanger = $_SESSION['PlaatsO'];
		$emailadreszender = $_SESSION['EmailV'];
		$telefoonnummerzender = $_SESSION['TelefoonnumerV'];
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
                        <input class="btn btn-primary floatr" type="submit" value="Volgende" name="Volgende">
                        <input class="btn btn-default floatr buttonL" type="reset" value="Annuleren" name="Annuleren">
                    </div>
                </form>
            </div>
        </div>

	<?php include 'footer.php';
	?>
    </body>
</html>