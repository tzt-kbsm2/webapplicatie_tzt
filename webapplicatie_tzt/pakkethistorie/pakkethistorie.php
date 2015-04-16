<?php

                include "database.php";
                $username = $_SESSION['Email'];
                $password = $_SESSION['Password'];

                $loginid = mysqli_prepare($database, "SELECT Email, CustomerID FROM SendCustomer WHERE Email='$username'");
                mysqli_stmt_execute($loginid);
                mysqli_stmt_bind_result($loginid, $email, $customerid);
                mysqli_stmt_fetch($loginid, $email, $customerid);
                
                $stmt1 = mysqli_prepare($database, "SELECT PackageID, SendDate, DeliverDate, StartLocation, EndLocation, CoerierType FROM Package P JOIN SendCustomer S ON P.PackageID = S.CustomerID WHERE S.CustomerID = $customerid ");
                mysqli_stmt_execute($stmt1);
                mysqli_stmt_bind_result($stmt1, $package, $senddate, $deliverdate, $startlocation, $endlocation, $coeriertype);
                while (mysqli_stmt_fetch($stmt1))
                {
                    echo '<td>'.$package.'</td>';
                    echo '<td>'.$senddate.'</td>';
                    echo '<td>'.$deliverdate.'</td>';
                    echo '<td>'.$startlocation.'</td>';
                    echo '<td>'.$endlocation.'</td>';
                    echo '<td>'.$coeriertype.'</td>';
                }

                mysqli_close($database);

?>