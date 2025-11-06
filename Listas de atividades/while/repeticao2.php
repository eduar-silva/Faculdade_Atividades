<form action="repeticao2.php" method="GET">
		Digite um número:
		<input type="number" name="num2"><br>
		<button type="submit">Enviar</button><br>
</form>

<?php
	$num2=$_GET['num2'];
	do {
		print " $num2 <br>";
		$num2--;
	} while ($num2!=0);
?>