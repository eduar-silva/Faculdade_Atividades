<form action="idade.php" method="GET">
	Digite a fase da sua vida!<br>
	Criança<br>
	Adolescente<br>
	Adulto<br>
	Idoso<br>
	<input type="text" name="faixa_etaria">
	<button type="submit">enviar</button>
</form>

<?php
	switch (@$_GET['faixa_etaria']) {
		case 'Crianca':
			print "Modo very easy";
			break;
		case 'Adolescente':
			print "Modo medium";
			break;
		case 'Adulto':
			print "Modo Hard";
			break;
		case 'Idoso':
			print "Zerando o game!";
			break;
		default:
			print "Ta morto já";
	}
?>