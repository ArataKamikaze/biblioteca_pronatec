<doctype html>
<html>
	<head>
		<title>Cadastro de Autor</title>
		<meta charset="UTF-8">
		<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	</head>		
	<body style="background-image: url(../images/background_cadastro_alunos_01.jpg);background-repeat: no-repeat;background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md">
				</div>
			</div>
			<div>
				<form style="margin-top:15%;">
				<div style="background-color: rgba(255,255,255,0.5);width: 100%;padding: 40px;border-radius:30px; font-weight: bold;">
					<div class="row">
						<div class="col-md-12" style="text-align:center;">
							<h1>Cadastro de Autor</h1>						
						</div>					
					</div>
					<div class="row">
						<div class="col-md-3">
							Nome:<br>
							<input type="text" name="nome_autor" placeholder="Nome do Autor" class="form-control">
						</div>
						<div class="col-md-3">
							Data de Nascimento:<br>
							<input type="date" name="nasc_aluno" placeholder="dd/mm/aa" class="form-control">
						</div>
						<div class="col-md-3">
							Data de morte:<br>
							<input type="date" name="morte-autor" placeholder="dd/mm/aa" class="form-control">
						</div>
						<div class="col-md-3">
							País de origem:<br>
							<input type="text" id="cid-aluno" name="cid-aluno" placeholder="Cidade" class="form-control">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12" style="text-align: center;">
							<button type="submit" id="bt1" class="btn btn-primary">Entrar</button>	
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</body>
</html>