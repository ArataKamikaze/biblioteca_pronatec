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
			Autor				
		</th>
		<th>
			Editora				
		</th>
		<th>
			gênero				
		</th>
		<th>
			Edição				
		</th>
		<th>
			Qtd				
		</th>
		<th>
			Resumo
		</th>
		<th>
			
		</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$id_livro = 0;
			$alt = "&";
			if($busca == NULL){
				$sql=mysqli_query($conexao, "SELECT * FROM livro order by nome_livro ASC");
				while($lista = mysqli_fetch_assoc($sql)){
					$id_editora = $lista['id_editora'];
					$id_genero = $lista['id_genero'];
					$id=$lista['id_livro'];
					$nome_livro=$lista["nome_livro"];
					$edicao=$lista['edicao'];
					$quantidade_livro=$lista['quantidade_livro'];
					$resumo=$lista['resumo'];
					$autor = $lista["nome_autor"];
					$id_livro++;
					
					$sql2=mysqli_query($conexao, "SELECT * FROM editora where id_editora = '$id_editora'");
					$lista2 = mysqli_fetch_assoc($sql2);	
					$nome_editora= $lista2['nome_editora'];
					
					$sql2=mysqli_query($conexao, "SELECT * FROM genero where id_genero = '$id_genero'");
					$lista2 = mysqli_fetch_assoc($sql2);
					$nome_genero= $lista2['nome_genero'];

					$sql2=mysqli_query($conexao, "SELECT  sum(qtd) as qtd FROM emprestimo where id_livro = '$id' and estado = 'pendente'");
					$lista2 = mysqli_fetch_assoc($sql2);
					$qtd = $lista2["qtd"];
						
					
						
					
					echo	'<tr>
							<td>'.$id_livro.'</td>
							<td>'.$nome_livro.'</td>
							<td>'.$autor.'</td>
							<td>'.$nome_editora.'</td>
							<td>'.$nome_genero.'</td>
							<td>'.$edicao.'</td>
							<td>'.$quantidade_livro;
					if($qtd >0){
						echo '<span class="text-danger">(-'.$qtd.')</span>';
					}
					echo    '</td>
							<td>
								<a href="#" class="text-primary"  data-toggle="modal" data-target="#resumo'.$id_livro.'">Ver Resumo</a>
								<div id="resumo'.$id_livro.'" class="modal fade" role="dialog">
									<div class="modal-dialog modal-lg">
										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<h4>'.$nome_livro.'</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
												'.$resumo.'
											</div>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="row">
									<div class="col-md-6">
										<a href="alt.php?type='.$type.''.$alt.'id='.$id.'" class="text-success"><i class="fas fa-plus" style="margin-right:5px;"></i>Alterar</a>
									</div>
									<div class="col-md-6">
										<div class="navbar-nav dropdown ">
											<li>
												<a href="#exc'.$id_livro.'" id="list-options" data-toggle="collapse" style="padding:0px;" class="text-danger nav-link "><i class="fas fa-minus" style="margin-right:5px;"></i>excluir</a>
													<div class="collapse list-unstyled" id="exc'.$id_livro.'">
														<form action="excluir.php" method="GET" style="margin-top:30px;margin-bottom:0;">
															<input type="hidden" name="id" value="'.$id.'">
															<input type="hidden" name="type" value="'.$type.'">  
															<button class="btn btn-danger " type="submit">Confirmar</button>
														</form>
													</div>
											</li>
										</div>
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
				$sql=mysqli_query($conexao, "SELECT * FROM livro WHERE nome_livro like '%$busca%' order by nome_livro ASC");
				while($lista = mysqli_fetch_assoc($sql)){
					$id_editora = $lista['id_editora'];
					$id_genero = $lista['id_genero'];
					$id=$lista['id_livro'];
					$nome_livro=$lista["nome_livro"];
					$edicao=$lista['edicao'];
					$quantidade_livro=$lista['quantidade_livro'];
					$resumo=$lista['resumo'];
					$autor = $lista["nome_autor"];
					$id_livro++;
					
					$sql2=mysqli_query($conexao, "SELECT * FROM editora where id_editora = '$id_editora'");
					$lista2 = mysqli_fetch_assoc($sql2);
					$nome_editora= $lista2['nome_editora'];

					$sql2=mysqli_query($conexao, "SELECT * FROM genero where id_genero = '$id_genero'");
					$lista2 = mysqli_fetch_assoc($sql2);
					$nome_genero= $lista2['nome_genero'];
					
					$sql2=mysqli_query($conexao, "SELECT  sum(qtd) as qtd FROM emprestimo where id_livro = '$id'");
					$lista2 = mysqli_fetch_assoc($sql2);
					$qtd = $lista2["qtd"];
						
					
					echo	'<tr>
							<td>'.$id_livro.'</td>
							<td>'.$nome_livro.'</td>
							<td>'.$autor.'</td>
							<td>'.$nome_editora.'</td>
							<td>'.$nome_genero.'</td>
							<td>'.$edicao.'</td>
							<td>'.$quantidade_livro;
					if($qtd >0){
						echo '<p class="text-danger">'.$qtd.'</p>';
					}
					echo    '</td>
							<td>
								<a href="#" class="text-primary"  data-toggle="modal" data-target="#resumo'.$id_livro.'">Ver Resumo</a>
								<div id="resumo'.$id_livro.'" class="modal fade" role="dialog">
									<div class="modal-dialog modal-lg">
										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<h4>'.$nome_livro.'</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
												'.$resumo.'
											</div>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="row">
									<div class="col-md-6">
										<a href="alt.php?type='.$type.''.$alt.'id='.$id.'" class="text-success"><i class="fas fa-plus" style="margin-right:5px;"></i>Alterar</a>
									</div>
									<div class="col-md-6">
										<div class="navbar-nav dropdown ">
											<li>
												<a href="#exc'.$id_livro.'" id="list-options" data-toggle="collapse" style="padding:0px;" class="text-danger nav-link "><i class="fas fa-minus" style="margin-right:5px;"></i>excluir</a>
													<div class="collapse list-unstyled" id="exc'.$id_livro.'">
														<form action="excluir.php" method="GET" style="margin-top:30px;margin-bottom:0;">
															<input type="hidden" name="id" value="'.$id.'">
															<input type="hidden" name="type" value="'.$type.'">  
															<button class="btn btn-danger " type="submit">Confirmar</button>
														</form>
													</div>
											</li>
										</div>
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
