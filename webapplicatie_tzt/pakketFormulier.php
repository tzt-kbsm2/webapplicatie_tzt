<?php
session_start();
if (isset($_POST['Annuleren'])) {
    header("location: index.php");
    exit();
}
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
            
            include 'database.php';
            
            $_SESSION['BedrijfV'] = $_POST['BedrijfV'];
                $_SESSION['BedrijfO'] = $_POST['BedrijfO'];
                $_SESSION['FirstnameV'] = $_POST['FirstnameV'];
                $_SESSION['FirstnameO'] = $_POST['FirstnameO'];
                $_SESSION['LastnameV'] = $_POST['LastnameV'];
                $_SESSION['LastnameO'] = $_POST['LastnameO'];
                $_SESSION['AdresV'] = $_POST['AdresV'];
                $_SESSION['AdresO'] = $_POST['AdresO'];
                $_SESSION['PostcodeV'] = $_POST['PostcodeV'];
                $_SESSION['PostcodeO'] = $_POST['PostcodeO'];
                $_SESSION['PlaatsV'] = $_POST['PlaatsV'];
                $_SESSION['PlaatsO'] = $_POST['PlaatsO'];
                $_SESSION['EmailV'] = $_POST['EmailV'];
                $_SESSION['TelefoonnumerV'] = $_POST['TelefoonnumerV'];
                

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
                $resultaatZender = mysqli_query($database, "INSERT INTO SendCustomer VALUES ('" . $bedrijfzender . "','" . $voornaamzender . "','" . $achternaamzender . "','" . $adreszender . "','" . $postcodezender . "','" . $plaatszender . "','" . $emailadreszender . "','" . $telefoonnummerzender . "'");
                $resultaatOntvanger = mysqli_query($database, "INSERT INTO ReceiveCustomer VALUES ('" . $bedrijfontvanger . "','" . $voornaamontvanger . "','" . $achternaamontvanger . "','" . $adresontvanger . "','" . $adresontvanger . "','" . $postcodeontvanger . "','" . $plaatsontvanger . "'");

//                if (!$result) {
//                    echo "FOUT: " . mysqli_error($link);
//                }
            }
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
                ?>
                <div class="col-md-8 m-l20">
                    <h4>Controleer hier u gegevens.</h4>
                    <p>Als u gegevens niet kloppen klik dan op 'Vorige' onder aan de pagina.</p>
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
            <form class="form-horizontal col-md-10 m-l20" method="POST" action="betalenFormulier.php">
                <h4>Selecteer hier de grootte en het gewicht van u pakket. </h4><br>
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
                <br>
                <h4>Verpakken van het pakket</h4>
                <p> TZT biedt de service om voor u het pakket te verpakken, als u dit niet wilt moet u er zelf voor zorgen dat het pakket wordt verpakt. 
                    Als het pakket fragiel is vermeld dit dan duidelijk.</p>
                <div class='checkbox' required>
                    <label>
                        <?php
                        
                        if ($_SESSION['Verpakken'] == 'on') {
                            ?>
                        <input type="checkbox" name='Verpakken' value="on" checked> Laat het pakket verpakken door TZT (+ €6,00). 
                        <?php
                        }else{
                            ?>
                         <input type="checkbox" name='Verpakken' value="on"> Laat het pakket verpakken door TZT (+ €6,00). 
                         <?php
                        }
                        ?>
                        </label>
                </div><br>
                <input class="btn btn-primary floatr" type="submit" value="Volgende" name="Volgende1">
                <input class="btn btn-default floatr buttonL" type="submit" value="Vorige" name="Vorige">
            </form>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
