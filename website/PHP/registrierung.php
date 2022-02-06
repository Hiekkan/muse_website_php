<?php
session_start();
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
    <title>Registrieren</title>
    <!--Ende Kopfbereich-->
</head>
<!--Anfang Hauptteil-->

<body>
    <header>
        <!--Navigation-->
        <nav class="topnav" id="myTopnav">
            <a href="../index.php">Home</a>
            <a href="mitglieder.php">Mitglieder</a>
            <a href="geschichte.php">Geschichte</a>
            <a href="auftritte.php">Auftritte</a>
            <a href="tour.php">Tourdaten</a>
            <?php if (isset($_SESSION['benutzernr'])): ?>
            <!--Wenn der Benutzer angemeldet ist logout Seite zeigen-->
            <a href="logout.php">Logout</a>
            <?php elseif (!isset($_SESSION['benutzernr'])): ?>
            <!--Wenn man sich noch nicht angemeldet hat login Seite zeigen-->
            <a href="registrierung.php" class="active">Registrieren</a>
            <a href="anmelden.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <!--Registration-->
        <div class="form">
            <form action="../include/anmelden.inc.php" method="post">
                <h2>Registrierung</h2>
                <label for="bid"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="bid" required>
                <label for="mail"><b>E-Mail</b></label>
                <input type="email" placeholder="Enter E-Mail" name="mail" required>
                <label for="pw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pw" required>
                <label for="pw"><b>Password wiederholen</b></label>
                <input type="password" placeholder="Enter Password" name="pw-rep" required>
                <br>
                <button name="anmelden-btn" type="submit">Registrieren</button>
            </form>
        </div>
    </main>
    <!--Footer-->
    <footer>
        <a href="impressum.php">Impressum/Kontakt</a>
    </footer>

</body>

</html>
