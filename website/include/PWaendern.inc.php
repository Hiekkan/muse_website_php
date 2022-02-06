<?php
// Session AUfrufen
session_start();
// Überprüft ob Zugriff berechtigt erfolgt und ob der Benutzer angemeldet ist 
if (isset($_POST['aendern-submit']) && isset($_SESSION['benutzernr']))
{
    // Verbindung Datenbank
    require 'dbh.inc.php';
    // Benutzereingaben
    $benutzername = $_SESSION['benutzername'];
    $pwAlt = $_POST['pw-alt'];
    $pwNeu = $_POST['pw-neu'];
    $pwNeuRep = $_POST['pw-rep'];
    // Überprüft ob die Eingaben vollständig sind
    if (empty($pwAlt)||empty($pwNeu)||empty($pwNeuRep))
    {
        header("Location: ../PHP/PWaendern.php?error=emptyfields");

    }
    // Prüft Passwort auf Komplexität
    else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%_-]{8,}$/', $pwNeu))
    {
        header("Location: ../PHP/PWaendern.php?error=invalidpassword");
    }
    // Prüft ob das neue Passwort und dessen Wiederholung übereinstimmen
    else if($pwNeu !== $pwNeuRep)
    {
        header("Location: ../PHP/PWaendern.php?error=invalidpassword");
    }
    else
    {
        // SQL-Statement
        $sql1 = "SELECT * FROM benutzer WHERE bidBenutzer = ?;";
        $stmt = mysqli_stmt_init($Verbindung);
        // statement auf ausführbare Zeichen überprüfen
        if(!mysqli_stmt_prepare($stmt, $sql1))
        {
            header("Location: ../PHP/PWaendern.php?error=sqlerror");
        }

        else
        {
            // bindet PArameter in Statement ein
            mysqli_stmt_bind_param($stmt, "s", $benutzername);
            // Statement wird ausgeführt
            mysqli_stmt_execute($stmt);
            // Rückgabewerte
            $rueckgabeResultat1 = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($rueckgabeResultat1))
            {
                // altes Passwort wird überprüft
                $pWortPruefen = password_verify($pwAlt, $row['pwtBenutzer']);
                if ($pWortPruefen === false)
                {
                    header("Location: ../PHP/PWaendern.php?error=wrongpassword");
                }
                else if ($pWortPruefen === true)
                {
                    // SQL-Statement
                    $sql2 = "UPDATE benutzer SET pwtBenutzer=? WHERE bidBenutzer=?;";
                    $stmt2 = mysqli_stmt_init($Verbindung);
                    // erneute Prüfung bzgl. SQL relevanter Zeichen
                    if (!mysqli_stmt_prepare($stmt2, $sql2))
                    {
                        header("Location: ../PHP/PWaendern.php?error=SQLerror");
                    }
                    else
                    {
                        // Verschlüsselung des neuen Passworts
                        $PWortVerschluesselt = password_hash($pwNeu, PASSWORD_DEFAULT);
                        // Parameter in Statement einbinden
                        mysqli_stmt_bind_param($stmt2, "ss", $PWortVerschluesselt, $benutzername);
                        // Statement ausführen
                        mysqli_stmt_execute($stmt2);
                        header("Location: ../index.php?Änderung=succes");
                    }
                }
                else
                {
                    header("Location: ../PHP/PWaendern.php?error=NoUser");
                }
            }
        }
    }
}
else
{
    header("Location: ../PHP/PWaendern.php?error=brgsfsh");
}
// Datenbankverbindung wird getrennt
mysqli_close($Verbindung);
exit();
?>