<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                        <li role="presentation"><a href="index.php">Home</a></li>
                        <li role="presentation" class="active"><a href="overOns.php">Over</a></li>
                        <li role="presentation"><a href="onlineVersturen.php">Online versturen</a></li>
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
        <div class='container'>
           
            <div class='row' >
                <div class='col-md-7'>
                    <h1>Over TZT</h1>
                    <p>TZT is sinds 2013 actief op de Nederlandse markt. 
                        Een bedrijf of particulier kan TZT bellen om een pakket op te halen en te bezorgen op een willekeurig adres in Nederland. 
                        Pakketten die voor 15.00u zijn aangemeld worden dezelfde dag nog bezorgd. 
                        TZT werkt hiervoor samen met een aantal koeriersdiensten. 
                        TZT onderzoekt de voor de klant voordeligste optie om het pakket te laten bezorgen en schakelt de bijbehorende koeriers hiervoor in. 
                        Afhankelijk van de af te leggen afstand wordt de juiste koerier ingeschakeld. </p>
                </div>
                <div class='col-md-5 m-t5'>
                    <img src="image/WelkomTzt.png" width="80%"/>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-4 m-t5">
                    <img src="image/Trein.jpg" width="100%"/>
                </div>
                <div class="col-md-8">
                    <h1>Public Blended Shipping</h1>
                    <p>Public Blended Shipping ontstond toen Bernard ging googlen op zijn geboortejaar. 
                        In 1990 kon je als student de hele week onbeperkt vrij reizen met bus en tram. Dat triggerde studenten om een koeriersdienst op te zetten waarbij de studenten pakketten gingen bezorgen met de trein. Het bedrijf heette Ritzen koeriers, genoemd naar de toenmalige minister van onderwijs.
                        "Ik heb me altijd druk gemaakt om de klimaatverandering en toen ik het artikel las over de Ritzenkoeriers vroeg ik mij af of je een deel van de reguliere koeriersdiensten in de huidige tijd niet ook per trein zou kunnen afleggen. Ik wilde me niet puur focussen op studenten maar juist wat breder kijken. 
                        Er zijn velen die iedere dag per trein reizen over langere trajecten. Waarom zou je hen niet gewoon inzetten als koerier tegen een kleine vergoeding. Dan verdien je ook nog wat op weg naar studie of werk zonder dat je er heel veel voor hoeft te doen. 
                        Het idee van Public Blended Shipping was geboren."

                    </p>
                </div>
                
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>