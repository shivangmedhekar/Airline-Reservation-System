<?php
include ("../Database/dbconfig.php");
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
            color: #223266;
        }

        .form-control{
            width: 40%;
            text-align: center; color: #223266;

        }

        .form-group{
            margin-top: 5%;
            margin-left: 38%; color: #223266;
        }

        .btn{
            margin-top: 3%; color: #223266;
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



<br>



<div class="form-group">

    <form action="flights.php" method="GET">

        <label>Source</label>
        <select name="source" class="form-control">

            <?php
            $i = 0;
            $sql = "select * from flight";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){

                echo '<option value="'.$row['source'].'">'.$row['source'].'</option>';
            }
            ?>

        </select>
        <br>

        <label>Destination</label>
        <select name="destination" class="form-control">
            <?php
            $sql = "select * from flight";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){

                echo '<option value="'.$row['destination'].'">'.$row['destination'].'</option>';
            }
            ?>

        </select>
        <br>
        <label>Date of depature</label>
        <select name="date_of_flight" class="form-control">
            <?php
            $sql = "select * from flight";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){

                echo '<option value="'.$row['date_of_flight'].'">'.$row['date_of_flight'].'</option>';
            }
            ?>

        </select>


        <input type="submit" value="Next" class="form-control btn btn-success">

    </form>

</div>


<!-- Footer -->
<footer style="margin-top: 9%">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Airline Reservation System 2018</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!--<a href="flights.php"><button>Next</button></a>-->
</body>
</html>