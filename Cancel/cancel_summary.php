<?php
/**
 * Created by PhpStorm.
 * User: shivangmedhekar
 * Date: 10/21/18
 * Time: 6:14 PM
 */

include ("../Database/dbconfig.php");

if (isset($_POST['cancel'])){
    echo $pnr_no = $_POST['pnr_no'];

    $sql = "select * from booking where pnr_no = ".$pnr_no;
    $result = mysqli_query($conn, $sql);

    if($result){
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){

                $f_id = $row['f_id'];
                $s_id = $row['s_id'];
                $p_name = $row['p_name'];

            }


            // Free result set
            mysqli_free_result($result);
        }
    }

    $sql = "insert into cancelation values('".$p_name."',".$s_id.",".$f_id.",CURDATE(),".$pnr_no.")";
    mysqli_query($conn, $sql);

    $sql = "delete from booking where pnr_no = ".$pnr_no;
    mysqli_query($conn, $sql);

    $sql = "delete from passenger where p_name = '".$p_name."'";
    mysqli_query($conn, $sql);

    $sql = "update seat set s_seat = 'A' where s_id = ".$s_id;
    mysqli_query($conn, $sql);

    $sql = "update flight set no_of_seats_available = no_of_seats_available + 1 where f_id = ".$f_id;
    mysqli_query($conn, $sql);



}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Canceled</title>
</head>

<nav class="navbar navbar-default" style="background-color: darkslateblue">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php" style="color: white">Airline Reservation System</a>
        </div>

    </div>
</nav>
<body>

<div style="text-align: center">
    <h1>Your Booking has been cancelled</h1>
    <a href="../index.php"><button class="btn btn-primary">Go Home</button></a>
</div>

</body>
</html>
