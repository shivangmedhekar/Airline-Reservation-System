<?php

include ("../Database/dbconfig.php");

if (isset($_POST['book'])){

    $p_name = $_POST['p_name'];
    $p_age = $_POST['p_age'];
    $p_contact = $_POST['p_contact'];
    $p_email = $_POST['p_email'];

    $f_id = $_POST['flight_id'];

    $s_id = $_POST['seat_id'];

    $p_idproof = "passport";


    $pnr_no = $_POST['pnr_no'];
}

$sql = "insert into passenger values('".$p_name."','".$p_email."','".$p_idproof."','".$p_age."',".$p_contact.")";
mysqli_query($conn, $sql);

$sql = "insert into booking values('".$p_name."',".$s_id.",".$f_id.",CURDATE(),".$pnr_no.")";
mysqli_query($conn, $sql);

$sql = "update seat set s_seat = 'B' where s_id = ".$s_id;
mysqli_query($conn, $sql);

$sql = "update flight set no_of_seats_available = no_of_seats_available - 1 where f_id = ".$f_id;
mysqli_query($conn, $sql);


$sql = "select no_of_seats_available from flight where f_id =".$f_id;
mysqli_query($conn, $sql);





?>


<html>
<head>
    <title>Summary</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-default" style="background-color: darkslateblue">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php" style="color: white">Airline Reservation System</a>
        </div>

    </div>
</nav>
<body style="text-align: center">

<p style="font-size: 300%">PNR NO: <?php echo $pnr_no;?></p>

<p style="font-size: 100%> Please carry a valid ID proof while boarding the flight.</p>
<p style="font-size: 100%">Thank You</p>



<a href="../index.php"><button class="btn btn-primary">Home Page</button></a>
</body>
</html>