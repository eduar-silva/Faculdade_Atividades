<form action="ex ifelse.php" method="GET">
	Digite o texto:<input type="string" name="b">
	<button type="submit">Enviar</button>
</form>
<?php 
$b= @$_GET['b'];
	if (strtolower($b)===$b) {
		print"Está tudo em minúsculo<br>";
		print "$b";
	}elseif ($b===strtoupper($b)) {
		print"Está tudo em maiusculo<br>";
		print "$b";
	}else{
		print"tem de tudo<br>";
		print "$b";
	}
?>