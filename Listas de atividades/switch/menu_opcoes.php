<form action="menu_opcoes.php" method="GET">
	1 - Cadastrar usuário<br>
	2 - Listar usuário<br>
	3 - Sair<br>
	<input type="number" name="opcao">
	<button type="submit">Enviar</button>
</form>

<?php
	switch(@$_GET['opcao']) {
		case 1:
			print "Cadastrado!";
			break;

		case 2:
			print "dudu";
			break;

		default:
			print "Foi encerrado com sucesso!!";
	}
?>