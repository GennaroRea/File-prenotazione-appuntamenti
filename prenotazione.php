<html>
<head>
	<style>
    	body{
			background-color: white;
    		margin-top:0px;
   			margin-left:0px;
    		margin-right:0px;
		}
    </style>
</head>
<body>
<?php
	if(isset($_POST["submit"])){
    	$nome = ucfirst($_POST["nome"]);
        $cognome = ucfirst($_POST["cognome"]);
        $cellulare = $_POST["cellulare"];
        $data = $_POST["data"];
        $orario = $_POST["orario"];
        $dataattuale = date("Y-m-d");
        
        if($data != $dataattuale){
        	include("accessoDB.php");
        	$query = "SELECT * FROM appuntamenti WHERE data = '$data' AND orario = '$orario'";
        	$sql = mysqli_query($link, $query);
        	$result = mysqli_num_rows($sql);
        	mysqli_close($link);
        	if($result > 0){
        		echo "<script>alert('Prenotazione non effettuata, orario non disponibile');</script>";		//Prenotazione avvenuta
        	}else{
        		include("accessoDB.php");
        		$query = "INSERT INTO appuntamenti (nome, cognome, cellulare, data, orario)
         			  	  VALUES ('$nome', '$cognome', '$cellulare', '$data', '$orario');";
                  
        		$result = mysqli_query($link, $query);
        		mysqli_close($link);
        		if($result)
        			echo "<script>alert('Prenotazione andata a buon fine');</script>";		//Prenotazione avvenuta
        		else
        			echo "<script>alert('Errore durante la prenotazione');</script>";		//Errore
       		}}else{
            	echo "<script>alert('Impossibile prenotare appuntamenti per la data odierna');</script>";
            }
        	echo "<script>window.location.href = 'prenotazioneAppuntamento.php'</script>";
	}else{
		header("location: prenotazioneAppuntamento.php");
	}
?>
</body>
</html>