<?php
	$nome_aluno =$_GET['nome_aluno'];
	$email_aluno =$_GET['email_aluno'];
	$tel_aluno = $_GET['tel_aluno'];
	$sexo_aluno = $_GET['sexo_aluno'];
	$turma_aluno = $_GET['turma_aluno'];
	$sql = mysqli_query($conexao, "INSERT INTO aluno(nome_aluno, turma_aluno, email_aluno, tel_aluno, sexo) VALUES 
	('$nome_aluno', '$turma_aluno', '$email_aluno', '$tel_aluno', '$sexo_aluno')");
?>
<script language="Javascript">
	location.href="listar.php?type=aluno";
</script>