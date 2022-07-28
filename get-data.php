<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {


    // print_r('submit');
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $rooms = $_POST['rooms'];
          $person = $_POST['person'];
          $mobilenumber = $_POST['mobilenumber'];
          $checkindate = $_POST['checkindate'];
          $checkoutdate = $_POST['checkoutdate'];



       $sql = " INSERT INTO Guests(firstname, lastname, email, rooms, person, mobilenumber, checkindate,checkoutdate)
       
       VALUES ('$firstname','$lastname','$email','$rooms','$person','$mobilenumber','$checkindate','$checkoutdate')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>alert(New record has been added successfully !)</script>";
        
    } else {
        echo "Error: " . $sql .  mysqli_error($conn);
    }
    mysqli_close($conn);

    // header('Location: http://127.0.0.1:5501/Reservation.html');
    
}

?>
