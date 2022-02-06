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
    <title>Logout</title>
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
            <a href="logout.php" class="active">Logout</a>
            <?php elseif (!isset($_SESSION['benutzernr'])): ?>
            <!--Wenn man sich noch nicht angemeldet hat login Seite zeigen-->
            <a href="registrierung.php">Registrieren</a>
            <a href="anmelden.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <!--Logout Formular-->
    <div class="form">
        <form action="../include/logout.inc.php" method="post">
            <h2>Logout für Fan-Club Members</h2>
            <p>Hallo
                <?php echo $_SESSION['benutzername'] ?>
            </p>
            <p>Bis Bald!</p>
            <button name="logout" type="submit">Log Out</button>
        </form>
    </div>

    <!--Footer-->
    <footer>
        <a href="impressum.php">Impressum/Kontakt</a>
    </footer>

</body>

</html>
