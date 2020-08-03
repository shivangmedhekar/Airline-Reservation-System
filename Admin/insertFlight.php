<?php
/**
 * Created by PhpStorm.
 * User: shiva
 * Date: 11/4/2018
 * Time: 4:45 PM
 */




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


    <style>
        .form-group{
            width: 40%;
            margin-left: 30%;
        }

        .form-control{
            margin-bottom: 4%;
        }

        .btn{
            margin-left: 45%;
        }
    </style>
    <title>Insert Flight</title>
</head>
<body>


<div class="form-group">
    <form method="get" action="flight-addition.php">

        <input type="text" name="fid" placeholder="FID" class="form-control">

        <select class="form-control" name="name-of-flight">
            <option disabled selected>Name of Flight</option>
            <option>Jet Airways</option>
            <option>IndiGo</option>
            <option>Air India</option>
            <option>Spice Jet</option>
            <option>GoAir</option>
            <option>Air Asia</option>
            <option>Vistara</option>
        </select>
        <label class="form-control">Time Of Departure</label>

        <input type="time" name="time-of-departure" class="form-control">

        <label class="form-control">Time Of Arrival</label>
        <input type="time" name="time-of-arrival" class="form-control">

        <label class="form-control">Date Of Flight</label>
        <input type="date" name="date-of-flight" placeholder="FID">

        <select class="form-control" name="class">
            <option disabled selected>Class</option>
            <option>Economy</option>
            <option>Business</option>
        </select>

        <select class="form-control" name="status">
            <option disabled selected>Status</option>
            <option>On Time</option>
            <option>Delayed</option>
            <option>Cancelled</option>
        </select>

        <select class="form-control" name="services">
            <option disabled selected>Services</option>
            <option>On Time</option>
            <option>Delayed</option>
            <option>Cancelled</option>
        </select>


        <select class="form-control" name="sources">
            <option disabled selected>Source</option>
            <option>Mumbai</option>
            <option>Delhi</option>
            <option>Kolkata</option>
        </select>

        <select class="form-control" name="destination">
            <option disabled selected>Destination</option>
            <option>Mumbai</option>
            <option>Delhi</option>
            <option>Kolkata</option>
        </select>

        <label class="form-control" >Duration</label>
        <input type="time" class="form-control" name="duration">

        <input type="submit" class="btn btn-success" value="Add" name="add">

        <input type="number" name="total_seat" placeholder="$total seat">


    </form>
</div>


</body>
</html>
