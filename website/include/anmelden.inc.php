<?php 
//überprüft ob der Aufruf über den Anmelde-Button erfolgt
if(isset($_POST['anmelden-btn'])){
	// Verbindung Datenbank
	require 'dbh.inc.php';
	// Benutzername, E-Mail, PW und dessen Wiederholung aus anmelden.php
	$benutzername = $_POST['bid'];
	$Email = $_POST['mail'];
	$PWort = $_POST['pw'];
	$PWortRepetition = $_POST['pw-rep'];
	// Fehlerbehandlung: Kontrolliert ob alle Felder ausgefüllt wurden
	if(empty($benutzername)||empty($Email)||empty($PWort)||empty($PWortRepetition)){
		//Rückleitung auf anmelden.php mit entsprechender Fehlermeldung
		//Felder leeren
		header("Location: ../PHP/registrierung.php?error=emptyfields&bid=".$benutzername."&mail=".$Email);

	} //Validiert die Email und Benutzername
	else if(!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $benutzername)){
		header("Location: ../PHP/registrierung.php?error=invalidmail&bid");

	}// validiert Email
	else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../PHP/registrierung.php?error=invalidmail&bid=".$benutzername);

	} //validiert Benutzername
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $benutzername)){
		header("Location: ../PHP/registrierung.php?error=invalidmail&mail=".$email);

	}//überprüft ob Passwort und dessen Wiederholung übereinstimmen
    else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%_-]{8,}$/', $PWort)){
        header("Location: ../PHP/registrierung.php?error=passwordcheck");
    }
	else if ($PWort !== $PWortRepetition){
		header("Location: ../PHP/registrierung.php?error=passwordcheck&mail&bid=".$benutzername."&mail=".$email);
	}
	else {
		
		$sql = "SELECT bidBenutzer FROM benutzer WHERE bidBenutzer=?";
		$stmt = mysqli_stmt_init($Verbindung);
		// Eingabe auf ausführbare Zeichen prüfen
		if (!mysqli_stmt_prepare($stmt, $sql)){
            mysqli_stmt_close($stmt);
			header("Location: ../PHP/registrierung.php?error=sqlerror");

		}
		else {
			//bindet Parameter in statement ein
			mysqli_stmt_bind_param($stmt, "s", $benutzername);
			// Führt Datenbankbankkommando aus
			mysqli_stmt_execute($stmt);
			// speichert das Resultat der Datenbankabfrage in der Variabel $stmt
			mysqli_stmt_store_result($stmt);
			// mysqli ueberprueft die die Haeufigkeit des Vorkommens des Benutzernamens
			$resultatpruefen = mysqli_stmt_num_rows($stmt);
			// sollte dieser bereits vorhanden sein wird eine abgebrochen und eine andere Eingabe angefordert
			if ($resultatpruefen > 0){
                mysqli_stmt_close($stmt);
				header("Location: ../PHP/registrierung.php?error=nametaken&mail=".$Email);
			}
			else {
				$sql = "INSERT INTO benutzer (bidBenutzer, emailBenutzer, pwtBenutzer) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($Verbindung);
				// Eingabe auf ausführbare Zeichen prüfen
				if (!mysqli_stmt_prepare($stmt, $sql)){
                    mysqli_stmt_close($stmt);
					header("Location: ../PHP/registrierung.php?error=sqlerror");
					
				}
				else {
					// PW Verschlüsselung (hash) mittels B-Crypt
					$PWortVerschluesselt = password_hash($PWort, PASSWORD_DEFAULT);
					// in diesem Falle 3*"s" da drei Werte eingetragen werden
					mysqli_stmt_bind_param($stmt, "sss", $benutzername, $Email, $PWortVerschluesselt);
					// Führt Datenbankbankkommando aus
					mysqli_stmt_execute($stmt);
					header("Location: ../PHP/registrierung.php?anmeldung=success");
					session_start();
                    // Entsprechende Sessionvariablen werden gesetzt
                    $_SESSION['benutzernr'] = $row['idBenutzer'];
					$_SESSION['benutzername'] = $row['bidBenutzer'];
                    //Abschluss des statements
                    mysqli_stmt_close($stmt);

				}
			}
			
		}
	}

}
//Weiterleitung falls Zugriff fehlerhaft
else {
	header("Location: ../index.php");

}
// Datenbankverbindung wird getrennt
mysqli_close($Verbindung);
exit();
?>
