<?php
if (isset($_POST['Vorige'])) {
    header("location: adresFormulier.php");
    exit();
} elseif (isset($_POST['Volgende'])) {
    header("location: betalenFormulier.php");
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        if (isset($POST['Volgende'])) {
            $bedrijfzender = $_POST['BedrijfV'];
            $bedrijfontvanger = "";
            $voornaamzender = $_POST['FirstnameV'];
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
            $emailadresontvanger = "";
            $telefoonnummerzender = "";
            $telefoonnummerontvanger = "";
            mysqli_query($connect, "INSERT INTO  VALUES ('" . $bedrijfszender . "','" . $voornaamzender . "','" . $achternaamzender . "','" . $adreszender . "','" . $adreszender . "','" . $postcodezender . "','" . $plaatszender . "','" . $emailadreszender . "','" . $telefoonzender . "");
            mysqli_query($connect, "INSERT INTO  VALUES ('" . $bedrijfsontvanger . "','" . $voornaamontvanger . "','" . $achternaamontvanger . "','" . $adresontvanger . "','" . $adresontvanger . "','" . $postcodeontvanger . "','" . $plaatsontvanger . "','" . $emailadresontvanger . "','" . $telefoonontvanger . "");
        }



//        if(isset($POST['Volgende'])){
//            $Weight = $_POST['Gewicht'];
//            $Size = $_POST['Grootte'];
//            $CreationDate = date("d-m-Y h:i:sa");
//            // include'database.php';
//            $result = mysqli_query($link, "INSERT INTO Package (CreationDate,Size,Weight) VALUES('$CreationDate','$Size','$Weight')");
////if(!$result){
////	echo "FOUT: ".mysqli_error($link);
////}
//        }
        ?>

        <div class="container col-md-10" style="border: 1px solid black">
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
                <a href="bevestiging.php">Stap 4</a><br><br>

            </div>

            <form class="form-horizontal col-md-8 m-l20" method="POST" action="pakketFormulier.php">
                <div class="form-group">
                    <label class="col-sm-4 control-label"> Pakket grootte </label>
                    <div class="col-sm-6">
                        <select class="form-control" name="Grootte">
                            <option value="Klein"> kleiner dan 50 cm bij 50 cm </option>
                            <option value="Groot"> groter dan 50 cm bij 50 cm </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"> Gewicht pakket </label>
                    <div class="col-sm-6">
                        <select class="form-control" name="Gewicht">
                            <option value="klein"> kleiner dan 10 kg </option>
                            <option value="groot"> groter dan 10 kg </option>
                        </select>
                    </div>
                </div>
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                    letop! Als het pakket fragiel is, vermeld het dan duidelijk op het pakket.
                </div>
                <input style="float: right" class="btn btn-default" type="submit" value="Volgende" name="Volgende">
                <input style="float: right" class="btn btn-default" type="submit" value="Vorige" name="Vorige">
            </form>
        </div>
    </body>
</html>
