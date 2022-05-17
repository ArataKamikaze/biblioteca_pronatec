<?php
	$nome_editora=$_GET['nome_editora'];
	$sql = mysqli_query($conexao, "INSERT INTO editora(nome_editora) VALUES ('$nome_editora')");

?>
<script language="Javascript">
	location.href="listar.php?type=editora";
</script>