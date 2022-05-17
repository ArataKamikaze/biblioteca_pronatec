<?php
	include("check.php"); 
	$id=$_GET["id"];
	$nome_livro= $_GET['nome_livro'];
	$edicao=$_GET['edicao'];
	$id_editora=$_GET['id_editora'];
	$id_genero=$_GET['id_genero'];
	$quantidade_livro=$_GET['quantidade_livro'];
	$nome_autor=$_GET['nome_autor'];
	$resumo=$_GET['resumo'];

	$sql = mysqli_query($conexao, "UPDATE livro set id_editora = '$id_editora', id_genero = '$id_genero', edicao='$edicao', quantidade_livro='$quantidade_livro', resumo='$resumo', nome_livro='$nome_livro', nome_autor= '$nome_autor' where id_livro ='$id'");			
?>
<script language="Javascript">
	location.href="listar.php?type=<?php echo $type; ?>";
</script>
