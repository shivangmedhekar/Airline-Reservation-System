<html>

<head>
    <title>Cancel</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default" style="background-color: darkslateblue">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php" style="color: white">Airline Reservation System</a>
            <h1 style='background-color: darkslateblue;color:white'>Cancellation</h1>
        </div>


    </div>
</nav>
<form action="confirm.php" method="POST" style="text-align: center">


    <input type="number" name="pnr" class="form-control" placeholder="Enter PNR No" style="width: 30%;margin-left: 35%; margin-top: 10%">

    <input type="submit" name="check" value="Check" class="btn btn-danger" style="margin-top: 5%; width: 10%">

</form>



<a href="../index.php"><button class="btn btn-primary" style="width: 10%; margin-left: 45%">Go Back</button></a>

</body>

</html>