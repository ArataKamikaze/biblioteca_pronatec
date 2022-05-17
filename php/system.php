
	<?php
		include("header.php");
		include("session.php");
		include('sidebar.php');
		include("db.php");
		include("info.php");
		include("endfile.php");
    ?>
<div class="row justify-content-center align-items-center font-weight-bold" style="margin-top:3%;">
	<div class="col col-sm col-md col-lg col-xl-3 " style="background: #f0f0f0; padding:50px;">				
		<form>
			<div class="form-group" style="text-align:center;">
				<h1>informações</h1>						
			</div>
			<div class="form-group">
				Qtd de livros:
				<input type="text" class="border-bottom bg-light form-control" value="<?php echo $qtd_l; ?>" disabled="true">
			</div>
			<div class="form-group">
				Qtd de livros total:
				<input type="text" class="border-bottom bg-light form-control" value="<?php echo $qtd; ?>" disabled="true">
			</div>
			<div class="form-group">
				Qtd de livros:
				<input type="text" class="border-bottom bg-light form-control" value="<?php echo $qtd_livro; ?>" disabled="true">
			</div>
			<div class="form-group">
				Qtd de alunos:
				<input type="text" class="border-bottom bg-light form-control" value="<?php echo $qtd_aluno; ?>" disabled="true">
			</div>
			<div class="form-group">
				Qtd de funcionarios:
				<input type="text" class="border-bottom bg-light form-control" value="<?php echo $qtd_funcionario; ?>" disabled="true">
			</div>
			<div class="form-group">
				Qtd de generos:
				<input type="text" class="border-bottom bg-light form-control" value="<?php echo $qtd_genero; ?>" disabled="true">
			</div>
			<div class="form-group">
				Qtd de editoras:
				<input type="text" class="border-bottom bg-light form-control" value="<?php echo $qtd_editora; ?>" disabled="true">
			</div>
			<div class="form-group">
				Qtd de livros :
				<input type="text" class="border-bottom bg-light form-control" value="<?php echo $qtd_l; ?>" disabled="true">
			</div>
		</form>
	</div>
</div>			