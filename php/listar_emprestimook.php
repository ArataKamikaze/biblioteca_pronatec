<table class="table table-striped table-hover">
	<thead>
		<tr>
		<th>
			#				
		</th>
		<th>
			Aluno		
		</th>
		<th>
			Livro
		</th>
		<th>
			Qtd.
		</th>
		<th>
			Data de empréstimo
		</th>
		<th>
			Data de Devolução
		</th>
		<th>
			
		</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$id_emp = 0;
		$sql=mysqli_query($conexao, "SELECT * FROM emprestimo where estado = 'ok' order by id_emprestimo Desc");
		while($lista = mysqli_fetch_assoc($sql)){
			$id_aluno = $lista['id_aluno'];
			$id_livro = $lista['id_livro'];
			$data_emp = $lista['data_emp'];
			$data_dev = $lista['data_dev'];
			$qtd = $lista['qtd'];
			$id_emp++;
			
			$sql2=mysqli_query($conexao, "SELECT * FROM aluno where id_aluno = '$id_aluno'");
			while($lista2 = mysqli_fetch_assoc($sql2)){
				$nome_aluno = $lista2['nome_aluno'];
				
				
				$sql3=mysqli_query($conexao, "SELECT * FROM livro where id_livro = '$id_livro'");
				while($lista3 = mysqli_fetch_assoc($sql3)){
					$nome_livro = $lista3['nome_livro'];
					
					$id=$lista['id_emprestimo'];
					$date = explode('-', $data_emp);
					$ano = $date[0];
					$mes= $date[1];
					$dia  = $date[2];
					$data_emp = $dia.'/'.$mes.'/'.$ano;
					$date = explode('-', $data_dev);
					$ano = $date[0];
					$mes= $date[1];
					$dia  = $date[2];
					$data_dev = $dia.'/'.$mes.'/'.$ano;
					echo  '<tr><td>'.$id_emp.'</td>
						<td>'.$nome_aluno.'</td>
						<td>'.$nome_livro.'</td>
						<td>'.$qtd.'</td>
						<td>'.$data_emp.'</td>
						<td>'.$data_dev.'</td>
						';
				}
			}
		}
		?>
	</tbody>
	<tbody>
	</tbody>
</table>