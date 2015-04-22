<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <title>Tzt WebApplicatie</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="../image/logoTzt.jpg" alt="" width="" height="80"/>
                </div>
                <div id="menu">
                    <ul class="nav nav-pills">
                        <li role="presentation" ><a href="index.php">Home</a></li>
                        <li role="presentation"><a href="#">Over</a></li>
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
            <h1>Pakkethistorie</h1>
            <table class="table">
                <th>Pakkettitel</th>
                <th>Status</th>
                <th>Lengte</th>
                <th>Hoogte</th>
                <th>Breedte</th>
                <th>Gewicht</th>
                <th>Geregistreerd</th>
                <th>Verzonden</th>
                <th>Afgeleverd</th>
            <?php
                
                include "../database.php";
                
                //$username = $_SESSION['Email'];
                //$password = $_SESSION['Password'];
                $username = 'melissa@bol.com';
                
                $userid = mysqli_prepare($database, "SELECT Username, SendCustomerID, CoerierID FROM Register WHERE Username='$username'");
                mysqli_stmt_execute($userid);
                mysqli_stmt_bind_result($userid, $name, $senduserid, $bodeid);
                mysqli_stmt_fetch($userid);
                print ("<p>".$name."<br>"."SendCustomerID: ".$senduserid."</p>");
                mysqli_close($database);
                
                include "../database.php";
                $result = mysqli_query($database, "SELECT CompanyName, Length, Height, Width, Weight, StatusType , CreationDate, SendDate, DeliverDate FROM Package P JOIN Status S ON P.PackageID = S.PackageID WHERE SendCustomerID = 1 AND StatusType = 3");
                $row = mysqli_fetch_assoc($result);
                while($row){
                        print("<tr><td>".$row["CompanyName"]."</td>");
                        
                        if($row["StatusType"]==0){
                            print("<td>Pakket is geregistreed</td>");
                        } if($row["StatusType"]==1){
                            print("<td>Pakket is in behandeling</td>");
                        } if($row["StatusType"]==2){
                            print("<td>Pakket is onderweg</td>");
                        } if($row["StatusType"]==3){
                            print("<td>Pakket is afgeleverd</td>");
                        }
                        
                        print("<td>".$row["Length"]." cm </td>");
                        print("<td>".$row["Height"]." cm </td>");
                        print("<td>".$row["Width"]." cm </td>");
                        print("<td>".$row["Weight"]." kg </td>");
                        print("<td>".$row["CreationDate"]." </td>");
                        print("<td>".$row["SendDate"]." </td>");
                        print("<td>".$row["DeliverDate"]." </td></tr>");
                        $row = mysqli_fetch_assoc($result);
                }
                
                mysqli_close($database);               
            ?>
            </table>
        </div>
            <?php
                include '../footer.php';
            ?>
    </body>
</html>

