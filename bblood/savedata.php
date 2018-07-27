 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

$name = $_POST["name"];
$bloodtype = $_POST["bloodtype"];
$phonenumber = $_POST["phonenumber"];
$gender = $_POST["gender"];
$city = $_POST["city"];
$joindate = date("Y/m/d");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bloodbank (name, bloodtype, phonenumber, gender, city ,joindate)
VALUES ('$name', '$bloodtype', '$phonenumber' ,'$gender','$city','$joindate')";

if ($conn->query($sql) === TRUE) {
    echo "true";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 