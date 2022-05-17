<?php
	include("check.php"); 
	$id=$_GET["id"];
	$nome_funcionario=$_GET["nome_funcionario"];
	$email_funcionario=$_GET["email_funcionario"];
	$tel_funcionario=$_GET["tel_funcionario"];
	$id_funcional=$_GET["id_funcional"];
	$senha=$_GET["senha"];

	$sql = mysqli_query($conexao, "UPDATE funcionario set nome_funcionario='$nome_funcionario', email_funcionario='$email_funcionario', tel_funcionario='$tel_funcionario', id_funcional='$id_funcional', senha='$senha' where id_funcionario = '$id'");
?>
<script language="Javascript">
	location.href="listar.php?type=<?php echo $type; ?>";
</script>
