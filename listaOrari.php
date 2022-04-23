<?php
	$inizioLavoro = 8;
	$fineLavoro = 20;
	$fasciaOrario = 30;
    
    $listaOrari = [];
    
	for($tempo = ($inizioLavoro*60), $index = 0; $tempo < ($fineLavoro*60); $tempo += $fasciaOrario, $index++){
    	$ora = (int)($tempo/60);
        if($ora < 10)
        	$ora = "0".$ora;
            
        $minuti = $tempo%60;
        if($minuti == 0)
        	$minuti .= 0;
            
        //echo "<option value='$ora:$minuti'>$ora:$minuti</option>";
        $listaOrari[$index] = $ora;
        $listaOrari[$index] .= ":";
        $listaOrari[$index] .= $minuti;
	}
    
    return $listaOrari[$index];
?>