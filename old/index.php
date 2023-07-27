<?php
$servername = "localhost";
$username = "root";
$password = "mysqlpassword";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE if not exists JonathansTennisDb";
if ($conn->query($sql) === TRUE) {
} else {
    error_log("Error creating database: " . $conn->error);
}

$dbname = "JonathansTennisDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE if not exists Logbook (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    writer VARCHAR(30) NOT NULL,
    text VARCHAR(50),
    lastupdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sqlLogbook = "SELECT id, write, text FROM Logbook";
$result = $conn->query($sql);

// $conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Jonny's Tennisblog</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
</head>

<body>
    <div class="container">
        <div class="section-welcome section">
            <div class="flex-center viewheight-full">
                <content>
                    <div class="title-content flex-center">
                        <div class="welcome-title">
                            <span class="material-symbols-outlined icon-hover">
                                sports_tennis
                            </span>
                            Jonny's Tennisblog
                            <span class="material-symbols-outlined icon-hover">
                                sports_tennis
                            </span>
                        </div>
                    </div>
                    <div class="sub-title-content">
                        Spielberichte, Trainingstagebücher, sexy Fußbilder und vieles mehr...
                    </div>
                </content>
            </div>
        </div>
        <div class="section-league-game-reports section">
        </div>
        <div class="section-training-reports section"></div>
        <div class="section-tba1 section"></div>
        <div class="section-tba2 section"></div>
        <div class="section">
            <div class="flex-center viewheight-full">
                <div>
                    <form action="guestbook.php" method="post">
                        <p><label for="name">Name:</label></p>
                        <input type="text" name="name">
                        <p><label for="guestbook-text">Gästebuch:</label></p>
                        <textarea id="guestbook-text" name="guestbook-text" rows="4" cols="50"></textarea>
                        <br>
                        <input type="submit">
                    </form>
                    <?php

                    $sql = "SELECT writer, text FROM Logbook";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<div>Hallo von: " . $row["writer"] . " - Text: " . $row["text"] . "</div>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>