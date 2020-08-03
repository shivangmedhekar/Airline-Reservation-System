<?php


include ("../Database/dbconfig.php");

if (isset($_POST['check']))
    $pnr_no = $_POST['pnr'];

$sql = "select * from booking";
$result = mysqli_query($conn, $sql);

$found_pnr = 0;

if($result){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){

            if ($pnr_no == $row['pnr_no']){
                $found_pnr = 1;
                break;
            }

        }

        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


if ($found_pnr == 1){
    echo "Found Your Booking Details";
}

?>




<html>


<head>
    <title>Cancel Confirm</title>

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
        </div>

    </div>
</nav>

<form action="cancel_summary.php" method="POST" style="text-align: center">


    <input type="number" value="<?php echo $pnr_no ?>" name="pnr_no" style="display: none">

    <?php
    $sql = "select * from booking where pnr_no = ".$pnr_no;
    mysqli_query($conn, $sql);
    ?>

    <h2>Hello <?php echo $row['p_name']?></h2>
    <h3>Seat ID: <?php echo $row['s_id']?></h3>
    <h3>Flight ID: <?php echo $row['f_id']?></h3>
    <h3>Booking Date: <?php echo $row['booking_date']?></h3>
    <h3>PNR No: <?php echo $row['pnr_no']?></h3>

    <input type="submit" value="Cancel" name="cancel" class="btn btn-danger">
    <br>

</form>

<a href="../index.php"><button class="btn btn-primary" style="margin-top: 5%">Go Back</button></a>

</body>
</html>