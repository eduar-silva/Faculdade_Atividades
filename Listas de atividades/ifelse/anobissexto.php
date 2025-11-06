<form action="anobissexto.php" method="GET">
	Digite um ano <input type="number" name="ano">
<button type="submit">Enviar</button>
</form>
<?php
	$ano = @$_GET['ano'];
	$data = date("L", strtotime("$ano-01-01"));
	if ($data === '1') {
		print "O ano $ano é bissexto";
	}else{
		print "O ano $ano não é bissexto";
	}
?>