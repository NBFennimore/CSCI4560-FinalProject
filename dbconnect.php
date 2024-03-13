<?php 
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


$servername = "localhost";
$username = "root";
$password = "password";

// Connect to MySQL Database Server Using mysqli
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
debug_to_console("Connected to database");



/*
    $name = $_POST['fname'] + " " + $_POST['lname'];
    $major = $_POST['major'];
    $classLevel = $_POST['classlevel'];
    $email = $_POST['email'];
    $gender = $_POST['gener'];
    $age = $_POST['age'];
    $phonenum = $_POST['phonenum'];

    echo "Connected successfully";

    $conn->close(); //disconnect from the MySQL database 
*/
?>