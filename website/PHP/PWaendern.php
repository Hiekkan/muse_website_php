<!--Session starten-->
<?php
session_start();
if (!isset($_SESSION['benutzernr'])||!isset($_SESSION['benutzername']))
    {
        header("Location: ../index.php");
        exit();
    }
?>
<!--Definiert das Dokument als HTML-->
<!DOCTYPE html>
<html lang="de">
<!--Anfang Kopfbereich-->

<head>
    <!--Stylesheet hinzufügen-->
    <link href="../css/stylesheet.css" rel="stylesheet">
    <!-- Fa-Fa-Bar hinzufügen -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <!--Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Logo im Register-->
    <link rel="icon" href="../medien/Logo_Black.png">
    <!--Titel im Register-->
    <title>Anmelden</title>
    <!--Ende Kopfbereich-->
</head>
<!--Anfang Hauptteil-->

<body>

    <!--Navigationsbar-->
    <header>
        <nav class="topnav" id="myTopnav">
            <a href="../index.php">Home</a>
            <a href="mitglieder.php">Mitglieder</a>
            <a href="geschichte.php">Geschichte</a>
            <a href="auftritte.php">Auftritte</a>
            <a href="tour.php">Tourdaten</a>
            <?php if (isset($_SESSION['benutzernr'])): ?>
            <!--Wenn der Benutzer angemeldet ist logout Seite zeigen-->
            <a href="PWaendern.php">Passwort Ändern</a>
            <a href="logout.php">Logout</a>
            <?php elseif (!isset($_SESSION['benutzernr'])): ?>
            <!--Wenn man sich noch nicht angemeldet hat login Seite zeigen-->
            <a href="registrierung.php">Registrieren</a>
            <a href="anmelden.php" class="active">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <!--Passwort ändern Formular-->
    <div class="form">

        <form action="../include/PWaendern.inc.php" method="post">
            <h2>Passwort Ändern</h2>
            <label for="pw-alt"><b>Altes Passwort</b></label>
            <input type="password" placeholder="Altes Passwort..." name="pw-alt">
            <label for="pw-neu"><b>Neues Passwort</b></label>
            <input type="password" placeholder="Neues Passwort..." name="pw-neu">
            <label for="pw-rep"><b>Passwort Wiederholen</b></label>
            <input type="password" placeholder="Altes Passwort..." name="pw-rep">
            <button name="aendern-submit" type="submit">Passwort Ändern</button>
        </form>
    </div>

    <!--Footer-->
    <footer>
        <a href="impressum.php">Impressum/Kontakt</a>
    </footer>

</body>

</html>
