<?php
//require "include/checkSession.inc.php";
// Servername
$servername = "localhost";
// Benutzername und passwort
$dbBenutzer = "root";
$dbPasswort = "";
// Datenbank
$dbName = "login_system";
// Verbindung
$Verbindung = mysqli_connect($servername, $dbBenutzer, $dbPasswort, $dbName);

if(!$Verbindung){
	die("Connection failed: ".mysqli_connect_error());
}
// Initialisiert Verbindung mit Datenbank.
// Wird in anmeldung.inc.php aufgerufen
?>