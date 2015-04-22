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
            <table>
            <?php
                
                include "../database.php";
                
                //$username = $_SESSION['Email'];
                //$password = $_SESSION['Password'];
                $username = 'pieter@live.nl';
                
                $userid = mysqli_prepare($database, "SELECT Username, SendCustomerID, BodeID FROM Login WHERE Username='$username'");
                mysqli_stmt_execute($userid);
                mysqli_stmt_bind_result($userid, $name, $user, $bodeid);
                mysqli_stmt_fetch($userid);
                print ("<p>".$name." + ".$user." + ".$bodeid."</p>");
                
//                $loginid = mysqli_prepare($database, "SELECT SendCustomerID, BodeID FROM Login WHERE Username='$username'");
//                mysqli_stmt_execute($loginid);
//                mysqli_stmt_bind_result($loginid, $sendcustomerid, $bodeid);
//                mysqli_stmt_fetch($loginid);
//                print ($sendcustomerid."+".$bodeid);
                
//                $stmt1 = mysqli_prepare($database, "SELECT PackageID, Signing, StatusID, CoerierType, SendCustomerID FROM Package WHERE SendCustomerID = '$sendcustomerid' AND StatusID = 3");
//                mysqli_stmt_execute($stmt1);
//                mysqli_stmt_bind_result($stmt1, $packageid, $signing, $statusid, $coeriertype, $customerid);
//                while(mysqli_stmt_fetch($stmt1))
//                {
//                    echo '<tr><td>'.$packageid.'</td>';
//                    echo '<td>'.$signing.'</td>';
//                    echo '<td>'.$statusid.'</td>';
//                    echo '<td>'.$coeriertype.'</td>';
//                    echo '<td>'.$customerid.'</td></tr>';
//                }
//                $loginid = ("SELECT SendCustomerID, BodeID FROM Login WHERE Username='$username'");
//                $control = mysqli_query($database, $loginid);
//                mysqli_fetch_assoc($control);
                
                mysqli_close($database);               
            ?>
            </table>
        </div>
            <?php
                include '../footer.php';
            ?>
    </body>
</html>

