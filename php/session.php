<?php 
    session_start();
    $login = $_SESSION['login'];
    $senha = $_SESSION['senha'];
    if($login == NULL AND $senha == NULL) {
		session_destroy();
    	?>
    		<script language="Javascript">
				alert("Houve um problema, por favor realize o login novamente!!");
				location.href="../index.php";
			</script>
		
		<?php
    }
?>