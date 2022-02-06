<!--Session starten-->
<?php
session_start();
?>
<!--Definiert das Dokument als HTML-->
<!DOCTYPE html>
<html lang="de">
<!--Anfang Kopfbereich-->

<head>
    <!--Stylesheet hinzufügen-->
    <link href="css/stylesheet.css" rel="stylesheet">
    <!-- Fa-Fa-Bar hinzufügen -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <!--Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Logo im Register-->
    <link rel="icon" href="medien/Logo_Black.png">
    <!--Titel im Register-->
    <title>Home</title>
    <!--Ende Kopfbereich-->
</head>
<!--Anfang Hauptteil-->

<body>
    <header>
        <!--Navigation-->
        <nav class="topnav" id="myTopnav">
            <a href="index.php" class="active">Home</a>
            <a href="PHP/mitglieder.php">Mitglieder</a>
            <a href="PHP/geschichte.php">Geschichte</a>
            <a href="PHP/auftritte.php">Auftritte</a>
            <a href="PHP/tour.php">Tourdaten</a>
            <?php if (isset($_SESSION['benutzernr'])): ?>
            <!--Wenn der Benutzer angemeldet ist logout Seite zeigen-->
            <a href="PHP/PWaendern.php">Passwort Ändern</a>
            <a href="PHP/logout.php">Logout</a>
            <?php elseif (!isset($_SESSION['benutzernr'])): ?>
            <!--Wenn man sich noch nicht angemeldet hat login Seite zeigen-->
            <a href="PHP/registrierung.php">Registrieren</a>
            <a href="PHP/anmelden.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <!--Logo-->
    <img class="logo" src="medien/Logo_White.png" alt="Logo">

    <!--Footer-->
    <footer>
        <a href="PHP/impressum.php">Impressum/Kontakt</a>
    </footer>
</body>

</html>
