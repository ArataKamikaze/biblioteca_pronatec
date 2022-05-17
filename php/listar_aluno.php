<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>
				#				
			</th>
			<th>
				Nome				
			</th>
			<th>
				Sexo			
			</th>
			<th>
				Turma
			</th>
			<th>
				E-mail			
			</th>
			<th>
				Telefone
			</th>
			<th>
				Alterar
			</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$id_alun = 0;
			$alt = "&";
			if($busca == NULL){
				$sql=mysqli_query($conexao, "SELECT *FROM aluno order by nome_aluno ASC");
				while($lista = mysqli_fetch_assoc($sql)){
					$id_alun++;
					$id=$lista['id_aluno'];
					$nome=$lista["nome_aluno"];
					$sexo=$lista['sexo'];
					$email=$lista['email_aluno'];
					$tel=$lista['tel_aluno'];
					$turma=$lista['turma_aluno'];
				
					$tam = strlen($tel);
					if($tam == 15){
						$num = explode('-', $tel);
						$tel = $num[0].$num[1];
						$pt1 = substr($tel, 0, 10);
						$pt2 = substr($tel, 10);
						$tel = $pt1.'-'.$pt2;
					}
				

				
					echo'	<tr>
								<td>'.$id_alun.'</td>
								<td>'.$nome.'</td>
								<td>'.$sexo.'</td>
								<td>'.$turma.'</td>
								<td>'.$email.'</td>
								<td>'.$tel.'</td>
								<td>
									<div class="row"><div class="col-md-6">
										<a href="alt.php?type='.$type.''.$alt.'id='.$id.'" class="text-success">
											<i class="fas fa-plus" style="margin-right:5px;">
											</i>
											Alterar
										</a>
									</div>
									<div class="col-md-6">
										<div class="navbar-nav dropdown ">
											<li>
												<a href="#exc'.$id_alun.'" id="list-options" data-toggle="collapse" style="padding:0px;" class="text-danger nav-link ">
													<i class="fas fa-minus" style="margin-right:5px;">
													</i>
													excluir
												</a>
											
												<div class="collapse list-unstyled" id="exc'.$id_alun.'">
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
											<a href="listar.php?type='.$type.'" class="btn btn-sm btn-secondary"><i class="fas fa-undo" style="margin-right:5px;"></i>voltar</a>
									</li> 
								</ul>
							</div>
						</nav>';
				$sql=mysqli_query($conexao, "SELECT *FROM aluno where nome_aluno like '%$busca%' order by nome_aluno ASC");
				while($lista = mysqli_fetch_assoc($sql)){
					$id_alun++;
					$id=$lista['id_aluno'];
					$nome=$lista["nome_aluno"];
					$sexo=$lista['sexo'];
					$email=$lista['email_aluno'];
					$tel=$lista['tel_aluno'];
					$turma=$lista['turma_aluno'];
				
					$tam = strlen($tel);
					if($tam == 15){
						$num = explode('-', $tel);
						$tel = $num[0].$num[1];
						$pt1 = substr($tel, 0, 10);
						$pt2 = substr($tel, 10);
						$tel = $pt1.'-'.$pt2;
					}
				

				
					echo'	<tr>
								<td>'.$id_alun.'</td>
								<td>'.$nome.'</td>
								<td>'.$sexo.'</td>
								<td>'.$turma.'</td>
								<td>'.$email.'</td>
								<td>'.$tel.'</td>
								<td>
									<div class="row"><div class="col-md-6">
										<a href="alt.php?type='.$type.''.$alt.'id='.$id.'" class="text-success">
											<i class="fas fa-plus" style="margin-right:5px;">
											</i>
											Alterar
										</a>
									</div>
									<div class="col-md-6">
										<div class="navbar-nav dropdown ">
											<li>
												<a href="#exc'.$id_alun.'" id="list-options" data-toggle="collapse" style="padding:0px;" class="text-danger nav-link ">
													<i class="fas fa-minus" style="margin-right:5px;">
													</i>
													excluir
												</a>
											
												<div class="collapse list-unstyled" id="exc'.$id_alun.'">
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
</table>