<?php
session_start();
if (isset($_POST['Vorige'])) {
    header("location: adresFormulier.php");
    exit();
}

if (isset($_POST['Verpakken'])) {
    $_SESSION['Verpakken'] = $_POST['Verpakken'];
} else if (!isset($_POST['Verpakken']) && isset($_POST['from1'])) {
    $_SESSION['Verpakken'] = "";
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
                <a href="pakketFormulier.php">Stap 2</a>
                <b>-</b>
                <!--stap 3 betalen-->
                <a href="betalenFormulier.php" class="actief">Stap 3</a>
                <b>-</b>
                <!--stap 4 bevestiging-->
                <a href="">Stap 4</a><br><br>

            </div>
	    <?php
	    if (isset($POST['Volgende1'])) {
		$Weight = $_POST['Gewicht'];
		$Size = $_POST['Grootte'];
		$CreationDate = date("d-m-Y h:i:sa");
		// include'database.php';
		$result = mysqli_query($link, "INSERT INTO Package (CreationDate,Size,Weight) VALUES('$CreationDate','$Size','$Weight')");
//if(!$result){
//	echo "FOUT: ".mysqli_error($link);
//}
	    }
	    ?>
	    <div class="col-sm-6 m-l35">
                <form class="form-horizontal" method="POST" action="bevestiging.php">
                    <h4>Hoe wilt u betalen?</h4>
                    <br>
                    <div class="col-sm-5">
                        <select class="form-control" name="BetaalMethode" required>
                            <option value="Ideal"> Ideal </option>
                            <option value="Factuur"> Factuur (+ €2,00)</option>
                        </select>
                        <br>
                    </div>

                    <div class="col-md-12">
			<input class="btn btn-primary floatr" type="submit" value="Volgende" name="Volgende2">
			<input class="btn btn-default floatr buttonL" type="submit" value="Vorige" name="Vorige2">
                    </div>
                </form>
            </div>
        </div>
	<?php include 'footer.php';
	?>
    </body>
</html>
