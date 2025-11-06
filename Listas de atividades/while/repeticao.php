<form action="repeticao.php" method="GET">
		Digite um número:
		<input type="number" name="num1"><br>
		<button type="submit">Enviar</button><br>
</form>

<?php
	$i=1;
	$num1=$_GET['num1'];
	while (10>=$i) {
		$mult = $num1*$i;
		print "$i x $num1 = $mult <br>";
		$i++; 
	}
?>