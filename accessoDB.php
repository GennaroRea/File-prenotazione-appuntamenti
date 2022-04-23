<?php
	$indirizzoDB = "localhost";
	$usernameDB = "bozzalavoro";
	$passwordDB = "";
	$link = mysqli_connect($indirizzoDB, $usernameDB, $passwordDB) or die("Errore di connessione al server DB");
	mysqli_select_db($link, "my_bozzalavoro") or die("Errore di selezione del DB");
?>