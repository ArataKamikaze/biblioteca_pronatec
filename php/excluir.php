<?php
	include("check.php");
	include("db.php");
	$id=$_GET["id"];	

	$sql = mysqli_query($conexao, "DELETE from $type where id_$type = '$id'");
?>
<script language="Javascript">
	location.href="listar.php?type=<?php echo $type; ?>"
</script>