<?php
$servername = "localhost";
$username = "root";
$password = "mysqlpassword";
$dbname = "JonathansTennisDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Logbook (writer, text)
VALUES ('" . $_POST["name"] . "', '" . $_POST["guestbook-text"] . "')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Dein Text ist: <?php echo $_POST["guestbook-text"]; ?>

</body>
</html>