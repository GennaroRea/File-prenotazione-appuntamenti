<html>
<head>
	<style>
    	@import url(stileappuntamenti.css);
    </style>
</head>
	<body>
		<?php
			if(isset($_GET["data"])){
				$data = $_GET["data"];
			}else{
				$data = date('Y-m-d');
			}
			
			include("accessoDB.php");
			$query = "SELECT id_appuntamento, nome, cognome, cellulare, orario
					  FROM appuntamenti
					  WHERE data = '$data'
                      ORDER BY orario;";
			
			$result = mysqli_query($link, $query);
			if(mysqli_num_rows($result) > 0){
				
				$fetchedArray = mysqli_fetch_assoc($result);
				echo "<form name='listaAppuntamenti'><table>";
				do{
					echo "<tr>";
                    echo "<td><input type='radio' class='radio' name='cliente' value='".$fetchedArray["id_appuntamento"]."' /></td>";
                    
                    $fetchedArray["orario"] = substr($fetchedArray["orario"], 0, 5);
                    unset($fetchedArray["id_appuntamento"]);
					foreach($fetchedArray as $campo){
						echo "<td class='dati'>";
						echo "<label>".$campo."</label>";
						echo "</td>";
					}
					echo "</tr>";
					
					$fetchedArray = mysqli_fetch_assoc($result);
				}while($fetchedArray);
				echo "</table></form>";
			}else{
				echo "Nessun appuntamento prenotato alla data inserita";
			}
			
			mysqli_close($link);
		?>
	</body>
</html>