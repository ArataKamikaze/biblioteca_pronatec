<doctype html>
<html>
	<head>
		<title>Cadastro de Editora</title>
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
							<h1>Cadastro de Editora</h1>						
						</div>					
					</div>
					<div class="row">
						<div class="col-md-6">
							Nome:<br>
							<input type="text" name="nome_editora" placeholder="Nome da Editora" class="form-control">
						</div>
						<div class="col-md-3">
							Data de fundação:<br>
							<input type="date" name="data_fundacao" placeholder="dd/mm/aa" class="form-control">
						</div>
						<div class="col-md-3">
							Telefone:<br>
							<input type="number" name="tel_editora" placeholder="telefone" class="form-control">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-5">
							Endereço:<br>
							<input type="text"name="end_editora" placeholder="Rua/Av"class="form-control">
						</div>
						<div class="col-md-1">
							Nº:<br>
							<input type="number"name="num"class="form-control">
						</div>
						<div class="col-md-3">
							Estado:<br>
							<select class="form-control">
								<option value="1">Vaquinha</option>	
							</select>					
						</div>
						<div class="col-md-3">
							Cidade:<br>
							<select class="form-control">
								<option value="1">Vaca</option>
							</select>									
						</div>				
					</div>
					<div class="row">
						<div class="col-md-4 offset-md-4" style="text-align: center;margin-top:15px;">
							<button type="submit" id="bt1" class="btn btn-primary">Entrar</button>	
						</div>
						
					</div>
				</div>
				</form>
			</div>
		</div>
	</body>
</html>