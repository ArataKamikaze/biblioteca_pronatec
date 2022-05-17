<div id="incluir_<?php echo $type; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <?php include('inc_'.$type.'.php'); ?>
            </div>
        </div>
    </div>
</div>

<div id="livro" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h1 class="text-center">Livros</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <?php include('list_livro.php'); ?>
            </div>
        </div>
    </div>
</div>

<div id="aluno" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h1 class="text-center">aluno</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <?php include('list_aluno.php'); ?>
            </div>
        </div>
    </div>
</div>

