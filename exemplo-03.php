<?php
function ola($texto="Mundo",$periodo = "Bom dia"){
	return "ola $texto! $periodo!<br>";

}
echo ola("Mundo","Bom dia");
echo ola ("","Boa noite");
echo ola("Glaucio","Boa tarde");
echo ola("Joao","");
?>