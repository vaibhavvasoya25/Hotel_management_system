<?php
include_once("connection.php");
ini_set('display_errors', 1);

?>


<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// print_r($conn);
if (isset($_POST['submit'])) {


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $rooms = $_POST['rooms'];
    $person = $_POST['person'];
    $mobilenumber = $_POST['mobilenumber'];
    $checkindate = $_POST['checkindate'];
    $checkoutdate = $_POST['checkoutdate'];

    // echo $checkindate;
    // $checkindate = strtotime($checkindate);
    // echo $checkoutdate;
    // $checkoutdate = strtotime($checkoutdate);
   

    //   var_dump($checkindate);



    $sql = "INSERT INTO `Guests`(`firstname`, `lastname`, `email`, `rooms`, `person`, `mobilenumber`, `checkindate`,`checkoutdate`) VALUES ('$firstname','$lastname','$email','$rooms','$person','$mobilenumber', '$checkindate', '$checkoutdate')";


    if (mysqli_query($conn, $sql)) {
        header("Location: http://localhost/welcome_management/Reservation.html");
    } else {
        echo "Error: " . $sql .  mysqli_error($conn);
    }
    mysqli_close($conn);

}



?>
