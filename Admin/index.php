<?php
/**
 * Created by PhpStorm.
 * User: shiva
 * Date: 11/4/2018
 * Time: 2:21 PM
 */

include ("../Database/dbconfig.php");

if (isset($_POST['login']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from admin";
    $result = mysqli_query($conn, $sql);
    if ($result){
        while ($row = mysqli_fetch_assoc($result)){

            $r = 0;
            if ($username == $row['username'] && $password == $row['password']){
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $r = 1;
                header("Location: admin.php");
            }
        }
        if ($r == 0){
            echo "<script>errorMessage();</script>";
        }
    }

}




?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Admin Login</title>

    <link rel="stylesheet" href="CSS/admin-login.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body class="text-center">
<form class="form-signin" action="index.php" method="post">

    <!--<img  class="col-md-6" src="Images/logo.png" alt="" width="2000" height="2000">-->

    <h1 class="h3 mb-3 font-weight-normal">Admin Login</h1>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>


    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    <p class="text-danger" id="wrongIDPassword" style="display: none">Wrong Username or Password</p>

    <script type="text/javascript">

        function errorMessage() {
            document.getElementById("wrongIDPassword").style.display = "block";
        }

    </script>

</form>
</body>
</html>

