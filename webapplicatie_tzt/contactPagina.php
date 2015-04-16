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

            <script type='text/javascript'>
                function refreshCaptcha() {
                    var img = document.images['captchaimg'];
                    img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
                }
            </script>
            <?php
            if (isset($_POST['verzenden'])) {
                session_start();
                // Wanneer op verzenden wordt gedrukt, wordt de captcha gecontrolleerd.
                if (empty($_SESSION['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0) {
                    $verstuurd = FALSE;
                    ?>               <div class="container">
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
 
            <span>Helaas, de ingevoerde code is onjuist! Klik <a href="contactPagina.php">hier</a> om terug te gaan naar het klachtenformulier.</span> 
                </div><?php
                } else {// Captcha is correct ingevuld, het formulier wordt nu verzonden.
                    if (isset($_POST['verzenden'])) {
                        $ToEmail = 'eric.h@live.nl'; // Naar welke e-mail moet het idee gestuurd worden?
                        $EmailSubject = 'Klachtenformulier TZT Post'; // Onderwerp de e-mail
                        $mailheader = "From: " . 'klachten@tztpost.nl' . "\r\n"; // Omdat het ook anoniem moet kunnen, standaard afzender ingesteld.
                        $mailheader .= "Reply-To: " . 'klachten@tztpost.nl' . "\r\n";
                        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
                        // Nu komt wat er in het bericht komt te staan. Bij anonieme ingave zijn alleen het onderwerp en idee ingevuld.
                        $MESSAGE_BODY = "Naam: " . $_POST['naam'] . "<BR>";
                        $MESSAGE_BODY .= " Email: " . $_POST["email"] . "<BR>";
                        $MESSAGE_BODY .= " Onderwerp: " . $_POST["onderwerp"] . "<BR>";
                        $MESSAGE_BODY .= " Opmerking: " . nl2br($_POST["bericht"]) . "<BR>";
                        // Mail verzenden
                        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die("<p> Er ging iets mis bij het verzenden.</p>");
                        $verstuurd = TRUE;
                    }
                    ?>

                    <div class="succes col-sm-12">
                        <h3>Uw bericht is verzonden</h3>
                    </div>
                    <?php
                }
            } else {
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

                            <div class="grootte">
                                <form class="form-horizontal" method="POST" action="contactPagina.php">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Naam</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="naam" placeholder="Naam">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email*</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Onderwerp*</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="onderwerp" placeholder="Onderwerp" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Bericht*</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="6" name="bericht" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <img src="klacht/captcha.php?rand=<?php echo rand(); ?>" id='captchaimg'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Code*</label>


                                        <div class="col-sm-10">
                                            <input id="captcha_code" name="captcha_code" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            Kunt u de afbeelding niet lezen? Klik <a href='javascript: refreshCaptcha();'>hier</a> om te vernieuwen.<br>
                                            <i>Velden met een * zijn verplicht.</i>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default" name="verzenden" onclick="return valida
                                                        te();">Verzenden</button>
                                            <button type="reset" class="btn btn-default" name="annuleren">Annuleren</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </body>
</html>