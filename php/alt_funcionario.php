<?php
	include("check.php");
	$id=$_GET['id'];
	$sql=mysqli_query($conexao ,"SELECT *from funcionario where id_funcionario = '$id'");
	while($lista = mysqli_fetch_assoc($sql)){
		$nome=$lista["nome_funcionario"];
		$telefone=$lista["tel_funcionario"];
		$id_func=$lista["id_funcional"];
		$email=$lista["email_funcionario"];
		$senha=$lista["senha"];
		
	}			
?>
<div class="row justify-content-center align-items-center" style="margin-top:3%;">
	<div class="col col-sm col-md col-lg col-xl-5 " style="background: #f0f0f0; padding:50px;">				
		<form action="alterar.php" method="GET">
			<input type="hidden" name="type" value="<?php echo $type; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<h1 style="text-align:center;">Alteração de Cadastro</h1>
			</div>
			<div class="form-group">
				Nome:<br>
				<input type="text"  name="nome_funcionario" placeholder="Nome" class="form-control" value="<?php echo $nome ?>">
			</div>
			<div class="form-group">
				E-mail:<br>
				<input type="email"  name="email_funcionario" placeholder="E-mail" class="form-control" required="required" value="<?php echo $email ?>">
			</div>
			<div class="form-group">
				Senha:<br>
				<input type="password"  name="senha" placeholder="Senha" class="form-control" required="required" value="<?php echo $senha ?>">
			</div>
			<div class="form-group">
				Telefone:<br>	
				<input type="tel" name="tel_funcionario" id="telefone" placeholder="(00) 0000-0000"class="form-control"pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
				<script type="text/javascript">$("#telefone").mask("(00) 0000-00009");</script>	
			</div>
			<div class="form-group">
				Identificação Funcional:<br>
				<input type="number"  name="id_funcional" placeholder="ID Funcional" class="form-control" value="<?php echo $id_func ?>">
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