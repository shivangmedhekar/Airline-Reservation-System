
<?php
include ("../Database/dbconfig.php");

$sql = "select * from flight";
$result = mysqli_query($conn, $sql);

echo "<h1>Flights Available</h1>";
if($result){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-hover'>";
        echo "<tr>";
        echo "<th>FID</th>";
        echo "<th>Name</th>";
        echo "<th>Time of Departure</th>";
        echo "<th>Time of Arrival</th>";
        echo "<th>Date Of Flight</th>";
        echo "<th>Status</th>";
        echo "<th>Services</th>";
        echo "<th>Total Seat</th>";
        echo "<th>Class</th>";
        echo "<th>Duration</th>";
        echo "<th>No of Seats Available</th>";
        echo "<th>Change</th>";

        echo "</tr>";
        echo "<form action='customer.php' method='GET'>";
        while($row = mysqli_fetch_array($result)){
            echo '<tr>';

            echo "<td><a href='show_seats.php'>".$row['f_id']."</a></td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['time_of_departure']."</td>";
            echo "<td>".$row['time_of_arrival']."</td>";
            echo "<td>".$row['date_of_flight']."</td>";
            echo "<td>".$row['status']."</td>";
            echo "<td>".$row['services']."</td>";
            echo "<td>".$row['total_seat']."</td>";
            echo "<td>".$row['class']."</td>";
            echo "<td>".$row['duration']."</td>";
            echo "<td>".$row['no_of_seats_available']."</td>";

            echo "<td><button class='btn'>Change Status</button></td>";

        }

        echo "</table>";
        echo '</br><input type="submit" name="submit" value="next" class="btn btn-success">';
        echo "</form>";

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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
            margin-top: 30%;
            margin-left: 40%;
            width: 100%;

        }

        .table{
            margin-top: 2%;
            text-align: ;
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




</body>
</html>


?>