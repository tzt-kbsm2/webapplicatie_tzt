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
        <div class="container">
            <header>
                <div class="logo">
                    <img src="image/logoTzt.jpg" alt="" width="" height="80"/>
                </div>
                <div id="menu">
                    <ul class="nav nav-pills">
                        <li role="presentation" class="active"><a href="#">Home</a></li>
                        <li role="presentation"><a href="#">Over</a></li>
                        <li role="presentation"><a href="#">Online versturen</a></li>
                        <li role="presentation"><a href="#">Contact</a></li>
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
            <div id="slider">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="image/slide1.jpg" alt="...">
                        <div class="carousel-caption">
                          Test bericht 1
                        </div>
                      </div>
                        
                      <div class="item">
                        <img src="image/slide2.jpg" alt="...">
                        <div class="carousel-caption">
                          Test bericht 2
                        </div>
                      </div>
                        
                      <div class="item">
                        <img src="image/slide3.jpg" alt="...">
                        <div class="carousel-caption">
                          Test bericht 3
                      </div>
                      </div>
                        
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="container welkommargin">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Welkom</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                It has survived not only five centuries, but also the leap into electronic typesetting, 
                                remaining essentially unchanged.<br> 
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="image/WelkomTzt.png" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        <div class="caption">
                          <h3>Tarief berekenen</h3>
                          <img src="image/TariefBerekenen.png" alt=""/>
                          <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. 
                              Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw.</p>
                          <a href="#" class="btn btn-primary btn-lg" role="button">Berekenen</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        <div class="caption">
                          <h3>Koerier worden</h3>
                          <img src="image/KoerierWorden.png" alt=""/>
                          <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. 
                              Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw.</p>
                          <a href="#" class="btn btn-primary btn-lg" role="button">Registreren</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        <div class="caption">
                          <h3>Verzenden voor 3 uur!</h3>
                          <img src="image/VerzendenVoor3.png" alt=""/>
                          <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. 
                              Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw.</p>
                          <a href="#" class="btn btn-primary btn-lg" role="button">Lees meer</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Contact</h3>
                            <table>
                                <tr><td><strong>TZT B.V.</strong></td></tr>
                                <tr><td>Schoolstraat 10</td></tr>
                                <tr><td>1700 AB</td></tr>
                                <tr><td>Zwolle</td></tr>
                                <tr><td><a class="footerlink" href="mailto:info@tzt.nl&subject=Ik%20heb%20een%20vraag" target="_top">Info@tzt.nl</a></td></tr>
                                <tr><td>033 12 34 567</td></tr>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <h3>Bedrijf</h3>
                            <table>
                                <tr><td><a class="footerlink" href="#">Over TNT</a></td></tr>
                                <tr><td><a class="footerlink" href="#">TNT Corporate Website</a></td></tr>
                                <tr><td><a class="footerlink" href="#">Vacatures</a></td></tr>
                                <tr><td><a class="footerlink" href="#">Help</a></td></tr>
                                <tr><td><a class="footerlink" href="#">Pers</a></td></tr>
                                <tr><td><a class="footerlink" href="#">Algemene Voorwaarden</a></td></tr>
                                <tr><td><a class="footerlink" href="#">Privacybeleid</a></td></tr>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <h3>Diensten</h3>
                            <table>
                                <tr><td><a class="footerlink" href="#">Groen bezorgen</a></td></tr>
                                <tr><td><a class="footerlink" href="#">Tijd- en daggegarandeerd</a></td></tr>
                                <tr><td><a class="footerlink" href="#">Vracht</a></td></tr>
                                <tr><td><a class="footerlink" href="#">Special Services</a></td></tr>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <h3>Vind ons ook op:</h3>
                            <table>
                                <tr><td><a class="footerlink" href="http://www.facebook.nl" target="blank">Facebook</a></td></tr>
                                <tr><td><a class="footerlink" href="http://www.twitter.com" target="blank">Twitter</a></td></tr>
                                <tr><td><a class="footerlink" href="http://www.youtube.nl" target="blank">Youtube</a></td></tr>
                                <tr><td><a class="footerlink" href="http://www.instagram.com" target="blank">Instagram</a></td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </footer>
	<?php
	// put your code here
	?>
    </body>
</html>
