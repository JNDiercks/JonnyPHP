<!-- <?php
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
?> -->

<html>

<head>
    <title>Jonny's Tennisblog</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <script src="./script.js"></script>
</head>
<body class="body-lieblingsspieler">
<button class="button-startseite" onclick="Startseite()">Zur Startseite</button>
    <div class="flex-center"><h1>Lieblingsspieler</h1></div>
    <div class="lieblingsspieler-container">
        <div class="card">
            <img class="card-img"
                src="https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/watermark:Paul+Zimmer/width:1200/height:800/crop:0.999:0.99/dpr:1/el:1/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Ftennisinfinitycom%2Fimages%2F2023-02%2Frublev-andrey-qataropen2023-paulzimmer-63f84e9930890.jpg"
                alt="Avatar" style="width:100%">
            <div class="card-container">
                <h4><b>Andrey Rublev</b></h4>
                <ul>
                    <li>Titel: 14</li>
                    <li>Weltranglistenplatz 7</li>
                    <li>Höchster Weltranglistenplatz 5</li>
                    <li>Preisgeld 18.2 Mio. US-Dollar</li>
                </ul>
                <a href="https://de.wikipedia.org/wiki/Andrei_Andrejewitsch_Rubljow"> Andrey's Wikipedia</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img" src="https://images-ext-2.discordapp.net/external/ZthfO-_Z03RVtY85pPCPJwYTAO1xIo-g2rHtJDAUaco/%3Fwidth%3D1440/https/photoresources.wtatennis.com/photo-resources/2021/07/03/b81b3a09-f5f9-4b3e-ba47-60619cb2de5f/Emma_Raducanu_-_2021_Wimbledon_Championships_Day_6_-DSC_6581_original.jpg?width=1970&height=1228"
                alt="Avatar" style="width:100%">
            <div class="card-container">
                <h4><b>Emma Raducanu</b></h4>
                <ul>
                    <li>US Open 2021 Champion</li>
                    <li>Weltranglistenplatz 128</li>
                    <li>Höchster Weltranglistenplatz 10</li>
                    <li>Preisgeld 3.7 Mio. US-Dollar</li>
                </ul>
                <a href="https://de.wikipedia.org/wiki/Emma_Raducanu"> Emma's Wikipedia</a>
            </div>
        </div>
    </div>
    <div class="flex-center">
        <div>
            <iframe width="800" height="356,7724" src="https://www.youtube.com/embed/i56u5Prp-dY" title="Emma Raducanu: The Fairytale of New York" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</body>
</html>