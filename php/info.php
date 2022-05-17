<?php


    $sql2=mysqli_query($conexao, "SELECT  sum(qtd) as qtd FROM emprestimo where estado = 'pendente'");
    $lista2 = mysqli_fetch_assoc($sql2);
    $qtd = $lista2["qtd"];

    
    $sql2=mysqli_query($conexao, "SELECT  sum(quantidade_livro) as qtd_l FROM livro");
    $lista2 = mysqli_fetch_assoc($sql2);
    $qtd_l = $lista2["qtd_l"];
    
    $sql2=mysqli_query($conexao, "SELECT  count(id_aluno) as qtd_aluno FROM aluno");
    $lista2 = mysqli_fetch_assoc($sql2);
    $qtd_aluno = $lista2["qtd_aluno"];

    $sql2=mysqli_query($conexao, "SELECT  count(id_funcionario) as qtd_funcionario FROM funcionario");
    $lista2 = mysqli_fetch_assoc($sql2);
    $qtd_funcionario = $lista2["qtd_funcionario"];

    $sql2=mysqli_query($conexao, "SELECT  count(id_genero) as qtd_genero FROM genero");
    $lista2 = mysqli_fetch_assoc($sql2);
    $qtd_genero = $lista2["qtd_genero"];

    $sql2=mysqli_query($conexao, "SELECT  count(id_editora) as qtd_editora FROM editora");
    $lista2 = mysqli_fetch_assoc($sql2);
    $qtd_editora = $lista2["qtd_editora"];

    $sql2=mysqli_query($conexao, "SELECT  count(id_livro) as qtd_livro FROM livro");
    $lista2 = mysqli_fetch_assoc($sql2);
    $qtd_livro = $lista2["qtd_livro"];