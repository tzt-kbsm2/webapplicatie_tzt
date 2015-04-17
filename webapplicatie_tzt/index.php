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
                        <li role="presentation" class="active"><a href="index.php">Home</a></li>
                        <li role="presentation"><a href="overOns.php">Over</a></li>
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
        <div class="container">
            <div id="slider">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active slider">
                            <img src="image/Trein.jpg">
                            <div class="carousel-caption">
                                <h2>Wil jij geld verdienen terwijl je naar school reist?</h2>
                                <p>Dat kan nu bij TZT! TZT is een bezorgdienst waarbij ze gebruik maken van treinreizigers.  </p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="image/slide2.jpg" alt="...">
                            <div class="carousel-caption">
                                <h2>Test bericht 2</h2>
                            </div>
                        </div>

                        <div class="item">
                            <img src="image/slide3.jpg" alt="...">
                            <div class="carousel-caption">
                                <h2>Test bericht 3</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container welkommargin">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Volg u pakket</h3>
                                <img src="image/TariefBerekenen.png" alt=""/>
                                <form method='POST' action='#' class='form-horizontal'>
                                    <div class="form-group col-sm-10">
                                    <input type='text' name='trackTrace' class="form-control">
                                    </div>
                                    <div class="form-group">
                                         <div class="col-sm-10">
                                    <input type='submit' name='zoek' class='btn btn-primary floatr'>
                                         </div>
                                    </div>
                                </form>
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
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
