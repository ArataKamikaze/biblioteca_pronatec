<?php
	include("check.php");
	$id=$_GET["id"];
	$sql= mysqli_query($conexao, "SELECT *from aluno where id_aluno='$id'");
	while($lista = mysqli_fetch_assoc($sql)){
		$nome=$lista["nome_aluno"];
		$email_aluno=$lista['email_aluno'];
		$tel=$lista['tel_aluno'];
		$turma = $lista["turma_aluno"];
	}		
?>
<div class="row justify-content-center align-items-center" style="margin-top:3%;">
	<div class="col col-sm col-md col-lg col-xl-5 " style="background: #f0f0f0; padding:50px;">
		<form action="alterar.php" method="GET">
			<input type="hidden" name="type" value="<?php echo $type; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="cform-group">
				<h1 class="text-center">Alteração de Cadastro</h1>
			</div>
			<div class="form-group">
				Nome:<br>
				<input type="text"  name="nome_aluno" placeholder="Nome do Aluno" class="form-control" value="<?php echo $nome ?>">
			</div>
			<div class="form-group">
				Sexo:<br>
				<select name="sexo_aluno"class="form-control">
					<option value="F">Feminino</option>
					<option value="M">Masculino</option>							
				</select>
			</div>						
			<div class="form-group">
				E-mail:<br>
				<input type="email"  name="email_aluno" placeholder="E-mail do Aluno" class="form-control" value="<?php echo $email_aluno ?>">
			</div>
			<div class="form-group">
				Telefone:<br>	
				<input type="tel" name="tel_aluno" id="telefone" placeholder="(00) 0000-0000"class="form-control"pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
				<script type="text/javascript">$("#telefone").mask("(00) 0000-00009");</script>	
			</div>
			<div class="form-group">
				Turma:<br>	
				<input type="number"  name="turma_aluno" placeholder="Turma " class="form-control" value="<?php echo $turma ?>">							
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