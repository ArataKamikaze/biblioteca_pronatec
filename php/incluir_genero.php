<?php
	$nome_genero = $_GET['nome_genero'];	
	$sql = mysqli_query($conexao, "insert into genero(nome_genero) values ('$nome_genero')");
?>
<script language="Javascript">
	location.href="listar.php?type=genero";
</script>