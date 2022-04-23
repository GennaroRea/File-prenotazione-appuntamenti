<html>
	<head>
		<title>Pannello di controllo</title>
		<script>
			function cambiaData(input){
				data = input.value;
				window.frames["appuntamenti"].document.location.href = "appuntamenti.php?data=" + data;
			}
            
            function cancella(){
            	formAppuntamenti = window.frames["appuntamenti"].document.listaAppuntamenti;
                
                if(typeof formAppuntamenti == "undefined" || formAppuntamenti.cliente.value == ""){
                	alert("Nessun appuntamento selezionato");
                }else{
                	conferma = confirm("Sei sicuro di procedere alla cancellazione dell'appuntamento selezionato? L'operazione non e' reversibile");
            		if(conferma)
                    	window.location.href = "cancellaAppuntamento.php?id_appuntamento=" + formAppuntamenti.cliente.value;
                }
            }
		</script>
	</head>
	
	<body>
		<form name="formData">
			<input type="date" name="data" value="<?php echo date('Y-m-d')?>" onChange="cambiaData(this);" /><br>
		</form>
		
		<iframe name="appuntamenti"
				title="Appuntamenti"
				width="600"
				height="300"
				src="appuntamenti.php">
		</iframe>
        
        <br><br><br>
        <button type="button" onClick="cancella();">Cancella appuntamento</button>
        <button type="button" onClick="">Modifica appuntamento</button>
        <button type="button" onClick="">Aggiungi appuntamento</button>

	</body>
</html>