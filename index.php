<doctype html>
<html>
	<head>
		<title>login</title>
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<style>
			button{
				margin: 10px;			
			}
			body{
				background-image: url(images/background_login.jpg);
				background-repeat: no-repeat;
				background-size: cover;
							
			}
		</style>
	</head>		
	<body>
		<div class="container">
			
			<div class="col-md-4 " style="margin-top: 20%;">
				<div style="background-color: rgba(255,255,255,0.5);width: 500px;padding: 40px;border-radius:30px; ">
				<form method="post" action="php/login.php">
					<div class="row">
						<div align="center" class="col-md-12">
							<h1 id="title" style="font-size: 40pt;">Login</h1>				
						</div>			
					</div>
					<div class="row">
						<div class="col-md-12" align="center">
							<input type="text" id="login" name="login" placeholder="login" class="form-control" size="40" >
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12" align="center">
							<input type="password" name="senha" id="senha" placeholder="Senha" class="form-control" size="40" >
						</div>				
					</div>
					<div class="row">
						<div align="center" class="col-md-12">
							<button type="submit" id="bt1" class="btn btn-primary">Entrar</button>				
							<button type="reset" id="bt2" class="btn btn-danger">Limpar</button>
						</div>			
					</div>
					<div class="row">
						<div class="col-md-12" align="center">
							<p>Não possui conta? <a href="html/cad_aluno.html">cadastre-se</a></p>
						</div>
					</div>							
				</form>
				</div>
			</div>		
		</div>
	</body>
</html>