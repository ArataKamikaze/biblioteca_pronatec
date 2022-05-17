
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Biblioteca </div>
      <div class="list-group list-group-flush">
        <a href="system.php" class="list-group-item list-group-item-action bg-light">Home</a>
        <div>
          <a href="#homeSubmenu" id="list-options" data-toggle="collapse"  class="dropdown-toggle list-group-item list-group-item-action bg-light">Cadastro</a>
          <div class="collapse list-unstyled" id="homeSubmenu">
                <a id="opt-aluno" href="listar.php?type=aluno&popup=2" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-graduate" style="margin-right:5px;"></i>Aluno</a>
                <a id="opt-editora" href="listar.php?type=editora&popup=2" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book-open" style="margin-right:5px;"></i>Editora</a>
                <a id="opt-funcionario" href="listar.php?type=funcionario&popup=2" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user" style="margin-right:5px;"></i>Funcionario</a>
                <a id="opt-genero" href="listar.php?type=genero&popup=2" class="list-group-item list-group-item-action bg-light"><i class="fas fa-star" style="margin-right:5px;"></i>Gênero</a>
                <a id="opt-livro" href="listar.php?type=livro&popup=2" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book" style="margin-right:5px;"></i>Livro</a>
                <a id="opt-emprestimo" href="listar.php?type=emprestimo&popup=2" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book" style="margin-right:5px;"></i>emprestimo</a>
          </div>
        </div>

      
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-light " id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="exit.php">Exit</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="container-all">
    

