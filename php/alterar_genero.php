<?php
	include("check.php");
	$id=$_GET["id"];
	$nome_genero = $_GET['nome_genero'];	
	$sql = mysqli_query($conexao, "update genero set nome_genero='$nome_genero' where id_genero='$id'");
?>
<script language="Javascript">
	location.href="listar.php?type=<?php echo $type; ?>";
</script>
