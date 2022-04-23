<?php
	if(isset($_GET["id_appuntamento"])){
    	include("accessoDB.php");
        
        $id_appuntamento = $_GET["id_appuntamento"];
        $query = "DELETE FROM appuntamenti
        	      WHERE id_appuntamento = $id_appuntamento";

        if(mysqli_query($link, $query)){
        	echo "<script>
                  	alert('Cancellazione andata a buon fine');
                  	window.location.href = 'pannelloControllo.php';
            	  </script>";
        }else{
        	echo "<script>
                  	alert('Errore durante la cancellazione');
                 	window.location.href = 'pannelloControllo.php';
            	  </script>";
        }
        
        mysqli_close($link);
    }else{
    	header("location: pannelloControllo.php");
    }
?>