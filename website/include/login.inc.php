<?php 
//require "include/checkSession.inc.php";
if (isset($_POST['login-submit'])){
	//Datenbankverbindung
	require 'dbh.inc.php';
    // Benutzeingabenen aus login.php
	$mailOrBenutzer = $_POST['mailuid'];
	$PWort = $_POST['pwd'];
    // kontrolliert ob die nutzereingaben vollständig sind
	if (empty($mailOrBenutzer) || empty($PWort)){
		header("Location: ../index.php?error=emptyfields");

	}
    
	else {
        // SQL-statement
		$sql = "SELECT * FROM benutzer WHERE bidBenutzer = ? OR emailBenutzer = ?;";
        // Verbindung Datenbank
		$stmt = mysqli_stmt_init($Verbindung);
        // EIngaben auf ausführbare Zeichen prüfen
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else {
			// Parameter werden in Statement eingebunden
			mysqli_stmt_bind_param($stmt, "ss", $mailOrBenutzer, $mailOrBenutzer);
            // Statement wird ausgeführt
			mysqli_stmt_execute($stmt);
            // Rückgabewerte der Abfrage
			$rueckgabeResultat  = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($rueckgabeResultat)){
                // Passwort wird abgeglichen
				$PWortPruefen = password_verify($PWort, $row['pwtBenutzer']);
                // Rückleitung falls Passwort fehlerhaft
				if ($PWortPruefen === false){
					header("Location: ../index.php?error=wrongpwd");
				}
                // Sofern das Passwort übereinstimmt werden entsprechende Sessionvariablen gesetzt
				else if ($PWortPruefen === true){
                    // Aufruf der entsprechenden Session
                    session_start();
                    $_SESSION['benutzernr'] = $row['idBenutzer'];
					$_SESSION['benutzername'] = $row['bidBenutzer'];
					header("Location: ../index.php?login=success");
				}
				else {
					header("Location: ../index.php?error=wrongpwd");
				}
			}
            // Rückleitung falls Benutzer nicht existiert
			else {
				header("Location: ../index.php?error=NoUser");
			}
		}
	}
}
// Rückleitung falls Zugriff fehlerhaft
else{
	header("Location ../index.php");
    exit();
	
}
// Datenbankverbindung wird getrennt
mysqli_close($Verbindung);
exit();

?>