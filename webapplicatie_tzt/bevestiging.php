<?php
if (isset($_POST['Vorige2'])) {
    header("location: pakketFormulier.php");
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
        </div>
            <?php include 'footer.php';
        ?>
    </body>
</html>
