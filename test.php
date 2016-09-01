<!DOCTYPE html>
<html>
<head>
<Title>Canely</Title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Canely_Dev";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>

</body>
</html>