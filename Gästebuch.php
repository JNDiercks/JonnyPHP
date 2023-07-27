<?php
$servername = "localhost";
$username = "root";
$password = "mysqlpassword";
$dbname = "JonathansTennisDb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["name"]) && isset($_POST["guestbook-text"])) {
  $sql = "INSERT INTO Logbook (writer, text)
    VALUES ('" . $_POST["name"] . "', '" . $_POST["guestbook-text"] . "')";

  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<html>

<head>
  <title>Jonny's Tennisblog</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
  <script src="./script.js"></script>
</head>

<body class="body-gästebuch">
  <button class="button-startseite" onclick="Startseite()">Zur Startseite</button>
  <div class="flex-center">
    <h1>Gästebuch</h1>
  </div>

  <div class="flex-center">
    <button class="button button-guestbook" onclick="NeuerGästebucheintrag()">Neuen Gästebucheintrag anlegen</button>
  </div>

  <div class="flex-center">
    <div class="gästebuch-einträge">
      <?php
      $sql = "SELECT writer, text, lastupdate FROM Logbook order by lastupdate desc";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<div class='gästebuch-eintrag'><div class='gästebuch-kopf'>Eintrag von: " . $row["writer"] . " am " . $row["lastupdate"] . "</div><div class='gästebuch-text'>" . $row["text"] . "</div></div>";
        }
      } else {
        echo "0 results";
      }
      ?>
    </div>

  </div>

</body>

</html>

<?php
$conn->close();
?>