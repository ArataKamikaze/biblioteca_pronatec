<?php
	include("check.php"); 
	$id=$_GET["id"];
	$nome_editora=$_GET['nome_editora'];
	$sql = mysqli_query($conexao, "UPDATE editora set nome_editora= '$nome_editora' where id_editora='$id'");

?>
<script language="Javascript">
	location.href="listar.php?type=<?php echo $type; ?>";
</script>
