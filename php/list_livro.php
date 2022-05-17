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
							<td>'.$quantidade_livro.'</td>
							<td>
								<a href="#" class="text-primary"  data-toggle="modal" data-target="#resumo'.$id_livro.'">Ver Resumo</a>
								<div id="resumo'.$id_livro.'" class="modal fade" role="dialog">
									<div class="modal-dialog modal-lg">
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
								<form action="#">
									<input type="hidden" name="id-l" value="'.$id.'">
									<input type="hidden" name="id-a" value="'.$id_a.'">
									<button type="submit" class="btn btn-sm btn-secondary"';
									
									if($qtd >= $quantidade_livro){
										echo 'disabled="true"';
									}
									echo'
									
									>Selecionar</button>
								</form>
							</td>
						</tr>';
							
			}
		?>
	</tbody>
	<tbody></tbody>
</table> 
