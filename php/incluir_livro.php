<?php
	$nome_livro= $_GET['nome_livro'];
	$id_editora=$_GET['id_editora'];
	$edicao=$_GET['edicao'];
	$id_genero=$_GET['id_genero'];
	$quantidade_livro=$_GET['quantidade_livro'];
	$nome_autor=$_GET['nome_autor'];
	$resumo=$_GET['resumo'];

	$sql = mysqli_query($conexao, "INSERT INTO livro(id_editora, id_genero, edicao, quantidade_livro, resumo, nome_livro, nome_autor) 
	VALUES ('$id_editora','$id_genero','$edicao', '$quantidade_livro', '$resumo', '$nome_livro', '$nome_autor')");			
?>
<script language="Javascript">
	location.href="listar.php?type=livro"
</script>