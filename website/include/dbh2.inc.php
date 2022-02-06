<?php
// servername
$servername = "localhost";
//benutzername und passwort
$dbBenutzer = "root";
$dbPasswort = "";
//datenbank
$dbName = "message_system";
// verbindung
$Verbindung = mysqli_connect($servername, $dbBenutzer, $dbPasswort, $dbName);

if(!$Verbindung){
	die("Connection failed: ".mysqli_connect_error());
}
// Verbindung mit Datenbank.
// Wird in anmeldung.inc.php aufgerufen
?>