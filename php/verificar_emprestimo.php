<?php
	$id = $_GET['id'];
	include('db.php');
	$sql= mysqli_query($conexao, "update emprestimo set estado = 'ok' where id_emprestimo = '$id'");
?>
<script language="Javascript">
	location.href="listar.php?type=emprestimo";
</script>