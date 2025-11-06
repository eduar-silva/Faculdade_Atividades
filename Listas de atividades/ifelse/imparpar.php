<form action="imparpar.php" method="GET">
	Digite um número:<input type="number" name="a">
	<button type="submit">Enviar</button>
</form>

<?php 
	$a= @$_GET['a'];
	if (($a%2)==0) {
		print"$a é par";
	}else{
		print"$a é impar";
	}
?>