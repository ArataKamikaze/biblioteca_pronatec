<!doctype html>
<html>
	<head>
		<title>login</title>
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	</head>		
	<body class="bg-light" style="background: url('https://wallpapercave.com/wp/wp8191806.jpg'); background-size:cover; background-repeat: no-repeat;">
	<div class="container-all">
		<div class="row justify-content-center align-items-center" style="margin-top:15%;">
			<div class="col-md-3 bg-light", style="border-radius: 10px">
				<form method="post" action="php/login.php">
					<div class="form-group">
						<h1 id="title" class="text-center text-dark">Login</h1>				
					</div>			
					<div class="form-group">
						<input type="text"  name="login" placeholder="E-mail" class="bg-light text-dark border-dark form-control">
					</div>
					<div class="form-group">
						<input type="password" name="senha" placeholder="Senha" class="bg-light text-dark border-dark form-control">
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
	</div>
	</body>
</html>