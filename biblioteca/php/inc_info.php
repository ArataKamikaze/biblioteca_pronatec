<doctype html>
<html>
	<head>
		<title>Cadastro de informações</title>
		<meta charset="UTF-8">
		<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	</head>		
	<body style="background-color:black;background:url(../images/img123.jpg);background-repeat: no-repeat;background-size: cover;">
		<div class="container" style="position: absolute; left: 0px;">
			<div style="background: rgba(220,220,220,0.5); height:100px; text-align: center; border-radius:30px; padding:30px;margin-top:40px;">
				<form class="form" method="post" action="#">
					<div class="row">
						<div class="col-md-2">
							CLASSIFICAÇÃO:
						</div>
						<div class="col-md-4">
							<input type="number" name="classificacao" class="form-control" style="width:300px;">
						</div>
						<div class="col-md-3 offset-md-3">
							<button type="button" class="btn btn-primary" onclick="classificacao();"> cadastrar</button>
						</div>
					</div>	
				</form>
			</div>
			<div style="background: rgba(220,220,220,0.5); height:100px; text-align: center; border-radius:30px; padding:30px;margin-top:40px; ">
				<form class="form" method="post" action="#">
					<div class="row">
						<div class="col-md-2">
							EDITORA:
						</div>
						<div class="col-md-4">
							<input type="text" name="editora" class="form-control" style="width:300px;">
						</div>
						<div class="col-md-3 offset-md-3">
							<button type="button" class="btn btn-primary" onclick="editora()"> cadastrar</button>
						</div>
					</div>	
				</form>
			</div>
			<div style="background: rgba(220,220,220,0.5); height:100px; text-align: center; border-radius:30px; padding:30px;margin-top:40px;">
				<form class="form" method="post" action="#">
					<div class="row">
						<div class="col-md-2">
							GÊNERO:
						</div>
						<div class="col-md-4">
							<input type="text" name="genero" class="form-control" style="width:300px;">
						</div>
						<div class="col-md-3 offset-md-3">
							<button type="button" class="btn btn-primary" onclick=""> cadastrar</button>
						</div>
					</div>	
				</form>
			</div>
			<div style="background: rgba(220,220,220,0.5); height:100px; text-align: center; border-radius:30px; padding:30px;margin-top:40px;">
				<form class="form" method="post" action="#">
					<div class="row">
						<div class="col-md-2">
							LINGUA:
						</div>
						<div class="col-md-4">
							<input type="text" name="lingua" class="form-control" style="width:300px;">
						</div>
						<div class="col-md-3 offset-md-3">
							<button type="button" class="btn btn-primary" > cadastrar</button>
						</div>
					</div>	
				</form>
			</div>
			<div style="background: rgba(220,220,220,0.5); height:100px; text-align: center; border-radius:30px; padding:30px;margin-top:40px;">
				<form class="form" method="post" action="#">
					<div class="row">
						<div class="col-md-2">
							PAÍS:
						</div>
						<div class="col-md-4">
							<input type="text" name="pais" class="form-control" style="width:300px;">
						</div>
						<div class="col-md-3 offset-md-3">
							<button type="button" class="btn btn-primary" > cadastrar</button>
						</div>
					</div>	
				</form>
			</div>
		</div>			
	</body>
</html>