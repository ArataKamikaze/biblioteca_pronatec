<?php
	include("check.php");
	$id=$_GET["id"];
	$sql= mysqli_query($conexao, "SELECT *from livro where id_livro='$id'");
	while($lista = mysqli_fetch_assoc($sql)){
		$nome_livro=$lista["nome_livro"];
		$edicao=$lista['edicao'];
		$quantidade_livro=$lista['quantidade_livro'];
		$resumo=$lista['resumo'];
		$autor = $lista["nome_autor"];
		$id_editora= ["id_editora"];
	}
?>
<div class="row justify-content-center align-items-center" style="margin-top:3%;">
	<div class="col col-sm col-md col-lg col-xl-8 " style="background: #f0f0f0; padding:50px;">		
		<form action="alterar.php" method="GET">
			<input type="hidden" name="type" value="<?php echo $type; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<h1 class="text-center">Alteração de Cadastro</h1>						
			</div>
			<div class="form-group">
				Nome do Livro:
				<input type="text" placeholder="Nome" name="nome_livro" value="<?php echo $nome_livro ?>" class="form-control">
			</div>
			<div class="form-group">
				Editora:
				<select name="id_editora" class="form-control">
					<?php
						$sql=mysqli_query($conexao, "SELECT *FROM editora ORDER BY nome_editora ASC;;");
						while($lista = mysqli_fetch_assoc($sql)){
							$id_editora=$lista["id_editora"];
							$nome_editora=$lista["nome_editora"];
							echo  '<option value="'.$id_editora.'">'.$nome_editora.'</option>';
						}
					?>				
				</select> 
			</div>
			<div class="form-group">
				Edição:
				<input type="text" placeholder="Edição" name="edicao" class="form-control" value="<?php echo $edicao;?>">
			</div>
			<div class="form-group">
				Gênero:
				<select name="id_genero" class="form-control">
					<?php
						$sql=mysqli_query($conexao, "SELECT *FROM genero ORDER BY nome_genero ASC;");
						while($lista = mysqli_fetch_assoc($sql)){
							$id_genero=$lista["id_genero"];
							$nome_genero=$lista["nome_genero"];
							echo  '<option value="'.$id_genero.'">'.$nome_genero.'</option>';
						}
					?>
				</select>
			</div>
			<div class="form-group">			
				Quantidade:
				<input type="number" placeholder="Qtd" name="quantidade_livro" class="form-control" value="<?php echo $quantidade_livro;?>">
			</div>
			<div class="form-group">
				Autor:
				<input type="name" placeholder="Autor" name="nome_autor" class="form-control" value="<?php echo $autor;?>">
			</div>	
			<div class="form-group">
				Sinopse:
				<textarea class="form-control" placeholder="Descrição" name="resumo" ><?php echo $resumo?></textarea>
			</div>
			<div class="form-group">
				<div class="container">
					<div class="row">
						<div class="col-md-3 offset-md-3"><button type="reset" class=" btn btn-danger">Limpar</button></div>
						<div class="col-md-3"><button class=" btn btn-primary">Enviar</button></div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>							
			