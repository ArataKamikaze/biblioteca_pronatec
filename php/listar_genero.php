		<table class="table table-striped table-hover">
			<thead>
				<tr id="opt-genero">
				<th>
					#				
				</th>
				<th>
					Gênero		
				</th>
				<th>
					
				</th>
				</tr>
			</thead>
			<tbody>
<?php
	$id_gen = 0;
	$alt = "&";
	if($busca == NULL){
		$sql=mysqli_query($conexao, "SELECT *FROM genero order by nome_genero ASC");
		while($lista = mysqli_fetch_assoc($sql)){
			$id_gen++;
			$id=$lista['id_genero'];
			$nome_genero=$lista["nome_genero"];
			echo  	'<tr>
						<td>'.$id_gen.'</td>
						<td>'.$nome_genero.'</td>
						<td>
							<div class="row">
								<div class="col-md-6">
									<a href="alt.php?type='.$type.''.$alt.'id='.$id.'" class="text-success">
										<i class="fas fa-plus" style="margin-right:5px;">
										</i>
										Alterar
									</a>
								</div>
							<div class="col-md-6">
								<div class="navbar-nav dropdown ">
									<li>
										<a href="#exc'.$id_gen.'" id="list-options" data-toggle="collapse" style="padding:0px;" class="text-danger nav-link "><i class="fas fa-minus" style="margin-right:5px;"></i>excluir</a>
										<div class="collapse list-unstyled" id="exc'.$id_gen.'">
											<form action="excluir.php" method="GET" style="margin-top:30px;margin-bottom:0;">
												<input type="hidden" name="id" value="'.$id.'">
												<input type="hidden" name="type" value="'.$type.'">  
												<button class="btn btn-danger " type="submit">Confirmar</button>
											</form>
										</div>
									</li>
								</div>
							</div>
						</td>
					</tr>';
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
		$sql=mysqli_query($conexao, "SELECT *FROM genero WHERE nome_genero like '%$busca%' order by nome_genero ASC");
		while($lista = mysqli_fetch_assoc($sql)){
			$id_gen++;
			$id=$lista['id_genero'];
			$nome_genero=$lista["nome_genero"];
			echo  	'<tr>
						<td>'.$id_gen.'</td>
						<td>'.$nome_genero.'</td>
						<td>
							<div class="row">
								<div class="col-md-6">
									<a href="alt.php?type='.$type.''.$alt.'id='.$id.'" class="text-success">
										<i class="fas fa-plus" style="margin-right:5px;">
										</i>
										Alterar
									</a>
								</div>
							<div class="col-md-6">
								<div class="navbar-nav dropdown ">
									<li>
										<a href="#exc'.$id_gen.'" id="list-options" data-toggle="collapse" style="padding:0px;" class="text-danger nav-link "><i class="fas fa-minus" style="margin-right:5px;"></i>excluir</a>
										<div class="collapse list-unstyled" id="exc'.$id_gen.'">
											<form action="excluir.php" method="GET" style="margin-top:30px;margin-bottom:0;">
												<input type="hidden" name="id" value="'.$id.'">
												<input type="hidden" name="type" value="'.$type.'">  
												<button class="btn btn-danger " type="submit">Confirmar</button>
											</form>
										</div>
									</li>
								</div>
							</div>
						</td>
					</tr>';
		}
	}
		?>
		</tbody>
		<tbody></tbody>
	</table> 