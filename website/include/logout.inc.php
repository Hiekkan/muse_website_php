<?php
if (isset($_POST['logout'])){
    // Aufruf der entsprechenden Session
    session_start();
    // Session und entsprechende Sessionvariablen werden überschrieben
    session_unset();
    session_destroy();
    // Rückleitung
    header("Location: ../index.php");
    exit();
}
?>