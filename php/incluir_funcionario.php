<?php
	$nome_funcionario=$_GET["nome_funcionario"];
	$email_funcionario=$_GET["email_funcionario"];
	$tel_funcionario=$_GET["tel_funcionario"];
	$id_funcional=$_GET["id_funcional"];
	$senha=$_GET["senha"];

	$sql = mysqli_query($conexao, "INSERT INTO funcionario(nome_funcionario, email_funcionario, tel_funcionario, id_funcional, senha) 
	VALUES ('$nome_funcionario', '$email_funcionario', '$tel_funcionario', '$id_funcional', '$senha')");
?>
<script language="Javascript">
	location.href="listar.php?type=funcionario";
</script>