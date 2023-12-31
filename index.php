<?php
$servername = "localhost";
$username = "root";
$password = "mysqlpassword";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dbname = "JonathansTennisDb";
$sql = "CREATE DATABASE if not exists JonathansTennisDb";
if ($conn->query($sql) === TRUE) {
} else {
    error_log("Error creating database: " . $conn->error);
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE if not exists Logbook (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    writer VARCHAR(30) NOT NULL,
    text VARCHAR(50),
    lastupdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jonny's Tennisblog</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <script src="./script.js"></script>
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
                        Lieblingsspieler, Spielberichte, Trainingstagebücher und mehr...
                    </div>
                </content>
            </div>
        </div>
        <div class="section-league-game-reports section">
            <div class="flex-center viewheight-full">
                <button class="button button-lieblingsspieler" onclick="Lieblingsspielerseite()">Meine
                    Lieblingsspieler</button>
            </div>
        </div>
        <div class="section-spielhistorie section">
            <div class="flex-center viewheight-full">
                <button class="button button-spielhistorie" onclick="Spielhistorie()">Meine Spielhistorie</button>
            </div>
        </div>
        <div class="section-guestbook section">
            <div class="flex-center viewheight-full">
                <button class="button button-guestbook" onclick="Gästebuchseite()">Zum Gästebuch</button>
            </div>
        </div>
    </div>
</body>
</html>