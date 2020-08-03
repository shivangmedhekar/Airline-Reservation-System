<?php
/**
 * Created by PhpStorm.
 * User: shiva
 * Date: 11/4/2018
 * Time: 11:38 PM
 */

include ("../Database/dbconfig.php");

$fid = $_GET['fid'];
$name_of_flight = $_GET['name-of-flight'];
$time_of_departure = $_GET['time-of-departure'];
$time_of_arrival = $_GET['time-of-arrival'];
$date_of_flight = $_GET['date-of-flight'];
$status = $_GET['status'];
$services = $_GET['services'];
$sources = $_GET['sources'];
$destination = $_GET['destination'];
$class = $_GET['class'];
$duration = $_GET['duration'];
$total_seat = $_GET['total_seat'];

$sql = "insert into flight values ($fid,'$name_of_flight',cast('$time_of_departure' as time), cast('$time_of_arrival' as time), cast('$date_of_flight' as date), '$status', '$services', $total_seat,'$class', cast('$duration' as time), $total_seat, '$sources', '$destination')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

for ($i = 1; $i <= $total_seat; $i++){
    $seat_id = ($fid * 10) + $i;
    if ($class == 'economy')
        $fare = 1000;
    else
        $fare = 5000;
    $sql = "insert into seat values($seat_id, 'A', '$class',$fare, $fid)";
    mysqli_query($conn,$sql);
}
?>