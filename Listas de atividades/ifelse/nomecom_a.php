<form action="nomecom_a.php" method="GET">
	Digite o nome:<input type="string" name="c">
	<button type="submit">Enviar</button>
</form>
<?php 
$c= @$_GET['c'];
$letra= substr($c, 0,1);
	if (strtolower($letra)==='c') {
		print"Começa com A <br>";
		print "$c";
	}else{
		print"Não começa com A <br>";
		print "$c";
	}
?>