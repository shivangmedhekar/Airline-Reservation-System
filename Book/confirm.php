<?php
include ("../Database/dbconfig.php");

$name = $_GET['fname']." ".$_GET['lname'];
$age = $_GET['age'];
$contact = $_GET['contact'];
$email = $_GET['email'];
$flight_id = $_GET['flight_selected'];

$sql = "select * from seat where s_seat = 'A' limit 1";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$seat_id = $row['s_id'];
$seat_fare = $row['s_fare'];

$sql = "select * from booking";
$result = mysqli_query($conn, $sql);

$pnr_no = rand(111111,999999);
$okay = 1;
if($result){
    if(mysqli_num_rows($result) > 0){

        do{
            if ($okay == 0){
                $pnr_no = rand(111111,999999);
                $sql = "select * from booking";
                $result = mysqli_query($conn, $sql);
            }
            $okay = 1;
            while($row = mysqli_fetch_array($result)){

                if ($pnr_no == $row['pnr_no']){
                    $okay = 0;
                }
            }
        }while($okay != 1);

        mysqli_free_result($result);
    }
}

?>




<html>

<head>

    <title></title>

    <!--BootStrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/agency.js"></script>


    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <style>
        .btn{
            margin-right: 20px;
        }
    </style>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">


</head>


<style>
    .info{
        text-align: center;
    }
</style>
<body>
<nav class="navbar navbar-default" style="background-color: darkslateblue">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php" style="color: white">Airline Reservation System</a>
        </div>

    </div>
</nav>


<h2 style="text-align: center">Booking Summary</h2>

<?php

$sql = "select * from flight where f_id =".$flight_id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result)
?>
<div class="info">
<h4>Flight ID: <?php echo $row['f_id'];?></h4>
<h4>Flight Name: <?php echo $row['name'];?></h4>
<h4>Source: <?php echo $row['source'];?></h4>
<h4>Destination: <?php echo $row['destination'];?></h4>
<h4>Flight ID: <?php echo $row['f_id'];?></h4>


<p>Additional Services</p>
<p>Price: <?php echo $seat_fare ?></p>
<p>Seat: <?php echo $seat_id; ?></p>
</div>

<form action="summary.php" method="post">

    <label for="payment-method">Payment Method</label>
    <select name="payment-method">
        <option>Card</option>
        <option>Online Banking</option>
    </select>


    <input name="p_name" value="<?php echo $name; ?>" type="text" style="display: none">
    <input name="p_age" value="<?php echo $age; ?>" type="text" style="display: none">
    <input name="p_contact" value="<?php echo $contact; ?>" type="number" style="display: none">
    <input name="p_email" value="<?php echo $email; ?>" type="email" style="display: none">
    <input name="flight_id" value="<?php echo $flight_id; ?>" type="number" style="display: none">
    <input name="seat_id" value="<?php echo $seat_id; ?>" type="number" style="display: none">
    <input name="pnr_no" value="<?php echo $pnr_no; ?>" type="number" style="display: none">

    <br>
    <input name="book" type="submit" value="Book" class="btn btn-success" style="margin-left: 46%; width: 10%">




</form>


</body>

</html>