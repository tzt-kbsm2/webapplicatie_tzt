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
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <title>Tzt WebApplicatie</title>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=nl"></script>
        <script type="text/javascript">
            ///////////////////////////////////////////////////////////////////
            // Powered By MapsEasy.com Maps Generator                        
            // Please keep the author information as long as the maps in use.
            // You can find the free service at: http://www.MapsEasy.com     
            ///////////////////////////////////////////////////////////////////
            function LoadGmaps() {
                var myLatlng = new google.maps.LatLng(52.5000746, 6.0808761);
                var myOptions = {
                    zoom: 16,
                    center: myLatlng,
                    disableDefaultUI: true,
                    panControl: true,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.DEFAULT
                    },
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    streetViewControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(document.getElementById("MyGmaps"), myOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: "campus 2D 8017 CA Zwolle"
                });
            }


        </script>
    </head>
    <body onload="LoadGmaps()" onunload="GUnload()">
        <div class="container">
            <header>
                <div class="logo">
                    <img src="image/logoTzt.jpg" alt="" width="" height="80"/>
                </div>
                <div id="menu">
                    <ul class="nav nav-pills">
                        <li role="presentation" ><a href="index.php">Home</a></li>
                        <li role="presentation"><a href="#">Over</a></li>
                        <li role="presentation"><a href="#">Online versturen</a></li>
                        <li role="presentation" class="active"><a href="contactPagina.php">Contact</a></li>
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
            </header>
            <?php
            include 'navigatiebalk.php';
            ?>
                <div class="container">
                    <div class='row ' style=" margin-top: 3%;border-radius: 5px;" >
                        <div class="col-lg-12 col-sm-12 kopcontact">
                            <h3>
                                Onze locatie
                            </h3>
                        </div>

                        <!-- Maps DIV : you can move the code below to where you want the maps to be displayed -->
                        <div class="col-lg-12 col-sm-12" id="MyGmaps" style="width:98%;height:400px; margin:1%;"></div>
                        <!-- End of Maps DIV -->
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="contact overOns col-lg-4 col-sm-4">
                            <div>
                                <h3> 
                                    Over ons</h3> 
                                <hr>
                            </div>
                            <p>
                                Schoolstraat 10<br>
                                1700 AB Zwolle <br>
                                <br>
                                Telefoon: <a href="tel:0331223567" >033 12 34 567 </a><br>
                                E-mail: <a href="mailto:info@tzt.nl">info@tzt.nl</a>
                            </p>
                        </div>

                        <div class="contact col-md-7">
                            <div>
                                <h3>
                                    Contact formulier 
                                </h3>
                                <hr>
                            </div>

                            <form class="form-horizontal" method="POST" action="verwerk.php">
                                <div class="form-group">
                                    <label for="naam" class="col-sm-2 control-label"> Naam </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="naam" name="naam" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="adres" class="col-sm-2 control-label"> Adres </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="adres" name="adres" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="postcode" class="col-sm-2 control-label"> Postcode </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="postcode" name="postcode" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="plaats" class="col-sm-2 control-label"> Plaats </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="plaats" name="plaats" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label"> E-mail </label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="telefoonnummer" class="col-sm-2 control-label"> Telefoonnummer </label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="telefoonnummer" name="telefoonnummer" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bericht" class="col-sm-2 control-label"> Bericht </label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" name="bericht" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="captcha" class="col-sm-2"> </label>

                                    <div class="col-sm-10">
                                        <img src="captcha.php" width="25%;" style="margin-bottom: 1%; border-radius: 3px;"/> 
                                        <input class="form-control" id="captcha" name="captcha" type="text" placeholder="Vul hier de code in" required>

                                    </div>

                                </div>
                                <input class="btn btn-default" type="submit" value="Verstuur" name="verstuur">
                            </form>

                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>