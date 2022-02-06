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
    <title>Impressum/Kontakt</title>
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
            <a href="PWaendern.php">Passwort Ändern</a>
            <a href="logout.php">Logout</a>
            <?php elseif (!isset($_SESSION['benutzernr'])): ?>
            <!--Wenn man sich noch nicht angemeldet hat login Seite zeigen-->
            <a href="anmelden.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <!--Impressum-->
        <section class="hintergrund">
            <h1>Impressum/Kontakt</h1>
            <p></p>
            <h1>Quellenangaben</h1>
            <h2>Bilder Quellen</h2>
            <p>Muse Logo: Wikimedia Commons
                <br />
                Hintergrundbild: Credit an Raph_PH von Wikimedia Commons
                <br />
                Muse Fanpage Logo: Selbsterstellt
                <br />
                Matthew Bellamy und Dominic Howard Bild: Credit an rawpic von Wikimedia Commons
                <br />
                Christopher Wolstenholme Bild: Credit an Markus Felix von Wikimedia Commons
                <br />
                Album Bilder: Credit an Musewiki
                <br />
                Battle of the Bands Video: Credit an Miky Dunn
                <br />
                2000 Bizarre Video: Credit an smalloranger
                <br />
                2004 Glastonbury Video: Credit an stairway 23
                <br />
                2010 Glastonbury Video: Credit an MuseLiveVideos
                <br />
                2015 Mayan Video: Credit an kills yourpast
                <br />
                2017 Shepherds Bush Empire Video: Credit an Muse France
                <br />
                2017 Reading Video: Credit an asdasdasd asdasdad
            </p>
            <h2>Text Quellen</h2>
            <p>Der ganze Text: Credit an MuseWiki</p>
            
            <!--Formular-->
            <div class="form">
                
                <h2>Hier ist ein Formular für Verbesserungsvorschläge, Kritik usw.</h2>

                <form method="post" action="../include/Formular.inc.php">
                    <label for="Nachname"><b>Nachname*:</b></label>
                    <input type="text" name="Nachname">

                    <label for="Vorname"><b>Vorname*:</b></label>
                    <input type="text" name="Vorname">

                    <label for="email"><b>E-Mail*:</b></label>
                    <input type="email" name="email">

                    <label for="Nachricht"><b>Nachricht*:</b></label>
                    <textarea name="comment" rows="8" cols="30"></textarea><br>

                    <button name="Nachricht-submit" type="submit">Senden</button>
                </form>
            </div>
        </section>
    </main>

    <!--Footer-->
    <footer>
        <a href="impressum.php">Impressum/Kontakt</a>
    </footer>

</body>

</html>
