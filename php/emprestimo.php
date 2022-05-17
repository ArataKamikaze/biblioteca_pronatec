<div class="row justify-content-center align-items-center" style="margin-top:3%;">
	<div class="col col-sm col-md col-lg col-xl-9" style="background: #f0f0f0; padding:50px;">
		<form class="form" action="emp.php" method="POST">
			<input type="hidden" name="id-l" value="<?php echo $id_l; ?>">
			<input type="hidden" name="id-a" value="<?php echo $id_a; ?>">
			<h1 class="text-center">Empréstimo de livros</h1>
		 	<div class="form-group">
			 	<div class="container">
				 	<div class="row">
					 	<div class="col-md-2">
			 				<button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#aluno">Buscar</button>
			 			</div>
						<div class="col-md">
							<input type="text" name="aluno" class="form-control" placeholder="Nome do aluno" value="<?php echo $nome_a; ?>">
						</div>
					</div>
				</div>
		 	</div>
			<div class="form-group">
				<div class="container">
				 	<div class="row">
					 	<div class="col-md-2">
		 					<button class="btn btn-secondary" type="button" name="buscar_livro" data-toggle="modal" data-target="#livro">Buscar</button>
		 				</div>
						<div class="col-md">
							<input type="text" name="livro" class="form-control " placeholder="Nome do livro" value="<?php echo $nome_l; ?>">
						</div>
					</div>
				</div>
		 	</div>
			<div class="form-group" >
				<b>Quantidade:</b><br/>
				<input type="number" name="qtd" class="form-control" placeholder="Quantidade">
			</div>
			<div class="form-group">
				<b>Data de Empréstimo:</b><br/>
				<input type="date" name="data" class="form-control">
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