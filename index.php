<?php
/**
 * Created by PhpStorm.
 * User: shiva
 * Date: 11/2/2018
 * Time: 11:30 PM
 */

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Airline Reservation System</title>


    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-bottom: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .col-sm-4:hover{
            background-color: darkslateblue;;
            color: white;
        }

    </style>
</head>
<body>

<body>

<div class="jumbotron" style="background-color: darkslateblue; color: white">
    <div class="container text-center">
        <h1>Airline Reservation System</h1>
        <p>By Sohum, Elton and Shivang</p>
    </div>
</div>

<div style="background-color:whitesmoke; height: 50px">

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary" style="text-align: center">
                <div class="panel-heading"><b>Book</b></div>
                <a href="Book/"><div class="panel-body"><img src="Images/airline-1.jpg" class="img-responsive" style="width:100%" alt="Image"></div></a>
                <div class="panel-footer">Book a seat at desired flight</div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-danger" style="text-align: center">
                <div class="panel-heading"><b>Check Status</b></div>
                <a href="Status/"><div class="panel-body"><img src="Images/airline-2.jpg" class="img-responsive" style="width:100%" alt="Image"></div></a>
                <div class="panel-footer">Show Status of Flight</div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-success" style="text-align: center">
                <div class="panel-heading"><b>Cancel</b></div>
                <a href="Cancel/"><div class="panel-body"><img src="Images/airline-3.jpg" class="img-responsive" style="width:100%; height: 120%" alt="Image"></div></a>
                <div class="panel-footer">Cancel a flight</div>
            </div>
        </div>
    </div>
</div><br>


</div><br><br>

<footer class="container-fluid text-center">
    <p>Airline Reservation System</p>

</footer>

</body>
</html>
