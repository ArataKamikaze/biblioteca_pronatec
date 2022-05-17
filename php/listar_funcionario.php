<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Telefone</th>
			<th>Id Funcional</th>
			<th>Alterar</th>
		</tr>
	</thead>
	<tbody>
<?php
	$id_func = 0;
	$alt = "&";
	if($busca == NULL){
		$sql=mysqli_query($conexao, "SELECT *FROM funcionario order by nome_funcionario ASC ");
		while($lista = mysqli_fetch_assoc($sql)){
			$id_func++;
			$id=$lista['id_funcionario'];
			$nome_funcionario=$lista["nome_funcionario"];
			$email_funcionario=$lista['email_funcionario'];
			$tel=$lista['tel_funcionario'];
			$id_funcional = $lista["id_funcional"];
			$senha = $lista["senha"];
			$tam = strlen($tel);
			if($tam == 15){
				$num = explode('-', $tel);
				$tel = $num[0].$num[1];
				$pt1 = substr($tel, 0, 10);
				$pt2 = substr($tel, 10);
				$tel = $pt1.'-'.$pt2;
			}
			if($email_funcionario == "admin" and $senha =="admin"){
				continue 1;
			}
			$sql3=mysqli_query($conexao,"select count(id_funcionario) as count from funcionario");
			$lista3 = mysqli_fetch_assoc($sql3);
			$count = $lista3["count"];
		echo  '<tr><td>'.$id_func.'</td>
				<td>'.$nome_funcionario.'</td>
				<td>'.$email_funcionario.'</td>
				<td>'.$tel.'</td>
				<td>'.$id_funcional.'</td>
				<td><div class="row"><div class="col-md-6">
				<a href="alt.php?type='.$type.''.$alt.'id='.$id.'" class="text-success"><i class="fas fa-plus" style="margin-right:5px;"></i>Alterar</a>
				</div>';
				if($count > 2){
					echo'
				<div class="col-md-6">
				<div class="navbar-nav dropdown ">
					<li>
						<a href="#exc'.$id_func.'" id="list-options" data-toggle="collapse" style="padding:0px;" class="text-danger nav-link "><i class="fas fa-minus" style="margin-right:5px;"></i>excluir</a>
							<div class="collapse list-unstyled" id="exc'.$id_func.'">
								<form action="excluir.php" method="GET" style="margin-top:30px;margin-bottom:0;">
									<input type="hidden" name="id" value="'.$id.'">
									<input type="hidden" name="type" value="'.$type.'">  
									<button class="btn btn-danger l" type="submit">Confirmar</button>
								</form>
							</div>
					</li>
				</div>
				</div>
				</td></tr>';
				}

		}
	}
	else {
		echo' 	<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
									<a href="listar.php?type='.$type.'" class="btn btn-sm text-dark btn-light"><i class="fas fa-undo"></i> <b>Voltar</b></a>
							</li> 
						</ul>
					</div>
				</nav>';
		$sql=mysqli_query($conexao, "SELECT *FROM funcionario where nome_funcionario like '%$busca%' order by nome_funcionario ASC");
		while($lista = mysqli_fetch_assoc($sql)){
			$id_func++;
			$id=$lista['id_funcionario'];
			$nome_funcionario=$lista["nome_funcionario"];
			$email_funcionario=$lista['email_funcionario'];
			$tel=$lista['tel_funcionario'];
			$id_funcional = $lista["id_funcional"];
			
			$tam = strlen($tel);
			if($tam == 15){
				$num = explode('-', $tel);
				$tel = $num[0].$num[1];
				$pt1 = substr($tel, 0, 10);
				$pt2 = substr($tel, 10);
				$tel = $pt1.'-'.$pt2;
			}
			if($email_funcionario == "admin" and $senha =="admin"){
				continue;
			}
		echo  '<tr><td>'.$id_func.'</td>
				<td>'.$nome_funcionario.'</td>
				<td>'.$email_funcionario.'</td>
				<td>'.$tel.'</td>
				<td>'.$id_funcional.'</td>
				<td><div class="row"><div class="col-md-6">
				<a href="alt.php?type='.$type.''.$alt.'id='.$id.'" class="text-success"><i class="fas fa-plus" style="margin-right:5px;"></i>Alterar</a>
				</div>
				<div class="col-md-6">
				<div class="navbar-nav dropdown ">
					<li>
						<a href="#exc'.$id_func.'" id="list-options" data-toggle="collapse" style="padding:0px;" class="text-danger nav-link "><i class="fas fa-minus" style="margin-right:5px;"></i>excluir</a>
							<div class="collapse list-unstyled" id="exc'.$id_func.'">
								<form action="excluir.php" method="GET" style="margin-top:30px;margin-bottom:0;">
									<input type="hidden" name="id" value="'.$id.'">
									<input type="hidden" name="type" value="'.$type.'">  
									<button class="btn btn-danger l" type="submit">Confirmar</button>
								</form>
							</div>
					</li>
				</div>
				</div>
				</td></tr>';

		}
	}
		?>
		</tbody>
		<tbody></tbody>
	</table> 