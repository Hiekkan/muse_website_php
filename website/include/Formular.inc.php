<?php 
// überprüft ob der Aufruf über den ÜbermittelN-bUTTON ERFOLGT
if(isset($_POST['Nachricht-submit']))
{
    // Aufruf der bestehenden Session
    session_start();
    // Datenbankverbindung
    require 'dbh2.inc.php';
    // Übergabe der Nutzereingaben
    $msgVorname = $_POST['Vorname'];
    $msgNachname = $_POST['Nachname'];
    $msgEmail = $_POST['email'];
    $msgMsg = $_POST['comment'];
    // Überprüft ob der Benutzer angemeldet ist
    // falls nicht wird kein Benutzername an die Datenbank übermittelt
    if (isset($_SESSION['benutzername']))
    {
        $msgBid = $_SESSION['benutzername'];
    }
    else
    {
        $msg = NULL;
    }
    // Überprüft Benutzereingaben auf ihre Vollständigkeit
    if (empty($msgVorname)||empty($msgNachname)||empty($msgEmail)||empty($msgMsg))
    {
        header("Location: ../PHP/impressum.php?error=emptyfields");
    }
    // Überprüft die Eingabe der E-mail Adresse auf ihr Format
    else if(!filter_var($msgEmail, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../PHP/impressum.php?error=invalidemail");
    }
    else
    {
        // Struktur des SQL-Statements
        $sql = "INSERT INTO messages (msgbid, msgVorname, msgNachname, msgEmail, msgmessage) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($Verbindung);
        //Eingabe auf ausführbare Zeichen prüfen
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            mysqli_stmt_close($stmt);
            header("Location: ../PHP/impressum.php?error=sqlerror");
        }
        else
        {
            //bindet Parameter in statement ein
            mysqli_stmt_bind_param($stmt, "sssss", $msgBid, $msgVorname, $msgNachname, $msgEmail, $msgMsg);
            // Führt Datenbankbankkommando aus
            mysqli_stmt_execute($stmt);
            //Abschluss des Statements
            mysqli_stmt_close($stmt);
            header("Location: ../PHP/impressum.php?message=success");
        }
    }
}
// weiterleitung Falls Zugriff fehlerhaft
else
{
    header("Location: ../PHP/impressum.php");

}
mysqli_close($Verbindung);
exit();
?>