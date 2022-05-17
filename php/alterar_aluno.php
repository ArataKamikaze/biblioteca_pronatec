<?php
	include("check.php"); 
	$id=$_GET["id"];
	$nome_aluno =$_GET['nome_aluno'];
	$email_aluno =$_GET['email_aluno'];
	$tel_aluno = $_GET['tel_aluno'];
	$sexo_aluno = $_GET['sexo_aluno'];
	$turma_aluno = $_GET['turma_aluno'];

	$sql = mysqli_query($conexao, "UPDATE aluno set nome_aluno= '$nome_aluno', turma_aluno= '$turma_aluno', email_aluno = '$email_aluno' , tel_aluno = '$tel_aluno', sexo = '$sexo_aluno' where id_aluno = '$id'");
?>
<script language="Javascript">
	location.href="listar.php?type=<?php echo $type; ?>";
</script>
