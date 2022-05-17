<?php
	include("db.php");
	session_start();
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$sql = mysqli_query($conexao, "SELECT email_funcionario, senha FROM funcionario where email_funcionario = '$login' AND senha='$senha'");		
		$lista = mysqli_fetch_assoc($sql);
		$email= $lista['email_funcionario'];			
		$pass= $lista['senha']; 
		$_SESSION['login'] = $email;
		$_SESSION['senha'] = $pass;
		
		if($email != NULL AND $pass != NULL){
			?>
				<script language="Javascript">
					location.href="system.php";
				</script>
			<?php
		}
		else {
			session_destroy();
		?>
				<script language="Javascript">
					alert("Login incorreto!!");
					location.href="../index.php";
				</script>
		<?php }?>