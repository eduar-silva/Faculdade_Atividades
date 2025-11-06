<form action="exercicios_03_10.php" method="GET">
	Digite um número referente ao dia da semana
	<input type="number" name="dia" min="1" max="7">
	<button type="submit">Enviar</button>
</form>
<?php
	switch (@$_GET['dia']) {
		case 1:
			print "Domingo";
			break;
		case 2:
			print "Segunda";
			break;
		case 3:
			print "Terça";
			break;
		case 4:
			print "Quarta";
			break;
		case 5:
			print "Quinta";
			break;
		case 6:
			print "Sexta";
			break;
		case 7:
			print "Sábado";
			break;
	}
?>	 