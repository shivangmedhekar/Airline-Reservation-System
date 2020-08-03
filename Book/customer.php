<?php

include ("../Database/dbconfig.php");

$sql = "select no_of_seats_available from flight where f_id = 111";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);


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

        .form-control{
            width: 30%;
        }

        .form-group{
            margin-top: 5%;
            margin-left: 41%;
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

<body>
<nav class="navbar navbar-default" style="background-color: darkslateblue">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php" style="color: white">Airline Reservation System</a>
        </div>

    </div>
</nav>

<div class="form-group">


    <form action="confirm.php" method="GET">

        <label>Enter First Name</label>
        <input type="text" name="fname" class="form-control">

        <br>


        <label>Enter Last Name</label>
        <input type="text" name="lname" class="form-control">

        <br>


        <label>Age</label>
        <select name="age" class="form-control">
            <option value="adult">Adult</option>
            <option value="child">Child</option>

        </select>


        <br>

        <label>Contact Number</label>
        <input type="number" name="contact" class="form-control">


        <br>
        <label>Email</label>
        <input type="email" name="email" class="form-control">

        <br>


        <input type="text" value="<?php echo $_GET['flight_select']?>" name="flight_selected" style="display: none">

        <input type="submit" value="Next" name="customer-submit" class="form-control btn btn-success">


    </form>

</div>




</body>
</html>