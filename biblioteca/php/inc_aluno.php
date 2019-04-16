<doctype html>
<html>
	<head>
		<title>Cadastro de alunos</title>
		<meta charset="UTF-8">
		<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<style type="text/css">
		::placeholder, ::value{
			text-align: center;		
		}
		</style>
	</head>		
	<body style="background-image: url(../images/background_cadastro_alunos_01.jpg);background-repeat: no-repeat;background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md">
				</div>
			</div>
			<div>
				<form action="" method="POST"style="margin-top:15%;">
				<div style="background-color: rgba(255,255,255,0.5);width: 100%;padding: 40px;border-radius:30px; font-weight: bold;">
					<div class="row">
						<div class="col-md-3">
							Nome:<br>
							<input type="text"  name="nome_aluno" placeholder="Nome do Aluno" class="form-control" required="required">
						</div>
						<div class="col-md-3">
							CPF:<br>
							<input type="number"  name="cpf_aluno" placeholder="CPF do Aluno" class="form-control" required="required">
						</div>
						<div class="col-md-3">
							E-mail:<br>
							<input type="email"  name="email_aluno" placeholder="E-mail do Aluno" class="form-control" required="required">
						</div>
						<div class="col-md-3">
							Data de Nascimento:<br>
							<input type="date"  name="nasc_aluno" placeholder="dd/mm/aa" class="form-control" required="required">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							Telefone:<br>	
							<input type="number"  name="tel_aluno" placeholder="Telefone do Aluno" class="form-control" required="required">							
						</div>
						<div class="col-md-3">
							CEP:<br>
							<input type="number"  name="cep_aluno" placeholder="CEP do Aluno" class="form-control" required="required">
						</div>
						<div class="col-md-4">
							Bairro:<br>
							<select name="bairro_aluno" class="form-control" required="required">
								<option>granja de freitas</option>
							</select>
						</div>
						<div class="col-md-2">
							Número:<br>
							<input type="number"  name="num_aluno" placeholder="Nº" class="form-control" required="required">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							Endereço:<br>
							<input type="text"  name="end_aluno" placeholder="Rua/av." class="form-control" required="required">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12" align="center">
							<button type="submit" class="btn btn-primary">Entrar</button>	
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</body>
endereço
telefone


</html>