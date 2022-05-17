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
								<form action="#">
									<input type="hidden" name="id-l" value="'.$id_l.'">
									<input type="hidden" name="id-a" value="'.$id.'">
									<button type="submit" class="btn btn-sm btn-secondary">Selecionar</button>
								</form>
							</td>
						</tr>';
			}
		?>
	</tbody>
</table>