<?php
	include("check.php");
	$id=$_GET['id'];
	$sql=mysqli_query($conexao ,"SELECT *from genero where id_genero= '$id'");
	while($lista = mysqli_fetch_assoc($sql)){
		$genero=$lista["nome_genero"];
	}		
?>
<div class="row justify-content-center align-items-center" style="margin-top:3%;">
	<div class="col col-sm col-md col-lg col-xl-5 " style="background: #f0f0f0; padding:50px;">				
		<form action="alterar.php" method="GET">
			<input type="hidden" name="type" value="<?php echo $type; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group" style="text-align:center;">
				<h1>Cadastro de Gênero</h1>						
			</div>					
			<div class="form-group">
				<input type="text"  name="nome_genero" placeholder="Gênero" class="form-control" value="<?php echo $genero ?>">
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
			