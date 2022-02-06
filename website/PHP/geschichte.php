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
    <title>Geschichte</title>
    <!--Ende Kopfbereich-->
</head>
<!--Anfang Hauptteil-->

<body>

    <header>
        <!--Navigation-->
        <nav class="topnav" id="myTopnav">
            <a href="../index.php">Home</a>
            <a href="mitglieder.php">Mitglieder</a>
            <a href="geschichte.php" class="active">Geschichte</a>
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
        <!--Reihe Eins-->
        <section class="ungeradeReihe">
            <h1>Die Geschichte</h1>
            <h2>1994-1999</h2>
            <a href="../medien/600px-Muse_-_Showbiz.jpg" download><img src="../medien/600px-Muse_-_Showbiz.jpg" alt="Showbiz Album"></a>
            <p>
                Als Teenager waren sie sehr interessiert in Musik und starteten die Band als "Rocket Baby Dolls".
                <br />
                Sie hatten nicht sehr Erfolg mit den Konzerten in Clubs. Später wählten sie den Namen "Muse",
                <br />
                weil der kurz war und der Name gut auf einem Poster aussieht. Weihnachten 1998 bekamen sie endlich
                <br />
                einen Plattenvertrag. In Oktober 1999 wurde das erste Album namens "Showbiz" veröffentlicht.
                <br />
                Es wurde ungefähr 700'000-mal verkauft. Viele meinten es wäre eine "Kopie" von der Band "Radiohead".
            </p>
        </section>

        <!--Reihe Zwei-->
        <section class="geradeReihe">
            <h2>2000-2002</h2>
            <a href="../medien/600px-Origin_Of_Symmetry.jpg" download><img src="../medien/600px-Origin_Of_Symmetry.jpg" alt="Origin of Symmetry Album"></a>
            <p>
                Mit dem Erfolg von Showbiz dürften sie auf verschiedenen Festivals in Europa spielen. In Juni 2001
                <br />
                wurde das zweite Album namens "Origin of Symmetry" veröffentlicht. Wegen dem vielen falsetto Gesänge
                <br />
                wurde das Album in Amerika erst später veröffentlicht. Mit der Veröffentlichung vom Album gewannen sie
                <br />
                verschiedene Preise. Das Album ist immer noch eine von den besten Alben die sie gemacht haben. In Juli
                <br />
                2002 wurde ein Live Album von Paris mit verschiedenen B-Sides veröffentlicht.
            </p>
        </section>

        <!--Reihe Drei-->
        <section class="ungeradeReihe">
            <h2>2003-2005</h2>
            <a href="../medien/600px-Absolution.jpg" download><img src="../medien/600px-Absolution.jpg" alt="Absolution Album"></a>
            <p>
                In September 2003 wurde das dritte Album namens "Absolution" veröffentlicht. Das Album wurde auch sehr viel
                <br />
                gelobt. Sie machten zum ersten Mal eine Internationale Tour. Sie dürften das Glastonbury 2004 Headlinen, es
                <br />
                war eine von den besten Auftritten den sie je gemacht haben. Dominics Vater hat das Konzert miterlebt aber ist
                <br />
                am Ende durch einen Herzinfarkt gestorben. Nachdem ganzen Touren starteten sie die Produktion vom nächsten Album.
            </p>
        </section>

        <!--Reihe Vier-->
        <section class="geradeReihe">
            <h2>2006-2008</h2>
            <a href="../medien/600px-Black_Holes_And_Revelations.jpg" download><img src="../medien/600px-Black_Holes_And_Revelations.jpg" alt="Black Holes and Relevations Album"></a>
            <p>
                In Juli 2006 wurde das vierte Album namens "Black Holes and Relevations" veröffentlicht. Es ist anders aufgebaut als
                <br />
                die älteren Alben mit mehr elektronischen Elementen. In 2007 waren sie eine von den ersten Bands die beim
                <br />
                neugebauten "Wembley Stadium" spielen dürften. Das Konzert war unter einer Stunde sofort ausverkauft.
            </p>
        </section>

        <!--Reihe Fünf-->
        <section class="ungeradeReihe">
            <h2>2009-2011</h2>
            <a href="../medien/599px-The_Resistance.jpg" download><img src="../medien/599px-The_Resistance.jpg" alt="The Resistance Album"></a>
            <p>
                Das fünfte Album namens "The Resistance" wurde in September 2009 veröffentlicht. Sie haben das Album selber
                <br />
                produziert. Es wurde viel mit klassischen Elementen experimentiert. Das Album ist sehr inspiriert vom George Orwell
                <br />
                Buch "1984". Der Song "Uprising" wurde zum grössten Hit von ihnen.
            </p>
        </section>

        <!--Reihe Sechs-->
        <section class="geradeReihe">
            <h2>2012-2014</h2>
            <a href="../medien/600px-The_2nd_Law.jpg" download><img src="../medien/600px-The_2nd_Law.jpg" alt="The 2nd Law Album"></a>
            <p>
                In Oktober 2012 wurde das Album namens "The 2nd Law" veröffentlicht. Das Album ist sehr anders aufgebaut als die
                <br />
                restlichen Alben auch mit sehr vielen elektronischen Elementen. Das Konzert in Rom wurde gefilmt und man konnte den Film
                <br />
                für eine Nacht im Kino sehen. Den Song "Survival" wurde bei den Olympische Spielen in London benutzt.
            </p>
        </section>

        <!--Reihe Sieben-->
        <section class="ungeradeReihe">
            <h2>2015-2017</h2>
            <a href="../medien/600px-DronesArt.jpg" download><img src="../medien/600px-DronesArt.jpg" alt="Drones Album"></a>
            <p>
                Das siebte Album namens "Drones" wurde am Juni 2015 veröffentlicht. Das Album ist ein normales Rockalbum mit ein paar
                <br />
                "Hard Rock" Elementen. Sie machten eine riesige Tour durch fast die ganze Welt. Auch hier wurde bei Konzerten ein paar
                <br />
                Mal gefilmt. Aber der Film konnte man erst im Juli 2018 im Kino anschauen. 2017 kam die erste Single für das achte Album.
            </p>
        </section>

        <!--Reihe Acht-->
        <section class="geradeReihe">
            <h2>2018-Heute</h2>
            <a href="../medien/600px-Simulation_theory_cover_art.jpg" download><img src="../medien/600px-Simulation_theory_cover_art.jpg" alt="Simulation Theory Album"></a>
            <p>
                In November 2018 wurde das achte Album namens "Simulation Theory" veröffentlicht. Das Thema vom Album ist die Simulations
                <br />
                Theorie mit 80er Synthwave Elementen. Es ist das erste Album mit alternativen Songs. Die grosse Tour startet in 2019.
            </p>
        </section>

        <!--Footer-->
        <footer>
            <a href="impressum.php">Impressum/Kontakt</a>
        </footer>
    </main>
</body>

</html>
