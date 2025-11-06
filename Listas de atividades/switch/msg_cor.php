<form action="msg_cor.php" method="GET">
	Digite "vermelho", "azul" ou "verde"
	<input type="text" name="cor">
	<button type="submit">Enviar</button>
</form>

<?php
	switch (@$_GET['cor']) {
		case 'vermelho':
			print "cor do amor";
			break;
		case 'azul':
			print "cor da noite";
			break;
		case 'verde':
			print "cor da floresta";
			break;
		default:
			print "Digite só as solicitadas";
	}
?>	