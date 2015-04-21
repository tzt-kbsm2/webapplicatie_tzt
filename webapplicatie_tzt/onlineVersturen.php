<?php
session_start();
if (isset($_POST['Vorige3'])) {
    header("location: betalenFormulier.php");
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
	    <?php
	    if (isset($_POST['Afronden'])) {
		?>
    	    <div class="col-sm-12 OV2">
    		<h3>Bedankt voor u bestelling, u krijgt nu een mail met informatie over het pakket.</h3>
    	    </div>
		<?php
		session_destroy();
	    } else {
		?>
    	    <div class="col-sm-12 OV">
    		<div class="col-sm-6 OVlinks">
    		    <h4>Inloggen</h4>
    		    <form method="POST" class="form-horizontal" action="#">
    			<div class="form-group">
    			    <label for="email" class="control-label col-sm-3">E-mail adres</label>
    			    <div class="col-sm-9">
    				<input type="email" class="form-control" name="email">
    			    </div>
    			</div>
    			<div class="form-group">
    			    <label for="ww" class="control-label col-sm-3">Wachtwoord</label>
    			    <div class="col-sm-9">
    				<input type="password" class="form-control" name="ww">
    			    </div>
    			</div>
    			<button type="submit" class="btn btn-primary floatr" name="inloggen">Inloggen</button>
    		    </form>
    		</div>
    		<div class="col-sm-6">
    		    <h4>Registreren als klant</h4>
    		    <form action="registreren.php" class="form-horizontal" method="POST">
    			<button type="submit" class="btn btn-primary" name="registreren">Registreren</button>
    		    </form>
    		    <hr>
    		    <form action="adresFormulier.php" class="form-horizontal" method="POST">
    			<h4>Pakket aanmelden</h4>
    			<button type="submit" class="btn btn-primary" name="aanmelden">Pakket aanmelden</button>
    		    </form>
    		</div>
    	    </div>
		<?php
	    }
	    ?>
        </div>
	<?php include 'footer.php';
	?>
    </body>
</html>
