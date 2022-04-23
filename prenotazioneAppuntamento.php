<html>
	<head>
		<title>Studio Fisioterapico</title>
        <style>
        	@import url(stileprenotazione.css);
        </style>
        
        <script>
        
        </script>
	</head>

	<body>
    	<div id="header"> <h1>Prenotazione appuntamenti</h1> </div>
    	<div id="main">
		<div id="title"> <h1>Prenotazione appuntamenti</h1> </div>
		<br>
		<form action="prenotazione.php" method="POST" name="prenotazioni">
        	<div class="divsx">
				<label>Nome</label><br>
				<input placeholder="inserire nome..." type="text" name="nome" size="30" maxlength="30" required/><br><br><br>
            </div>
            <div class="divdx">
				<label>Cognome</label><br>
				<input placeholder="inserire cognome..." type="text" name="cognome" size="30" maxlength="30" required/><br><br><br>
            </div>
            <div class="divsx">
				<label>Cellulare</label><br>
				<input placeholder="inserire recapito telefonico..." type="text" name="cellulare" size="15" maxlength="15" required/><br><br><br>
            </div>
            <div class="divdx">
				<label>Data appuntamento</label><br>
				<input type="date" name="data" min="<?php echo date('Y-m-d')?>" max="<?php echo date('Y-m-d', time()+(31536000*2))?>" required/><br><br><br>
			</div>
            <div id="orarisx">
            	<label>Orario appuntamento</label><br>
				<input id="orario" type="text" name="orario" size="5" maxlength="5" readonly/><br><br><br>
                <input type="hidden" required />
            </div>
            <div id="oraridx">
            	<button type="button" class="oraribtn" onclick="prenotazioni.orario.value='08:00'"> 08:00 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='08:30'"> 08:30 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='09:00'"> 09:00 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='09:30'"> 09:30 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='10:00'"> 10:00 </button><br>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='10:30'"> 10:30 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='11:00'"> 11:00 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='11:30'"> 11:30 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='12:00'"> 12:00 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='12:30'"> 12:30 </button><br>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='15:00'"> 15:00 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='15:30'"> 15:30 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='16:00'"> 16:00 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='16:30'"> 16:30 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='17:00'"> 17:00 </button><br>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='17:30'"> 17:30 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='18:00'"> 18:00 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='18:30'"> 18:30 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='19:00'"> 19:00 </button>
                <button type="button" class="oraribtn" onclick="prenotazioni.orario.value='19:30'"> 19:30 </button><br>
            </div>
            <div class="button">
            	<center><input id="bottone" type="submit" name="submit" value="Prenota" required></center>
			</div>
            </form>
        </div>
	</body>
</html>