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
    <link href="../css/stylesheet.css" rel="stylesheet">
    <!-- Fa-Fa-Bar hinzufügen -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <!--Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Logo im Register-->
    <link rel="icon" href="../medien/Logo_Black.png">
    <!--Titel im Register-->
    <title>Auftritte</title>
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
            <a href="auftritte.php" class="active">Auftritte</a>
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
        <!--Videoreihe Eins-->
        <section class="ungeradeReihe">
            <h1>Die besten Auftritte</h1>
            <h2>1994 Battle of the Bands: Ihr allererster Auftritt als Band</h2>
            <div class="resp-container">
                <iframe src="https://www.youtube.com/embed/seSIGZLjXxM" allow="encrypted-media" allowfullscreen>
                </iframe>
            </div>
            <p>Song: "Cut Me Down", der einzige Auftritt von dem Song.</p>
        </section>

        <!--Videoreihe Zwei-->
        <section class="geradeReihe">
            <h2>2000 Bizarre Festival: Eine von den verücktesten Auftritten</h2>
            <div class="resp-container">
                <iframe src="https://www.youtube.com/embed/GeJUl0oHaQU" allow="encrypted-media" allowfullscreen>
                </iframe>
            </div>
            <p>Song: "Fillip", vom Album "Showbiz".</p>
        </section>

        <!--Videoreihe Drei-->
        <section class="ungeradeReihe">
            <h2>2004 Glastonbury Festival: Das beste Ende von einem Konzert</h2>
            <div class="resp-container">
                <iframe src="https://www.youtube.com/embed/A1Ajxkws0Og" allow="encrypted-media" allowfullscreen>
                </iframe>
            </div>
            <p>Song: "Stockholm Syndrome" mit "Execution Commentary" und "Agitated" Riffs, vom Album "Absolution".</p>
        </section>

        <!--Videoreihe Vier-->
        <section class="geradeReihe">
            <h2>2010 Glastonbury Festival: Cover Song von U2 mit dem Gitarristen</h2>
            <div class="resp-container">
                <iframe src="https://www.youtube.com/embed/IbF9MPyRTHI" allow="encrypted-media" allowfullscreen>
                </iframe>
            </div>
            <p>Song: "Where The Streets Have No Name", von U2.</p>
        </section>

        <!--Videoreihe Fünf-->
        <section class="ungeradeReihe">
            <h2>2015 Mayan: Ein Auftritt von einem Song, dass sie selten spielen</h2>
            <div class="resp-container">
                <iframe src="https://www.youtube.com/embed/AaIY_8k284I" allow="encrypted-media" allowfullscreen>
                </iframe>
            </div>
            <p>Song: "Assassin" mit dem "Grand Omega Bosses edit", vom Album "Black Holes And Relevations".</p>
        </section>

        <!--Videoreihe Sechs-->
        <section class="geradeReihe">
            <h2>2017 Shepherds Bush Empire: Ein by Request Konzert mit vielen B-Sides</h2>
            <div class="resp-container">
                <iframe src="https://www.youtube.com/embed/UPzFJtiNSDE" allow="encrypted-media" allowfullscreen>
                </iframe>
            </div>
            <p>Song: "Showbiz" vom Album "Showbiz", haben sie seit 11 Jahren nicht mehr gespielt.</p>
        </section>

        <!--Videoreihe Sieben-->
        <section class="ungeradeReihe">
            <h2>2017 Reading Festival: Bester Live Song</h2>
            <div class="resp-container">
                <iframe src="https://www.youtube.com/embed/CW-TMcvqjac" allow="encrypted-media" allowfullscreen>
                </iframe>
            </div>
            <p>Song: "Plug In Baby", vom Album "Origins of Symmetry".</p>
        </section>
    </main>
    <!--Footer-->
    <footer>
        <a href="impressum.php">Impressum/Kontakt</a>
    </footer>
    
</body>

</html>
