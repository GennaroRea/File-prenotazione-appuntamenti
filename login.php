<?php
if (isset($_POST['submit'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	include("accessoDB.php");
	$query = "SELECT *
			  FROM utenti
			  WHERE username = '$user'";
	$result = mysqli_query($link, $query);
	
	if(mysqli_num_rows($result) > 0){
		$fetchedArray = mysqli_fetch_assoc($result);
	
		$password = $fetchedArray['password'];
		if ($pass == $password) {
			echo "<script>
                  	alert('Accesso confermato');
                  	window.location.href = 'pannelloControllo.php';
            	  </script>";
		} else { 
			echo "<script>
                  	alert('Errore: password errata');
                  	window.location.href = 'login.html';
            	  </script>";} 
	}else {
		echo "<script>
                  	alert('Errore: utente non registrato');
                  	window.location.href = 'login.html';
            	  </script>";
	}
}
?>