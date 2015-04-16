<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'database.php';
        if (!isset($_POST["registreren"])) {
            ?>
            <form class="form-horizontal" method="POST" action="registreren.php">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Bedrijfsnaam(optioneel)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="companyname" placeholder="Bedrijfsnaam">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Voornaam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="firstname" placeholder="Voornaam" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Achternaam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lastname" placeholder="Achternaam" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Adres</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="adress" placeholder="Adres" required>
                        <input type="number" class="form-control" name="housenr" placeholder="Nr" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Postcode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="zipcode" placeholder="Postcode" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Plaats</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="city" placeholder="Plaats" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Telefoonnummer</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" name="phone" placeholder="Telefoonnummer" required >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Wachtwoord</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Wachtwoord" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Herhaal wachtwoord</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="verify" placeholder="Herhaal wachtwoord" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" name="registreren" onclick="return validate();">Registreren</button>
                        <button type="reset" class="btn btn-default" name="annuleren">Annuleren</button>
                    </div>
                </div>
            </form>

            <?php
        }
        if (isset($_POST["registreren"])) {
            if (isset($_POST["companyname"])) {
                $companyname = ($_POST["companyname"]);
            }
            $firstname = ($_POST["firstname"]);
            $lastname = ($_POST["lastname"]);
            $adress = ($_POST["adress"]);
            $zipcode = ($_POST["zipcode"]);
            $city = ($_POST["city"]);
            $email = ($_POST["email"]);
            $phone = ($_POST["phone"]);

            if (($_POST["verify"]) !== ($_POST["password"])) {
                print("<font color='red'>De opgegeven wachtwoorden komen niet overeen!</font>");

                print ("<form class='form-horizontal' method='POST' action='registreren.php'>
                    <div class='form-group'>
                <label class='col-sm-2 control-label'>Bedrijfsnaam (Optioneel):</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' name='companyname' value='");
                if (isset($_POST["companyname"])) {
                    print ($_POST["companyname"]);
                } print("'>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Voornaam</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' name='firstname' value='" . $_POST["firstname"] . "' required>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Achternaam</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' name='lastname' value='" . $_POST["lastname"] . "' required>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Adres</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' name='adress' value='" . $_POST["adress"] . "' required>
                    <input type='number' class='form-control' name='housenr' value='" . $_POST["housenr"] . "' required> 
                </div>
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Postcode</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' name='zipcode' value='" . $_POST["zipcode"] . "' required>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Plaats</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' name='city' value='" . $_POST["city"] . "' required>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>E-mail</label>
                <div class='col-sm-10'>
                    <input type='email' class='form-control' name='email' value='" . $_POST["email"] . "' required>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Telefoonnummer</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' name='phone' value='" . $_POST["phone"] . "' required>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Wachtwoord</label>
                <div class='col-sm-10'>
                    <input type='password' class='form-control' name='password' placeholder='Wachtwoord' required>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Herhaal Wachtwoord</label>
                <div class='col-sm-10'>
                    <input type='password' class='form-control' name='verify' placeholder='Herhaal wachtwoord' required>
                </div>
            </div>
            <div class='form-group'>
                <div class='col-sm-offset-2 col-sm-10'>
                    <button type='submit' class='btn btn-default' name='registreren' onclick='return validate();'>Registreren</button>
                    <button type='reset' class='btn btn-default' name='annuleren'>Annuleren</button>
                </div>
            </div>
            </form>");
            } else {
                $query = "SELECT emailadres FROM sendcostumer WHERE emailadres = '" . ($_POST["email"]) . "'"; //Controleert of de ingevoerde waarden al voorkomen in de database

                $control = mysqli_query($database, $query);

                $result = mysqli_fetch_assoc($control);
                if ($result['email'] == $_POST["email"]) {
                    print ("<br><font color='orange'>Dit e-mailadres is reeds bekend in ons systeem!</font>");
                    goto end;
                }
                $password = $_POST["password"];
                $sha1pass = sha1($password);
                
                $companyname = $_POST["companyname"];
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $adress = $_POST["adress"];
                $housenr = $_POST["housenr"];
                $zipcode = $_POST["zipcode"];
                $city = $_POST["city"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                
                
                $stmt = mysqli_prepare($database, "INSERT INTO sendcostumer VALUES (?,?,?,?,?,?,?,?,?,?)");
                mysqli_stmt_bind_param($stmt, "ssssssssss", $firstname, $lastname, $adress, $housenr, $city, $zipcode,  $email, $companyname, $phone);
                mysqli_prepare($database, $query);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_free_result($stmt);
                mysqli_stmt_close($stmt);
                
                Print("<font color='green'>U bent succesvol geregistreerd!</font><a href='login.php'>Inloggen</a>");
            }
        } end:
        ?>
    </body>
</html>
