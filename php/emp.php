<?php
	include('db.php');
	include('session.php');
	$id_livro = $_POST["id-l"];
	$id_aluno = $_POST["id-a"];
	$qtd = $_POST['qtd'];
	$data_emp = $_POST['data'];
	$mt = 0;

	$date = explode('-', $data_emp);
	$ano = $date[0];
	$mes= $date[1];
	$dia  = $date[2];
	
	$sql=mysqli_query($conexao, "SELECT  sum(qtd) as qtd_emp FROM emprestimo where id_livro = '$id_livro' and estado = 'pendente'");
    $lista = mysqli_fetch_assoc($sql);
	$qtd_emp = $lista["qtd_emp"];
	
	$sql=mysqli_query($conexao, "SELECT  sum(quantidade_livro) as qtd_livro FROM livro where id_livro = '$id_livro'");
    $lista = mysqli_fetch_assoc($sql);
	$qtd_livro = $lista["qtd_livro"];

	$sum = $qtd_livro-$qtd_emp;
		echo $sum;
	if($qtd > $sum){
		?>
		<script language="Javascript">
		alert("não há tantos livros disponíveis, por favor escolha uma quantidade correta!");
		location.href="listar.php?type=emprestimo";
		</script>
	
	<?php
	}
	else{
	if($mes == 1 OR $mes == 3 OR $mes == 5 OR $mes == 7 OR $mes == 8 OR $mes == 10 OR $mes == 12){
        $mt = 31;
   }
   else if($mes == 4 OR $mes == 6 OR $mes == 9 OR $mes == 11){
        $mt = 30;
   }
   else if($mes == 2 AND $ano % 4 == 0){
        $mt = 29;
   }
   else if($mes == 2){
        $mt = 28;
   }
	
	if($mes == 12 AND $dia >= $mt-7){
		$ano++;
		$mes = '01';
		$dia = $dia+7-$mt;
	}
   else{
        $dia = $dia +7;
	}
	
	$datinha = $ano.'-'.$mes.'-'.$dia;
	
	$sql = mysqli_query($conexao, "INSERT INTO emprestimo(id_livro, id_aluno, qtd, data_emp, data_dev, estado) 
											 VALUES ('$id_livro', '$id_aluno', '$qtd', '$data_emp', '$datinha', 'pendente')");		
	}
?>
<script language="Javascript">
location.href="listar.php?type=emprestimo";
</script>
