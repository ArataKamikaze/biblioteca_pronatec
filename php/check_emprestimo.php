<?php
    $sql = mysqli_query($conexao, "select *from livro where id_livro = '$id_l'");
    $_EXIBIR = mysqli_fetch_assoc($sql);
    $nome_l = $_EXIBIR['nome_livro'];

    $sql = mysqli_query($conexao, "select *from aluno where id_aluno = '$id_a'");
    $_EXIBIR = mysqli_fetch_assoc($sql);
    $nome_a = $_EXIBIR['nome_aluno'];
?>