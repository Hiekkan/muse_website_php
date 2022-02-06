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
    <title>Tourdaten</title>
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
            <a href="tour.php" class="active">Tourdaten</a>
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
        <section class="hintergrund">
            <h2>Die Tourdaten</h2>

            <!--Google Maps-->
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/d/embed?mid=1Kmg_zO6Gz53DIlO2BokiCFs4uIfahwOo" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <!--Tabelle mit Tourdaten-->
            <h2>Amerikanische Tour</h2>
            <table>
                <tr>
                    <th>Datum</th>
                    <th>Ort</th>
                </tr>
                <tr>
                    <td>22. Februar</td>
                    <td>Houston, TX, Texas</td>
                </tr>
                <tr>
                    <td>24. Februar</td>
                    <td>Dallas, Texas</td>
                </tr>
                <tr>
                    <td>26. Februar</td>
                    <td>Phoenix, Arizona</td>
                </tr>
                <tr>
                    <td>28. Februar</td>
                    <td>Salt Lake City, Utah</td>
                </tr>
                <tr>
                    <td>2. März</td>
                    <td>Las Vegas, Nevada</td>
                </tr>
                <tr>
                    <td>5. März</td>
                    <td>San Diego, California</td>
                </tr>
                <tr>
                    <td>7. März</td>
                    <td>Sacramento, California</td>
                </tr>
                <tr>
                    <td>9. März</td>
                    <td>Oakland, California</td>
                </tr>
                <tr>
                    <td>11. März</td>
                    <td>Los Angeles, California</td>
                </tr>
                <tr>
                    <td>13. März</td>
                    <td>Austin, Texas</td>
                </tr>
                <tr>
                    <td>24. März</td>
                    <td>Sunrise, Florida</td>
                </tr>
                <tr>
                    <td>26. März</td>
                    <td>Atlanta, Georgia</td>
                </tr>
                <tr>
                    <td>28. März</td>
                    <td>Toronto, Ontario</td>
                </tr>
                <tr>
                    <td>30. März</td>
                    <td>Montreal, Quebec</td>
                </tr>
                <tr>
                    <td>31. März</td>
                    <td>Quebec City, Quebec</td>
                </tr>
                <tr>
                    <td>2. April</td>
                    <td>Washington, DC, District of Columbia</td>
                </tr>
                <tr>
                    <td>4. April</td>
                    <td>Detroit, Michigan</td>
                </tr>
                <tr>
                    <td>7. April</td>
                    <td>Philadelphia, Pennsylvania</td>
                </tr>
                <tr>
                    <td>8. April</td>
                    <td>New York</td>
                </tr>
                <tr>
                    <td>10. April</td>
                    <td>Boston, Massachusetts</td>
                </tr>
                <tr>
                    <td>12. April</td>
                    <td>Chicago, Illinois</td>
                </tr>
            </table>

            <h2>Europa Tour</h2>
            <table>
                <tr>
                    <th>Datum</th>
                    <th>Ort</th>
                </tr>
                <tr>
                    <td>26. Mai</td>
                    <td>Prague, Czech Republic</td>
                </tr>

                <tr>
                    <td>28. Mai</td>
                    <td>Budapest, Hungary</td>
                </tr>
                <tr>
                    <td>29. Mai</td>
                    <td>Graz, Austria</td>
                </tr>
                <tr>
                    <td>1. Juni</td>
                    <td>London, England</td>
                </tr>
                <tr>
                    <td>5. Juni</td>
                    <td>Bristol, England</td>
                </tr>
                <tr>
                    <td>8. Juni</td>
                    <td>Manchester, England</td>
                </tr>
                <tr>
                    <td>12. Juni</td>
                    <td>Riga, Latvia</td>
                </tr>
                <tr>
                    <td>15. Juni</td>
                    <td>Moscow, Russia</td>
                </tr>
                <tr>
                    <td>18. Juni</td>
                    <td>Helsinki, Finland</td>
                </tr>
                <tr>
                    <td>22. Juni</td>
                    <td>Krakow, Poland</td>
                </tr>
                <tr>
                    <td>27. Juni</td>
                    <td>Nijmegen, Netherlands</td>
                </tr>
                <tr>
                    <td>29. Juni</td>
                    <td>Cologne, Germany</td>
                </tr>
                <tr>
                    <td>30. Juni</td>
                    <td>Werchter, Belgium</td>
                </tr>
                <tr>
                    <td>3.Juli</td>
                    <td>Zurich, Switzerland</td>
                </tr>
                <tr>
                    <td>5. Juli</td>
                    <td>Paris, France</td>
                </tr>
                <tr>
                    <td>6. Juli</td>
                    <td>Paris, France</td>
                </tr>
                <tr>
                    <td>9. Juli</td>
                    <td>Marseille, France</td>
                </tr>
                <tr>
                    <td>12. Juli</td>
                    <td>Milan, Italy</td>
                </tr>
                <tr>
                    <td>13. Juli</td>
                    <td>Milan, Italy</td>
                </tr>
                <tr>
                    <td>16. Juli</td>
                    <td>Bordeaux, France</td>
                </tr>
                <tr>
                    <td>20. Juli</td>
                    <td>Roma, Italy</td>
                </tr>
                <tr>
                    <td>24. Juli</td>
                    <td>Lisbon, Portugal</td>
                </tr>
                <tr>
                    <td>26. Juli</td>
                    <td>Madrid, Spain</td>
                </tr>
            </table>

        </section>
    </main>

    <!--Footer-->
    <footer>
        <a href="impressum.php">Impressum/Kontakt</a>
    </footer>

</body>

</html>
