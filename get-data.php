<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "DB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}

if (isset($_POST['Submit'])) {

          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $Email     = $_POST['E-mail'];
          $MobileNumber     = $_POST['Mobile Number'];
          $Howmanyrooms = $_POST['How many rooms'];
          $Howmanyperson = $_POST['How many person'];
          $CheckInDate = $_POST['CheckInDate '];
          $CheckOutDate  = $_POST['CheckOutDate '];


        

       $sql = " INSERT INTO `Guests`(`firstname`, `lastname`, `email`, `rooms`, `person`, `mobilenumber`, `checkindate`, `checkoutdate`) 
       
       VALUES ('$firstname','$lastname','$Email','$rooms','$person','$mobilenumber','$checkindate','$checkoutdate')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert(New record has been added successfully !)</script>";
        
    } else {
        echo "Error: " . $sql .  mysqli_error($conn);
    }
    mysqli_close($conn);
    header('Location: get-data.php');
    
}
// if (isset($_SESSION['Username'])){

//   echo " Your username is : " .  $_SESSION['Username'];
//   echo  "<br> Your password is : " .$_SESSION['Password'];

// } else{

//        echo "Plese Login to continue !";

// }
