<form action="igualmaior.php" method="GET">
	Palavra1<input type="string" name="palavra1">
	Palavra2<input type="string" name="palavra2">
	<button type="submit">Enviar</button>
</form>
<?php 
@$Palavra1= @$_GET['palavra1'];
@$Palavra2= @$_GET['palavra2'];
	if ($Palavra1===$Palavra2) {
		print"$palavra1 igual a $Palavra2";
	}elseif (strlen($Palavra1)>strlen($Palavra2)) {
		print "A palavra $Palavra1 é maior";
	}else{
		print"A palavra $Palavra2 é maior";
	}
	
?>