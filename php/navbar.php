<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" style="height:50px">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="row">
                        <form class="form" style="margin-bottom:0px;">
                            <div class="col-md-12">
                                <?php
                                    if($type == "emprestimook"){
                                ?>
                                    <a href="emprestar.php?id-a=1&id-l=1&type=emprestimo" class="btn btn-sm btn-primary">emprestimo</a>
                                    <a href="listar.php?type=emprestimo" class="btn btn-sm btn-secondary">pendentes</a>
                                <?php
                                   }
                                ?>

                                <?php
                                    if($type == "emprestimo"){
                                ?>
                                    <a href="emprestar.php?id-a=1&id-l=1&type=emprestimo" class="btn btn-sm btn-primary">emprestimo</a>
                                    <a href="listar.php?type=emprestimook" class="btn btn-sm btn-secondary">historico</a>
                                <?php
                                    }
                                ?>


                                <?php 
                                    if($type != "emprestimo" and $type != "emprestimook"){ 
                                ?>
                                    <a href="#" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#incluir_<?php echo $type; ?>"><i class="fas fa-plus" style="margin-right:5px;"></i>Cadastrar</a>
                                <?php 
                                    }
                                ?>
                                
                                
                            </div>
                        </form>
                    </div>
                </li> 
            </ul>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <?php if($type != "emprestimo" and $type != "emprestimook"){ ?>
                    <form action="buscar.php" method="GET" class="form" style="margin-bottom:0px;">
                        <input type="hidden" name="type" value="<?php echo $type; ?>">
                        <div class="row">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-sm bg-primary text-light"><i class="fas fa-search" style="margin-right:5px;"></i>Buscar</button>
                            </div>
                            <div class="col-md-8">
                                <input tipe="text" name="busca" class=" form-control-sm form-control">
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </nav>