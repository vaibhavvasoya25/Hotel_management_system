<?php
include_once("connection.php");
ini_set('display_errors', 1);

?>

<?php
echo "Hello";
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}

if (isset($_POST['submit'])) {
    // var_dump("hiii");die;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $rooms = $_POST['rooms'];
    $person = $_POST['person'];
    $mobilenumber = $_POST['mobilenumber'];
    $checkindate = $_POST['checkindate'];
    $checkoutdate = $_POST['checkoutdate'];

        $sql = "INSERT INTO `Guests`(`firstname`, `lastname`, `email`, `rooms`, `person`, `mobilenumber`, `checkindate`,`checkoutdate`)
        
         VALUES ('$firstname','$lastname','$email','$rooms','$person','$mobilenumber', '$checkindate', '$checkoutdate')";


    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header("Location: http://localhost/welcome_management/index.html");
        exit();
        
    } else {
        echo "Error: " . $sql .  mysqli_error($conn);
    }
    mysqli_close($conn);
    // header('Location: abcd.com');
    
}


?>