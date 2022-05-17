<div class="row justify-content-center align-items-center" style="margin-top:3%;">
	<div class="col col-sm col-md col-lg col-xl-9" style="background: #f0f0f0; padding:50px;">
		<form action="incluir.php?type=genero" method="GET">
			<input type="hidden" name="type" value="<?php echo $type; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<h1 class="text-center">Cadastro de Genero</h1>
			</div>				
			<div class="form-group">
				<input type="text" name="nome_genero" placeholder="Gênero" class="form-control">
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