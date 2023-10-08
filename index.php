<!-- Odpalenie elementów strony -->
<?php session_start(); #Rozpoczęcie cache - ciasteczek cookies
require_once("Tools/Config.php");
require_once("Tools/Main.php"); #spójrz do katalogu / nazwa pliku
$BD = new DataBase(); #Tworzenie nowej klasy o nazwie DataBase - tworzymy tu strukturę działania strony
$BD->Start(); #Wybranie BD, czyli Database w pliku Main.php i Wywołanie funkcji start
