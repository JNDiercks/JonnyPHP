<html>
<head>
    <title>Jonny's Tennisblog</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <script src="./script.js"></script>
</head>

<body class="body-neuer-eintrag">
<button class="button-startseite" onclick="Startseite()">Zur Startseite</button>
    <div class="flex-center">
        <h1>Neuen Gästebucheintrag anlegen</h1>
    </div>
    <div class="flex-center">
        <div class="gästebuch-form">
            <form action="Gästebuch.php" method="post">
                <p><label for="name">Name:</label></p>
                <input type="text" name="name">
                <p><label for="guestbook-text">Gästebuch:</label></p>
                <textarea id="guestbook-text" name="guestbook-text" rows="4" cols="50"></textarea>
                <br>
                <input type="submit" class="button button-neuer-eintrag">
            </form>
        </div>
    </div>
</body>
</html>