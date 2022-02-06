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
    <title>Mitglieder</title>
    <!--Ende Kopfbereich-->
</head>
<!--Anfang Hauptteil-->

<body>
    <header>
        <!--Navigation-->
        <nav class="topnav" id="myTopnav">
            <a href="../index.php">Home</a>
            <a href="mitglieder.php" class="active">Mitglieder</a>
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
            <a href="anmelden.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <!--Linke Spalte-->
        <section>
            <h2>Matthew Bellamy</h2>
            <a href="../medien/Muse_M_Rock_am_Ring_Credit_rawpic.jpg" download><img src="../medien/Muse_M_Rock_am_Ring_Credit_rawpic.jpg" alt="Matthew Bellamy"></a>
            <p>
                Sänger, Gitarrist und Pianist
                <br />
                Geboren: 9. Juni 1978 in Cambridge, England.
                <br />
                Angefangen mit 6 Klavier zu spielen und mit 11 Gitarre zu spielen.
                <br />
                Mit 10 Jahren zog seine Familie nach Devon, Teignmouth.
            </p>
            <p>
                Fun-Facts:
                <br />
                Er kann sich selber kitzeln.
                <br />
                Er ist nur 173 cm gross.
                <br />
                Er kann das Alphabet rückwärts sagen.
                <br />
                Hat einen Weltrekord mit den meist zerstörten Gitarren in einer Tour.
            </p>
        </section>

        <!--Mitte Spalte-->
        <section>
            <h2>Dominic Howard</h2>
            <a href="../medien/Muse_D_Rock_am_Ring_Credit_rawpic.jpg" download><img src="../medien/Muse_D_Rock_am_Ring_Credit_rawpic.jpg" alt="Dominic Howard"></a>
            <p>
                Schlagzeuger
                <br />
                Geboren: 7. Dezember 1977 in Stockport, England.
                <br />
                Früh angefangen Schlagzeug zu spielen.
                <br />
                Mit 8 Jahren zog seine Familie nach Devon, Teignmouth.
            </p>
            <p>
                Fun-Facts:
                <br />
                Er ist Linkshänder.
                <br />
                Sein Lieblingsauto ist der 1981 DeLorean DMC-12 von "Zurück in die Zukunft".
                <br />
                Er ist ein Fan von Spiderman.
                <br />
                Bei vier Songs, macht er Hintergrund Gesänge obwohl er nicht gerne singt.
            </p>
        </section>

        <!--Rechte Spalte-->
        <section>
            <h2>Christopher Wolstenholme</h2>
            <a href="../medien/Muse_C_Rock_im_Park_Credit_Markus_Felix.jpg" download><img src="../medien/Muse_C_Rock_im_Park_Credit_Markus_Felix.jpg" alt="Christopher Wolstenholme"></a>
            <p>
                Bassist
                <br />
                Geboren: 2. Dezember 1977 in Yorkshire, England
                <br />
                War zuerst Schlagzeuger, hat erst später angefangen Bass zu spielen.
                <br />
                Mit 11 Jahren zog seine Familie nach Devon, Teignmouth.
            </p>

            <p>
                Fun-Facts:
                <br />
                Er ist ein grosser Fussballfan.
                <br />
                Sein Lieblingsspiel ist "The Legend of Zelda: Ocarina of Time".
                <br />
                Bei Auftritten "Headbanged" er sehr viel.
                <br />
                Hat eine Gitarren Kollektion mit über 130 Gitarren.
            </p>
        </section>
    </main>

    <!--Footer-->
    <footer>
        <a href="impressum.php">Impressum/Kontakt</a>
    </footer>

</body>

</html>
